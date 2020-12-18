<?php

namespace App\Data;

class Seguro
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
                "titulo" => "Seguros para Personas",
                "seguros" => [
                    [
                        "nombre" => "SOAT",
                        "slug" => "soat",
                        "imagen_miniatura" => 'seguro_soat.jpg',
                        "mostrar_en_inicio" => true
                    ],
                    [
                        "nombre" => "Seguro Vehicular",
                        "slug" => "seguro_vehicular",
                        "imagen_miniatura" => 'seguro_vehiculo.jpg',
                        "mostrar_en_inicio" => true
                    ],
                    [
                        "nombre" => "Seguro de Vida",
                        "slug" => "seguro_vida",
                        "imagen_miniatura" => 'seguro_vida.jpg',
                        "mostrar_en_inicio" => false
                    ],
                    [
                        "nombre" => "Seguro de Salud",
                        "slug" => "seguro_salud",
                        "imagen_miniatura" => 'seguro_salud.jpg',
                        "mostrar_en_inicio" => false
                    ],
                    [
                        "nombre" => "Seguro de Hogar",
                        "slug" => "seguro_hogar",
                        "imagen_miniatura" => 'seguro_hogar.jpg',
                        "mostrar_en_inicio" => false
                    ],
                    [
                        "nombre" => "Seguro de Viajes",
                        "slug" => "seguro_viaje",
                        "imagen_miniatura" => 'seguro_viaje.jpg',
                        "mostrar_en_inicio" => false
                    ],
                ]
            ],
            [
                "titulo" => "Seguros para Empresas",
                "seguros" => [
                    [
                        "nombre" => "Seguro contra COVID-19",
                        "slug" => "seguro_covid19",
                        "imagen_miniatura" => 'seguro_covid19.jpg',
                        "mostrar_en_inicio" => true
                    ],
                    [
                        "nombre" => "EPS",
                        "slug" => "eps",
                        "imagen_miniatura" => 'seguro_eps.jpg',
                        "mostrar_en_inicio" => false
                    ],
                    [
                        "nombre" => "SCTR",
                        "slug" => "sctr",
                        "imagen_miniatura" => 'seguro_sctr.jpg',
                        "mostrar_en_inicio" => true
                    ],
                    [
                        "nombre" => "Seguro de Transporte de Mercadería",
                        "slug" => "seguro_transporte_mercaderia",
                        "imagen_miniatura" => 'seguro_transporte_mercaderia.jpg',
                        "mostrar_en_inicio" => false
                    ],
                    [
                        "nombre" => "Seguro contra Incendios",
                        "slug" => "seguro_incendio",
                        "imagen_miniatura" => 'seguro_incendio.jpg',
                        "mostrar_en_inicio" => false
                    ],
                    [
                        "nombre" => "Seguro por Responsabilidad Civil",
                        "slug" => "seguro_responsabilidad_civil",
                        "imagen_miniatura" => 'seguro_responsabilidad_civil.jpg',
                        "mostrar_en_inicio" => false
                    ],
                    [
                        "nombre" => "Seguro por Deshonestidad",
                        "slug" => "seguro_deshonestidad",
                        "imagen_miniatura" => 'seguro_deshonestidad.jpg',
                        "mostrar_en_inicio" => false
                    ],
                    [
                        "nombre" => "Seguro contra Robo y/o Asalto",
                        "slug" => "seguro_robo_negocio",
                        "imagen_miniatura" => 'seguro_robo_negocio.jpg',
                        "mostrar_en_inicio" => false
                    ]
                ]
            ]
        ];
    }

    public static function mostrarSegurosPrincipales()
    {
        $seguros = self::obtenerDatos();
        $segurosSinAgrupar = [];

        foreach ($seguros as $grupoSeguro) {
            $segurosSinAgrupar = array_merge($segurosSinAgrupar, $grupoSeguro["seguros"]);
        }

        return array_filter($segurosSinAgrupar, function ($valor, $indice) {
            return $valor["mostrar_en_inicio"] === true;
        }, ARRAY_FILTER_USE_BOTH);
    }

    public static function verificarSiExisteSeguro($seguroSlug)
    {
        $seguros = self::obtenerDatos();
        foreach ($seguros as $grupoSeguro) {
            if (in_array($seguroSlug, array_column($grupoSeguro["seguros"], "slug"))) {
                return true;
            }
        }
        return false;
    }
}
