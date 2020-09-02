<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

//  TODO: Traduccion de las validaciones
class CreateCompraSoatRequest extends FormRequest
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
            "fecha_nacimiento" => "required|date_format:Y-m-d|before:now",
            "tipo_compra" => "required|in:adquisicion,renovacion",
            "imagen_tarjeta_propiedad" => "required|file|mimetypes:image/*,application/pdf|max:10280",

            "direccion" => "required_if:tipo_compra,adquisicion|max:100",
            "anio_vehiculo" => "required_if:tipo_compra,adquisicion|date_format:Y|before_or_equal:now",
            "placa" => "required_if:tipo_compra,adquisicion|string",
            "asientos" => "required_if:tipo_compra,adquisicion|integer",
            "uso" => [
                "required_if:tipo_compra,adquisicion",
                Rule::in(['Particular', 'Carga', 'Transporte de Personal', 'Escolar'])
            ],
            "compania_seguro" => [
                "required_if:tipo_compra,adquisicion",
                Rule::in(['Pacífico', 'MAPFRE', 'La Positiva', 'RIMAC'])
            ],
            "imagen_dni" => "required_if:tipo_compra,adquisicion|file|mimetypes:image/*,application/pdf|max:10280",
        ];
    }
}
