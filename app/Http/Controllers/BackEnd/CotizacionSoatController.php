<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCotizacionSoatRequest;
use App\Models\DetalleCotizacionSoat;
use App\Http\Requests\DetalleSolicitudRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\DetalleCotizacionSoatResource;

class CotizacionSoatController extends Controller
{
    private $detalleCotizacionSoat;

    public function __construct(DetalleCotizacionSoat $detalleCotizacionSoat)
    {
        $this->detalleCotizacionSoat = $detalleCotizacionSoat;
    }

    public function index()
    {
        $data = $this->detalleCotizacionSoat->getDetalleSolicitudes();
        return response()->json([
            "data" => $data->map(function ($item, $key) {
                return DetalleCotizacionSoatResource::create($item);
            }),
            "statusCode" => Response::HTTP_OK
        ]);
    }

    public function show($code)
    {
        $data = $this->detalleCotizacionSoat->getDetalleSolicitudByCodigo($code);
        return response()->json([
            "data" => DetalleCotizacionSoatResource::create($data),
            "statusCode" => Response::HTTP_OK
        ]);
    }

    public function store(CreateCotizacionSoatRequest $createCotizacionSoatRequest)
    {
        $solicitudRegistrada = $this->detalleCotizacionSoat->register($createCotizacionSoatRequest);
        return response()->json([
            "statusCode" => Response::HTTP_CREATED,
            "data" => DetalleCotizacionSoatResource::create($solicitudRegistrada)
        ], Response::HTTP_CREATED);
    }

    public function update($code, DetalleSolicitudRequest $detalleSolicitudRequest)
    {
        $solicitudCompra = $this->detalleCotizacionSoat->changeStatus(
            $code,
            $detalleSolicitudRequest->input("rechazar")
        );

        return response()->json([
            "statusCode" => Response::HTTP_OK,
            "data" => DetalleCotizacionSoatResource::create($solicitudCompra)
        ]);
    }
}
