<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAfiliacionSeguroEstudianteRequest;
use App\Http\Requests\DetalleSolicitudRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Models\DetalleAfiliacionSeguroEstudiante;
use App\Http\Resources\DetalleAfiliacionSeguroEstudianteResource;

class AfiliacionSeguroEstudianteController extends Controller
{
    private $detalleAfiliacionSeguroEstudiante;
    private $solicitud;

    public function __construct(DetalleAfiliacionSeguroEstudiante $detalleAfiliacionSeguroEstudiante)
    {
        $this->detalleAfiliacionSeguroEstudiante = $detalleAfiliacionSeguroEstudiante;
    }

    public function index()
    {
        $data = $this->detalleAfiliacionSeguroEstudiante->getDetalleSolicitudes();
        return response()->json([
            "data" => $data->map(function ($item, $key) {
                return DetalleAfiliacionSeguroEstudianteResource::create($item);
            }),
            "statusCode" => Response::HTTP_OK
        ]);
    }

    public function show($code)
    {
        $data = $this->detalleAfiliacionSeguroEstudiante->getDetalleSolicitudByCodigo($code);
        return response()->json([
            "data" => DetalleAfiliacionSeguroEstudianteResource::create($data),
            "statusCode" => Response::HTTP_OK
        ]);
    }

    public function update($code, DetalleSolicitudRequest $detalleSolicitudRequest)
    {
        $solicitudAfiliacion = $this->detalleAfiliacionSeguroEstudiante->changeStatus(
            $code,
            $detalleSolicitudRequest->input("rechazar")
        );

        return response()->json([
            "statusCode" => Response::HTTP_OK,
            "data" => DetalleAfiliacionSeguroEstudianteResource::create($solicitudAfiliacion)
        ]);
    }

    public function store(CreateAfiliacionSeguroEstudianteRequest $createAfiliacionSeguroEstudianteRequest)
    {
        $solicitudRegistrada = $this->detalleAfiliacionSeguroEstudiante->register($createAfiliacionSeguroEstudianteRequest);
        return response()->json([
            "statusCode" => Response::HTTP_CREATED,
            "data" => DetalleAfiliacionSeguroEstudianteResource::create($solicitudRegistrada)
        ], Response::HTTP_CREATED);
    }
}
