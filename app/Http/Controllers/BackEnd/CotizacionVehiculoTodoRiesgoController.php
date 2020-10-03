<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCotizacionVehiculoRequest;
use App\Models\DetalleCotizacionVtr;
use App\Http\Requests\DetalleSolicitudRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\DetalleCotizacionVehiculoTodoRiesgoResource;
use App\Mail\CotizacionSeguroVehiculoTodoRiesgoMail;
use Illuminate\Support\Facades\Mail;

class CotizacionVehiculoTodoRiesgoController extends Controller
{
    private $detalleCotizacionVehiculo;

    public function __construct(DetalleCotizacionVtr $detalleCotizacionVehiculo)
    {
        $this->detalleCotizacionVehiculo = $detalleCotizacionVehiculo;
    }

    public function index()
    {
        $data = $this->detalleCotizacionVehiculo->getDetalleSolicitudes();
        return response()->json([
            "data" => $data->map(function ($item, $key) {
                return DetalleCotizacionVehiculoTodoRiesgoResource::create($item);
            }),
            "statusCode" => Response::HTTP_OK
        ]);
    }

    public function show($code)
    {
        $data = $this->detalleCotizacionVehiculo->getDetalleSolicitudByCodigo($code);
        return response()->json([
            "data" => DetalleCotizacionVehiculoTodoRiesgoResource::create($data),
            "statusCode" => Response::HTTP_OK
        ]);
    }

    public function store(CreateCotizacionVehiculoRequest $createCotizacionVehiculoRequest)
    {
        $solicitudRegistrada = $this->detalleCotizacionVehiculo->register($createCotizacionVehiculoRequest);

        if ($solicitudRegistrada) {
            Mail::to("fllanos@fscorredoresasesores.com")
                ->send(new CotizacionSeguroVehiculoTodoRiesgoMail(($solicitudRegistrada)));
        }

        return response()->json([
            "statusCode" => Response::HTTP_CREATED,
            "data" => DetalleCotizacionVehiculoTodoRiesgoResource::create($solicitudRegistrada)
        ], Response::HTTP_CREATED);
    }

    public function update($code, DetalleSolicitudRequest $detalleSolicitudRequest)
    {
        $solicitudCompra = $this->detalleCotizacionVehiculo->changeStatus(
            $code,
            $detalleSolicitudRequest->input("rechazar")
        );

        return response()->json([
            "statusCode" => Response::HTTP_OK,
            "data" => DetalleCotizacionVehiculoTodoRiesgoResource::create($solicitudCompra)
        ]);
    }
}
