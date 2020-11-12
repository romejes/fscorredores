<?php

namespace App\CustomClass;

class Seguro
{
    /**
     * Obtiene toda la informacion de los seguros
     *
     * @return array
     */
    public static function getData()
    {
        return array(
            array(
                "title" => "Seguros para personas",
                "seguros" => array(
                    array(
                        "name" => "Seguro contra robos",
                        "slug" => "seguro_persona_robo",
                        "picture" => "seguro_robo_domicilio.jpg",
                        "resumen" => "Este tipo de contrato permite asegurar cualquier casa habitación de uso particular (no para negocios) no solo en caso de robo o actos de vandalismo"
                    )
                )
            ),
            array(
                "title" => "Seguros para empresas",
                "seguros" => array(
                    array(
                        "name" => "Seguro contra robos y asaltos",
                        "slug" => "seguro_empresa_robo",
                        "picture" => "seguro_robo_negocio.jpg",
                        "resumen" => "Es un seguro que cubre los daños o pérdidas dentro de tu local a consecuencia de un robo, asalto o intento de robo."
                    ),
                    array(
                        "name" => "Seguro por responsabilidad civil",
                        "slug" => "seguro_responsabilidad_civil",
                        "picture" => "seguro_responsabilidad_civil.jpg",
                        "resumen" => "Es un seguro que cubre la Responsabilidad Civil Extracontractual por los daños materiales y/o personales producidos
                            por un accidente súbito e imprevisto en el cual resultes civilmente responsable."
                    ),
                    array(
                        "name" => "Seguro contra riesgo de montaje",
                        "slug" => "seguro_riesgo_montaje",
                        "picture" => "seguro_montaje.jpg",
                        "resumen" => "Es un seguro que brinda protección frente a riesgos accidentales, súbitos e imprevistos que puedas sufrir
                            por un accidente súbito"
                    ),
                    array(
                        "name" => "Seguro contra incendios",
                        "slug" => "seguro_incendio",
                        "picture" => "seguro_incendio.jpg",
                        "resumen" => "Es un seguro que cubre los daños sobre la edificación, contenidos, existencias, y en general todos los bienes
                            por un accidente súbito"
                    ),
                    array(
                        "name" => "EPS",
                        "slug" => "eps",
                        "picture" => "seguro_eps.jpg",
                        "resumen" => "Es un programa médico que te brinda atención ambulatoria y hospitalaria, consulta médica a domicilio, atención de
                            emergencia accidental y médica"
                    )
                )
            ),
            array(
                "title" => "Seguros vehiculares",
                "seguros" => array(
                    array(
                        "name" => "SOAT",
                        "slug" => "soat",
                        "picture" => "seguro_soat.jpg",
                        "resumen" => "Cubre no solo al conductor del vehículo, sino también a ocupantes o terceros no ocupantes de un vehículo automotor"
                    ),
                    array(
                        "name" => "Seguro vehicular todo riesgo",
                        "slug" => "seguro_vehicular_todo_riesgo",
                        "picture" => "seguro_vehiculo.jpg",
                        "resumen" => "En estos tiempos contar con un seguro vehicular nos da la tranquilidad ya que cuando sufrimos un accidente como un
                            choque o robo, donde podremos ser respaldados e indemnizados por la compañía de seguros."
                    )
                )
            ),
            array(
                "title" => "Otros seguros",
                "seguros" => array(
                    array(
                        "name" => "Seguro contra terremotos",
                        "slug" => "seguro_terremotos",
                        "picture" => "seguro_terremoto.jpg",
                        "resumen" => "Es un seguro que cubre el inmueble contra los daños materiales producto de terremotos"
                    )
                )
            )
        );
    }
}
