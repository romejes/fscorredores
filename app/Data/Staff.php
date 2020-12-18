<?php

namespace App\Data;

class Staff 
{
    public static function obtenerDatos()
    {
        return [
            [
                "nombre" => "Fanny Llanos Ramos",
                "cargo" => "Corredor de Seguros",
                "correo" => "fllanos@fscorredoresasesores.com",
                "telefono" => "990287528"
            ],
            [
                "nombre" => "John Ordoñez Monroy",
                "cargo" => "Soluciones Tecnológicas",
                "correo" => "jordonez@fscorredoresasesores.com",
                "telefono" => "952947576"
            ],
            [
                "nombre" => "Carlos Andrés Figueroa Llanos",
                "cargo" => "Ejecutivo Comercial en Seguros para Empresas Privadas",
                "correo" => "cfigueroa@fscorredoresasesores.com",
                "telefono" => "945276280"
            ],
            [
                "nombre" => "Milagros Nataly Mamani Flores",
                "cargo" => "Ejecutivo Comercial en Seguros para Empresas del Estado",
                "correo" => "mmamani@fscorredoresasesores.com",
                "telefono" => "997368020"
            ]
        ];
    }
}