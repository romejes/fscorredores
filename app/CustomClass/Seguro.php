<?php

namespace App\CustomClass;

class Seguro
{
    /**
     * Obtiene toda la informacion de los seguros
     *
     * @return array
     */
    public static function obtenerDataDeSeguros()
    {
        return [
            [
                "titulo" => "Seguros para Personas",
                "seguros" => [
                    [
                        "nombre" => "SOAT",
                        "slug" => "soat",
                        "imagen_miniatura" => 'seguro_soat.jpg'
                    ],
                    [
                        "nombre" => "Seguro Vehicular",
                        "slug" => "seguro_vehicular",
                        "imagen_miniatura" => 'seguro_vehiculo.jpg'
                    ],
                    [
                        "nombre" => "Seguro de Vida",
                        "slug" => "seguro_vida",
                        "imagen_miniatura" => 'seguro_vida.jpg'
                    ],
                    [
                        "nombre" => "Seguro de Salud",
                        "slug" => "seguro_salud",
                        "imagen_miniatura" => 'seguro_salud.jpg'
                    ],
                    [
                        "nombre" => "Seguro de Hogar",
                        "slug" => "seguro_hogar",
                        "imagen_miniatura" => 'seguro_hogar.jpg'
                    ],
                    [
                        "nombre" => "Seguro de Viajes",
                        "slug" => "seguro_viaje",
                        "imagen_miniatura" => 'seguro_viaje.jpg'
                    ],
                ]
            ],
            [
                "titulo" => "Seguros para Empresas",
                "seguros" => [
                    [
                        "nombre" => "Seguro contra COVID-19",
                        "slug" => "seguro_covid19",
                        "imagen_miniatura" => 'seguro_covid19.jpg'
                    ],
                    [
                        "nombre" => "EPS",
                        "slug" => "eps",
                        "imagen_miniatura" => 'seguro_eps.jpg'
                    ],
                    [
                        "nombre" => "SCTR",
                        "slug" => "sctr",
                        "imagen_miniatura" => 'seguro_sctr.jpg'
                    ],
                    [
                        "nombre" => "Seguro de Transporte de Mercadería",
                        "slug" => "seguro_transporte_mercaderia",
                        "imagen_miniatura" => 'seguro_transporte_mercaderia.jpg'
                    ],
                    [
                        "nombre" => "Seguro contra Incendios",
                        "slug" => "seguro_incendio",
                        "imagen_miniatura" => 'seguro_incendio.jpg'
                    ],
                    [
                        "nombre" => "Seguro por Responsabilidad Civil",
                        "slug" => "seguro_responsabilidad_civil",
                        "imagen_miniatura" => 'seguro_responsabilidad_civil.jpg'
                    ],
                    [
                        "nombre" => "Seguro por Deshonestidad",
                        "slug" => "seguro_deshonestidad",
                        "imagen_miniatura" => 'seguro_deshonestidad.jpg'
                    ],
                    [
                        "nombre" => "Seguro contra Robo y/o Asalto",
                        "slug" => "seguro_robo_negocio",
                        "imagen_miniatura" => 'seguro_robo_negocio.jpg'
                    ]
                ]
            ]
        ];
    }
}
