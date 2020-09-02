<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\DetalleSolicitud;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CreateCompraSoatRequest;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class DetalleCompraSoat extends DetalleSolicitud
{
    protected $table = "DetalleCompraSoat";

    protected $primaryKey = "IdDetalleCompraSoat";

    public $incrementing = true;

    public $timestamps = false;

    public $fillable = [
        "IdSolicitud",
        "Nombres",
        "ApellidoPaterno",
        "ApellidoMaterno",
        "FechaNacimiento",
        "Telefono",
        "Email",
        "IdTipoDocumentoIdentidad",
        "NumeroDocumento",
        "Direccion",
        "Placa",
        "Asientos",
        "Uso",
        "AnioVehiculo",
        "CompaniaSeguro",
        "TipoCompra",
        "ImagenTarjetaPropiedad",
        "ImagenDni"
    ];

    const TIPO_COMPRA_ADQUISICION = "Adquisición";
    const TIPO_COMPRA_RENOVACION = "Renovación";

    /**
     * Registrar en la tabla respectiva
     *
     * @param CreateCompraSoatRequest $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function register(CreateCompraSoatRequest $data)
    {
        $tipoDocumentoIdentidadModel = new TipoDocumentoIdentidad();
        $tipoDocumentoIdentidad = $tipoDocumentoIdentidadModel->getById(
            $data->input("tipo_documento_identidad")
        );
        if (!$tipoDocumentoIdentidad) {
            throw new NotFoundHttpException("El tipo de documento de identidad no existe o no es válido");
        }

        if ($data->input("tipo_compra") === "renovacion") {
            $detalle = $this->registerRenovacion($data);
        } else if ($data->input("tipo_compra") === "adquisicion") {
            $detalle = $this->registerAdquisicion($data);
        } else {
            throw new BadRequestHttpException("Solo se puede escoger entre 'renovacion' y 'adquisicion'");
        }

        return $detalle;
    }

    /**
     * Registra una compra de SOAT mediante renovación
     *
     * @param CreateCompraSoatRequest $data
     * @return void
     */
    private function registerRenovacion(CreateCompraSoatRequest $data)
    {
        //  Crear solicitud
        $solicitudModel = new Solicitud();
        $solicitud = $solicitudModel->register(
            Solicitud::PRODUCTO_SOAT,
            Solicitud::TIPO_SOLICITUD_COMPRA
        );

        //  Procesar imagen
        $tarjetaPropiedad = $data->file("imagen_tarjeta_propiedad");
        $extension = $tarjetaPropiedad->getClientOriginalExtension();
        $newFilename = $solicitud->Codigo . "_1.${extension}";
        $isImageUploaded = Storage::disk('local')->put($newFilename, File::get($tarjetaPropiedad));

        if (!$isImageUploaded) {
            $solicitud->delete();
            throw new FileException("No se pudo subir la imagen");
        }

        return self::create([
            "IdSolicitud" => $solicitud->IdSolicitud,
            "Nombres" => $data->input("nombres"),
            "ApellidoPaterno" => $data->input("apellido_paterno"),
            "ApellidoMaterno" => $data->input("apellido_materno"),
            "FechaNacimiento" => Carbon::parse($data->input("fecha_nacimiento")),
            "Telefono" => $data->input("telefono"),
            "Email" => $data->input("correo"),
            "IdTipoDocumentoIdentidad" => $data->input("tipo_documento_identidad"),
            "NumeroDocumento" => $data->input("numero_documento"),
            "TipoCompra" => self::TIPO_COMPRA_RENOVACION,
            "ImagenTarjetaPropiedad" =>  Storage::url($newFilename)
        ]);
    }

    private function registerAdquisicion(CreateCompraSoatRequest $data)
    {
        //  Crear solicitud
        $solicitudModel = new Solicitud();
        $solicitud = $solicitudModel->register(
            Solicitud::PRODUCTO_SOAT,
            Solicitud::TIPO_SOLICITUD_COMPRA
        );

        //  Procesar imagen de tarjeta de propiedad y/o poliza
        $tarjetaPropiedad = $data->file("imagen_tarjeta_propiedad");
        $extension = $tarjetaPropiedad->getClientOriginalExtension();
        $newTarjetaPropiedadFilename = $solicitud->Codigo . "_1.${extension}";
        $isTarjetaImageUploaded = Storage::disk('local')
            ->put($newTarjetaPropiedadFilename, File::get($tarjetaPropiedad));

        if (!$isTarjetaImageUploaded) {
            $solicitud->delete();
            throw new FileException("No se pudo subir la imagen");
        }

        //  Procesar imagen de DNI
        $dni = $data->file("imagen_dni");
        $extension = $dni->getClientOriginalExtension();
        $newDniFilename = $solicitud->Codigo . "_2.${extension}";
        $isDniUploaded = Storage::disk('local')->put($newDniFilename, File::get($dni));

        if (!$isDniUploaded) {
            $solicitud->delete();
            throw new FileException("No se pudo subir la imagen");
        }

        return self::create([
            "IdSolicitud" => $solicitud->IdSolicitud,
            "Nombres" => $data->input("nombres"),
            "ApellidoPaterno" => $data->input("apellido_paterno"),
            "ApellidoMaterno" => $data->input("apellido_materno"),
            "FechaNacimiento" => Carbon::parse($data->input("fecha_nacimiento")),
            "Telefono" => $data->input("telefono"),
            "Email" => $data->input("correo"),
            "IdTipoDocumentoIdentidad" => $data->input("tipo_documento_identidad"),
            "NumeroDocumento" => $data->input("numero_documento"),
            "Direccion" => $data->input("direccion"),
            "Placa" => $data->input("placa"),
            "Asientos" => $data->input("asientos"),
            "Uso" => $data->input("uso"),
            "AnioVehiculo" => $data->input("anio_vehiculo"),
            "CompaniaSeguro" => $data->input("compania_seguro"),
            "TipoCompra" => self::TIPO_COMPRA_ADQUISICION,
            "ImagenTarjetaPropiedad" =>  Storage::url($newTarjetaPropiedadFilename),
            "ImagenDni" =>  Storage::url($newDniFilename),
        ]);
    }
}
