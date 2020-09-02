<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\DetalleSolicitud;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CreateAfiliacionSeguroEstudianteRequest;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DetalleAfiliacionSeguroEstudiante extends DetalleSolicitud
{
    protected $table = "DetalleAfiliacionSeguroEstudiante";

    protected $primaryKey = "IdDetalleAfiliacionSeguroEstudiante";

    public $incrementing = true;

    public $timestamps = false;

    public $fillable = [
        "IdSolicitud",
        "Nombres",
        "ApellidoPaterno",
        "ApellidoMaterno",
        "Sexo",
        "EstadoCivil",
        "FechaNacimiento",
        "Telefono",
        "Email",
        "CodigoPais",
        "IdTipoDocumentoIdentidad",
        "NumeroDocumento",
        "ImagenVoucher"
    ];

    /**
     * Relacion 1:1 con el modelo Pais
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pais()
    {
        return $this->hasOne(Pais::class, "Codigo", "CodigoPais");
    }

    /**
     * Registrar en la tabla respectiva
     *
     * @param CreateAfiliacionSeguroEstudianteRequest $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function register(CreateAfiliacionSeguroEstudianteRequest $data)
    {
        //  Validar el pais
        $paisModel = new Pais();
        $pais = $paisModel->getByCodigo($data->input("pais"));
        if (!$pais) {
            throw new NotFoundHttpException("El código del país no existe o no es válido");
        }

        //  Validar el tipo de documento de identidad
        $tipoDocumentoIdentidadModel = new TipoDocumentoIdentidad();
        $tipoDocumentoIdentidad = $tipoDocumentoIdentidadModel->getById(
            $data->input("tipo_documento_identidad")
        );
        if (!$tipoDocumentoIdentidad) {
            throw new NotFoundHttpException("El código del país no existe o no es válido");
        }

        //  Crear la solicitud
        $solicitudModel = new Solicitud();
        $solicitud = $solicitudModel->register(
            Solicitud::PRODUCTO_SEGURO_ESTUDIANTE,
            Solicitud::TIPO_SOLICITUD_AFILIACION
        );

        //  Procesar imagen
        $voucher = $data->file("voucher"); 
        $extension = $voucher->getClientOriginalExtension();
        $nombreImagen = $solicitud->Codigo . ".${extension}";        
        $subirImagen = Storage::disk('local')->put($nombreImagen, File::get($voucher));

        if (!$subirImagen) {
            $solicitud->delete();
            throw new FileException("No se pudo subir la imagen");
        }

        //  Crear el detalle de la solicitud
        $detalle = self::create([
            "IdSolicitud" => $solicitud->IdSolicitud,
            "Nombres" => $data->input("nombres"),
            "ApellidoPaterno" => $data->input("apellido_paterno"),
            "ApellidoMaterno" => $data->input("apellido_materno"),
            "Sexo" => $data->input("sexo"),
            "EstadoCivil" => $data->input("estado_civil"),
            "FechaNacimiento" => Carbon::parse($data->input("fecha_nacimiento")),
            "Telefono" => $data->input("telefono"),
            "Email" => $data->input("correo"),
            "CodigoPais" => $pais->Codigo,
            "IdTipoDocumentoIdentidad" => $tipoDocumentoIdentidad->IdTipoDocumentoIdentidad,
            "NumeroDocumento" => $data->input("numero_documento"),
            "ImagenVoucher" => Storage::url($nombreImagen)
        ]);
        return $detalle;
    }
}
