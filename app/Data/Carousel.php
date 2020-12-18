<?php

namespace App\Data;

class Carousel
{
    /**
     * Obtiene toda la informacion de los seguros
     *
     * @return array
     */
    public static function obtenerDatos()
    {
        return [
            [
                "imagen_grande" => "banner_soat_small.jpg",
                "imagen_pequena" => "banner_soat_large.jpg",
                "titulo" => 'Tu SOAT en un instante',
                "descripcion" => "Cotizalo y adquierelo en menos de un minuto",
                "botones" => [
                    [
                        "nombre" => "Comprar",
                        "url" => "solcitudes/comprar_soat",
                    ],
                    [
                        "nombre" => "Cotizar",
                        "url" => "solcitudes/cotizar_soat",
                    ]
                ]
            ],
            [
                "imagen_grande" => "banner_seguro_vehiculo_small.jpg",
                "imagen_pequena" => "banner_seguro_vehiculo_large.jpg",
                "descripcion" => "Protégelo con nosotros",
                "titulo" => "No permitas que le pase esto a tu auto",
                "botones" => [
                    [
                        "nombre" => "Cotizar Seguro Vehicular",
                        "url" => "solcitudes/cotizar_seguro_vehicular_todo_riesgo",
                    ],
                ]
            ],
            [
                "imagen_grande" => "banner_seguro_estudiante_small.jpg",
                "imagen_pequena" => "banner_seguro_estudiante_large.jpg",
                "titulo" => 'Estudia protegido',
                "descripcion" => "Si eres estudiante de la UNJBG, asegúrate y estudia con total tranquilidad",
                "botones" => [
                    [
                        "nombre" => "Afiliar",
                        "url" => "solcitudes/afiliar_seguro_estudiantil",
                    ],
                ]
            ],
        ];
    }
}
