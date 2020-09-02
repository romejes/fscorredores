<?php

namespace App\Models;

use App\Models\DetalleSolicitud;
use App\Http\Requests\CreateCotizacionVehiculoRequest;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DetalleCotizacionVtr extends DetalleSolicitud
{
    protected $table = "DetalleCotizacionVtr";

    protected $primaryKey = "IdDetalleCotizacionVtr";

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
        "NumeroDocumento",
        "Placa",
        "Asientos",
        "Uso",
        "AnioVehiculo",
        "IdClaseVehiculo",
        "Marca",
        "Modelo",
        "CostoVehiculo",
        "CompaniaSeguro"
    ];

    /**
     * Relacion 1:1 con el modelo Solicitud
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function claseVehiculo()
    {
        return $this->hasOne(ClaseVehiculo::class, "IdClaseVehiculo", "IdClaseVehiculo");
    }

    /**
     * Registrar en la tabla respectiva
     *
     * @param CreateCotizacionVehiculoRequest $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function register(CreateCotizacionVehiculoRequest $data)
    {
        //  Validar el tipo de documento de identidad
        $tipoDocumentoIdentidadModel = new TipoDocumentoIdentidad();
        $tipoDocumentoIdentidad = $tipoDocumentoIdentidadModel->getById(
            $data->input("tipo_documento_identidad")
        );
        if (!$tipoDocumentoIdentidad) {
            throw new NotFoundHttpException("El código del país no existe o no es válido");
        }

        //  Validar la clase del vehiculo
        $claseVehiculoModel = new ClaseVehiculo();
        $claseVehiculo = $claseVehiculoModel->getById($data->input("clase_vehiculo"));

        //  Crear la solicitud
        $solicitudModel = new Solicitud();
        $solicitud = $solicitudModel->register(
            Solicitud::PRODUCTO_SEGURO_VEHICULO_TODO_RIESGO,
            Solicitud::TIPO_SOLICITUD_COTIZACION
        );

        //  Crear el detalle de la solicitud
        $detalle = self::create([
            "IdSolicitud" => $solicitud->IdSolicitud,
            "Nombres" => $data->input("nombres"),
            "ApellidoPaterno" => $data->input("apellido_paterno"),
            "ApellidoMaterno" => $data->input("apellido_materno"),
            "Telefono" => $data->input("telefono"),
            "Email" => $data->input("correo"),
            "IdTipoDocumentoIdentidad" => $tipoDocumentoIdentidad->IdTipoDocumentoIdentidad,
            "NumeroDocumento" => $data->input("numero_documento"),
            "Placa" => $data->input("placa"),
            "Asientos" => $data->input("asientos"),
            "Uso" => $data->input("uso"),
            "AnioVehiculo" => $data->input("anio_vehiculo"),
            "IdClaseVehiculo" => $claseVehiculo->IdClaseVehiculo,
            "Marca" => $data->input("marca"),
            "Modelo" => $data->input("modelo"),
            "CostoVehiculo" => $data->input("costo"),
            "CompaniaSeguro" => $data->input("compania_seguro"),
        ]);
        return $detalle;
    }
}
