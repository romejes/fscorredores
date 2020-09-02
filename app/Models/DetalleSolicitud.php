<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

class DetalleSolicitud extends Model
{
    /**
     * Relacion 1:1 con el modelo Solicitud
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function solicitud()
    {
        return $this->belongsTo(Solicitud::class, "IdSolicitud", "IdSolicitud");
    }

    /**
     * Relacion 1:1 con el modelo TipoDocumentoIdentidad
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoDocumentoIdentidad()
    {
        return $this->hasOne(TipoDocumentoIdentidad::class, "IdTipoDocumentoIdentidad", "IdTipoDocumentoIdentidad");
    }

    /**
     * Atributo que devuelve el nombre completo del solicitante
     *
     * @return string
     */
    public function getSolicitadoPorAttribute()
    {
        return "{$this->Nombres} {$this->ApellidoPaterno} {$this->ApellidoMaterno}";
    }

    /**
     * Atributo que devuelve el tipo de documento de identidad y el numero
     *
     * @return string
     */
    public function getDocumentoIdentidadAttribute()
    {
        return "{$this->tipoDocumentoIdentidad->Descripcion} - {$this->NumeroDocumento}";
    }

    /**
     * Obtiene todas las solicitudes de compra de SOAT
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getDetalleSolicitudes()
    {
        return self::all();
    }

    /**
     * Obtiene una solicitud mediante código
     *
     * @param string $code
     * @return mixed
     */
    public function getDetalleSolicitudByCodigo($code)
    {
        $detalleCompra = $this->getDetalleSolicitudes()->first(function ($value, $key) use ($code) {
            return $value->solicitud->Codigo === $code;
        });

        if (!$detalleCompra) {
            throw new NotFoundHttpException("No se encontró el registro");
        }
        return $detalleCompra;
    }

    /**
     * Cambia el estado de una solicitud
     *
     * @param string $code
     * @param boolean $reject
     * @return void
     */
    public function changeStatus($code, $reject = false)
    {
        $detalleSolicitud = $this->getDetalleSolicitudByCodigo($code);
        $actualEstadoSolicitud = $detalleSolicitud->solicitud->IdEstadoSolicitud;

        if ($actualEstadoSolicitud === EstadoSolicitud::SOLICITUD_EN_ESPERA) {
            $detalleSolicitud->solicitud->IdEstadoSolicitud = EstadoSolicitud::SOLICITUD_EN_ATENCION;
        } else if ($actualEstadoSolicitud === EstadoSolicitud::SOLICITUD_EN_ATENCION) {
            $detalleSolicitud->solicitud->IdEstadoSolicitud = $reject ? EstadoSolicitud::SOLICITUD_RECHAZADA : EstadoSolicitud::SOLICITUD_ATENDIDA;
        } else {
            throw new UnprocessableEntityHttpException("No es posible cambiar de estado a la solicitud");
        }

        $detalleSolicitud->solicitud->save();
        return $detalleSolicitud;
    }
}