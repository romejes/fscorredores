<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

//  TODO: Traduccion de las validaciones
class CreateCotizacionVehiculoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "nombres" => "required|string|max:40",
            "apellido_paterno" => "required|string|max:40",
            "apellido_materno" => "string|max:40",
            "tipo_documento_identidad" => "required|integer",
            "numero_documento" => "required|string|max:15",
            "telefono" => "required|string|max:40",
            "correo" => "required|email|max:40",
            "anio_vehiculo" => "required|date_format:Y|before_or_equal:now",
            "placa" => "required|string",
            "asientos" => "required|integer",
            "uso" => [
                "required",
                Rule::in(['Particular', 'Carga', 'Transporte de Personal', 'Escolar'])
            ],
            "clase_vehiculo" => "required|integer",
            "marca" => "required|string",
            "modelo" => "required|string",
            "costo" => "required|numeric|min:100",
            "compania_seguro" => [
                "required",
                Rule::in(['Pacífico','MAPFRE','La Positiva','RIMAC'])
            ]
        ];
    }
}
