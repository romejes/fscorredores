<?php

namespace Tests\Feature\CotizacionSoat;

use Tests\TestCase;
use App\Models\Solicitud;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegistrarTest extends TestCase
{
    use DatabaseTransactions, WithoutMiddleware;

    public function testRegistroCotizacionQueTieneSoat()
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
            "compania_seguro" => "La Positiva",
            "tiene_soat" => true,
            "fecha_vencimiento" => "2020-05-15"
        ];
        $response = $this->json("POST", "cotizaciones/soat", $payload);
        $response->assertStatus(201);

        $this->assertEquals(201, $response->getData()->statusCode);

        $expectedCodigo = date("Ymd") . "-00001";
        $this->assertDatabaseHas("Solicitud", [
            "Tipo" => Solicitud::TIPO_SOLICITUD_COTIZACION,
            "Producto" => Solicitud::PRODUCTO_SOAT,
            "Codigo" => $expectedCodigo
        ]);

        $this->assertDatabaseHas("DetalleCotizacionSoat", [
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
            "CompaniaSeguro" => $payload["compania_seguro"],
            "TieneSoat" => true,
            "FechaVencimiento" => "2020-05-15"
        ]);
    }

    public function testRegistroCotizacionQueNoTieneSoat()
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
            "compania_seguro" => "La Positiva",
            "tiene_soat" => false,
            "fecha_vencimiento" => "2020-05-15"
        ];
        $response = $this->json("POST", "cotizaciones/soat", $payload);
        $response->assertStatus(201);

        $this->assertEquals(201, $response->getData()->statusCode);

        $expectedCodigo = date("Ymd") . "-00001";
        $this->assertDatabaseHas("Solicitud", [
            "Tipo" => Solicitud::TIPO_SOLICITUD_COTIZACION,
            "Producto" => Solicitud::PRODUCTO_SOAT,
            "Codigo" => $expectedCodigo
        ]);

        $this->assertDatabaseHas("DetalleCotizacionSoat", [
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
            "CompaniaSeguro" => $payload["compania_seguro"],
            "TieneSoat" => false,
            "FechaVencimiento" => null
        ]);
    }

    public function testErroresValidacion()
    {
        //  Tratando de enviar una peticion indicando que SI tiene SOAT
        $payload = [
            "nombres" => "Jesus",
            "apellido_paterno" => "Romero",
            "apellido_materno" => "Ramos",
            "tipo_documento_identidad" => 1,
            "numero_documento" => "45747712",
            "telefono" => "931850406",
            "correo" => "rome.jes.1mail.com",
            "anio_vehiculo" => "2001",
            "placa" => "MF-5981",
            "asientos" => "ass44",
            "uso" => "Transporte Personal",
            "compania_seguro" => "Cualquiera",
            "tiene_soat" => true,
            "fecha_vencimiento" => null
        ];
        $response = $this->json("POST", "cotizaciones/soat", $payload);
        $response->assertStatus(422);
        
        $response->assertJsonStructure([
            "correo",
            "asientos",
            "uso",
            "compania_seguro",
            "fecha_vencimiento"
        ]);
    }
}
