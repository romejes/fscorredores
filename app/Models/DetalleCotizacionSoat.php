<?php

namespace App\Models;

use App\Models\DetalleSolicitud;
use App\Http\Requests\CreateCotizacionSoatRequest;
use Carbon\Carbon;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DetalleCotizacionSoat extends DetalleSolicitud
{
    protected $table = "DetalleCotizacionSoat";

    protected $primaryKey = "IdDetalleCotizacionSoat";

    public $incrementing = true;

    public $timestamps = false;

    public $fillable = [
        "IdSolicitud",
        "Nombres",
        "ApellidoPaterno",
        "ApellidoMaterno",
        "Telefono",
        "Email",
        "IdTipoDocumentoIdentidad",
        "NumeroDocumentoIdentidad",
        "TieneSoat",
        "Placa",
        "Asientos",
        "Uso",
        "AnioVehiculo",
        "CompaniaSeguro",
        "FechaVencimiento"
    ];


    /**
     * Devuelve la fecha de vencimiento en formato largo y de cadena
     *
     * @param string $fechaNacimiento
     * @return string
     */
    public function getFechaVencimientoAttribute($fechaNacimiento)
    {
        return strftime('%d de %B de %Y', strtotime($fechaNacimiento));
    }

    /**
     * Registrar en la tabla respectiva
     *
     * @param CreateCotizacionSoatRequest $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function register(CreateCotizacionSoatRequest $data)
    {
        //  Validar el tipo de documento de identidad
        $tipoDocumentoIdentidadModel = new TipoDocumentoIdentidad();
        $tipoDocumentoIdentidad = $tipoDocumentoIdentidadModel->getById(
            $data->input("tipo_documento_identidad")
        );
        if (!$tipoDocumentoIdentidad) {
            throw new NotFoundHttpException("El tipo de documento de identidad no existe o no es válido");
        }

        //  Crear la solicitud
        $solicitudModel = new Solicitud();
        $solicitud = $solicitudModel->register(
            Solicitud::PRODUCTO_SOAT,
            Solicitud::TIPO_SOLICITUD_COTIZACION
        );

        //  Crear el detalle de la solicitud
        $tieneSoat = $data->input("tiene_soat");
        $detalle = self::create([
            "IdSolicitud" => $solicitud->IdSolicitud,
            "Nombres" => $data->input("nombres"),
            "ApellidoPaterno" => $data->input("apellido_paterno"),
            "ApellidoMaterno" => $data->input("apellido_materno"),
            "Telefono" => $data->input("telefono"),
            "Email" => $data->input("correo"),
            "IdTipoDocumentoIdentidad" => $tipoDocumentoIdentidad->IdTipoDocumentoIdentidad,
            "NumeroDocumentoIdentidad" => $data->input("numero_documento_identidad"),
            "Placa" => $data->input("placa"),
            "Asientos" => $data->input("asientos"),
            "Uso" => $data->input("uso"),
            "AnioVehiculo" => $data->input("anio_vehiculo"),
            "CompaniaSeguro" => $data->input("compania_seguro"),
            "TieneSoat" => $tieneSoat,
            "FechaVencimiento" => $tieneSoat ? Carbon::parse($data->input("fecha_vencimiento")) : null
        ]);
        return $detalle;
    }
}
