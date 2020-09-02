<?php

namespace Tests\Feature\CotizacionVehiculoTodoRiesgo;

use Tests\TestCase;
use App\Models\Solicitud;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class RegistrarTest extends TestCase
{
    use DatabaseTransactions, WithoutMiddleware;

    public function testRegistroExitoso()
    {
        $payload = [
            "nombres" => "Jesus",
            "apellido_paterno" => "Romero",
            "apellido_materno" => "Ramos",
            "tipo_documento_identidad" => 1,
            "numero_documento" => "45747712",
            "telefono" => "931850406",
            "correo" => "rome.jes.1@gmail.com",
            "anio_vehiculo" => "2001",
            "placa" => "MF-5981",
            "asientos" => 10,
            "uso" => "Transporte de Personal",
            "clase_vehiculo" => 5,
            "marca" => "Toyota",
            "modelo" => "Corolla",
            "costo" => 15000,
            "compania_seguro" => "La Positiva",
        ];
        $response = $this->json("POST", "cotizaciones/vehiculo_todo_riesgo", $payload);
        $response->assertStatus(201);

        $this->assertEquals(201, $response->getData()->statusCode);

        $expectedCodigo = date("Ymd") . "-00001";
        $this->assertDatabaseHas("Solicitud", [
            "Tipo" => Solicitud::TIPO_SOLICITUD_COTIZACION,
            "Codigo" => $expectedCodigo
        ]);

        $this->assertDatabaseHas("DetalleCotizacionVtr", [
            "IdSolicitud" => $response->getData()->data->solicitud->id,
            "Nombres" => $payload["nombres"],
            "ApellidoPaterno" => $payload["apellido_paterno"],
            "ApellidoMaterno" => $payload["apellido_materno"],
            "Telefono" => $payload["telefono"],
            "Email" => $payload["correo"],
            "IdTipoDocumentoIdentidad" => 1,
            "NumeroDocumento" => $payload["numero_documento"],
            "Placa" => $payload["placa"],
            "Asientos" => $payload["asientos"],
            "Uso" => $payload["uso"],
            "AnioVehiculo" => $payload["anio_vehiculo"],
            "IdClaseVehiculo" => $payload["clase_vehiculo"],
            "Marca" => $payload["marca"],
            "Modelo" => $payload["modelo"],
            "CostoVehiculo" => $payload["costo"],
            "CompaniaSeguro" => $payload["compania_seguro"]
        ]);
    }

    public function testErroresValidacion()
    {
        $payload = [
            "nombres" => "Jesus",
            "apellido_paterno" => "Romero",
            "apellido_materno" => "Ramos",
            "tipo_documento_identidad" => 1,
            "numero_documento" => "45747712",
            "telefono" => "931850406",
            "correo" => "rome.jes.1gmail.com",
            "anio_vehiculo" => "5400",
            "placa" => "MF-5981",
            "asientos" => "as0",
            "uso" => "TransportedPersonal",
            "clase_vehiculo" => 5,
            "marca" => "Toyota",
            "modelo" => "Corolla",
            "costo" => 0,
            "compania_seguro" => "Cualquiera",
        ];
        $response = $this->json("POST", "cotizaciones/vehiculo_todo_riesgo", $payload);
        $response->assertStatus(422);

        $response->assertJsonStructure([
            "correo",
            "anio_vehiculo",
            "asientos",
            "uso",
            "costo",
            "compania_seguro"
        ]);
    }
}
