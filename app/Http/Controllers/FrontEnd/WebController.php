<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\ClaseVehiculo;
use App\Models\Pais;
use App\Models\TipoDocumentoIdentidad;
use Illuminate\Support\Facades\Config;
use Symfony\Component\Routing\Exception\RouteNotFoundException;

class WebController extends Controller
{
    private $modelTipoDocumentoIdentidad;
    private $modelClaseVehiculo;
    private $modelPais;

    public function __construct(TipoDocumentoIdentidad $tipoDocumentoIdentidad, ClaseVehiculo $claseVehiculo, Pais $pais)
    {
        $this->modelTipoDocumentoIdentidad = $tipoDocumentoIdentidad;
        $this->modelClaseVehiculo = $claseVehiculo;
        $this->modelPais = $pais;
    }

    /**
     * Muestra la página de Inicio
     *
     * @return View
     */
    public function home()
    {
        return view("web.pages.home");
    }

    /**
     * Muestra la pagina Nosotros
     *
     * @return View
     */
    public function nosotros()
    {
        $staff = array(
            array(
                "name" => "Fanny Llanos Ramos",
                "charge" => "Corredor de Seguros",
                "email" => "fllanos@fscorredoresasesores.com",
                "phone" => "990287528"
            ),
            array(
                "name" => "John Ordoñez Monroy",
                "charge" => "Soluciones Tecnológicas",
                "email" => "jordonez@fscorredoresasesores.com",
                "phone" => "952947576"
            ),
            array(
                "name" => "Carlos Andrés Figueroa Llanos",
                "charge" => "Ejecutivo Comercial en Seguros para Empresas Privadas",
                "email" => "cfigueroa@fscorredoresasesores.com",
                "phone" => "945276280"
            ),
            array(
                "name" => "Milagros Nataly Mamani Flores",
                "charge" => "Ejecutivo Comercial en Seguros para Empresas del Estado",
                "email" => "mmamani@fscorredoresasesores.com",
                "phone" => "997368020"
            )
        );

        $values = array(
            "Disciplina",
            "Autocrítica",
            "Responsabilidad",
            "Disponibilidad al cambio",
            "Perseverancia",
            "Proactividad",
            "Aprendizaje"
        );

        return view("web.pages.nosotros", compact("staff", "values"));
    }

    /**
     * Muestra la página de Seguros
     *
     * @param string $tipoSeguro
     * @return View
     */
    public function seguros($tipoSeguro = null)
    {
        $seguros = array(
            array(
                "title" => "Seguros para personas",
                "seguros" => array(
                    array(
                        "name" => "Seguro contra robos",
                        "slug" => "seguro_persona_robo",
                        "picture" => "seguro_robo_domicilio.jpg"
                    )
                )
            ),
            array(
                "title" => "Seguros para empresas",
                "seguros" => array(
                    array(
                        "name" => "Seguro contra robos y asaltos",
                        "slug" => "seguro_empresa_robo",
                        "picture" => "seguro_robo_negocio.jpg"
                    ),
                    array(
                        "name" => "Seguro por responsabilidad civil",
                        "slug" => "seguro_responsabilidad_civil",
                        "picture" => "seguro_responsabilidad_civil.jpg"
                    ),
                    array(
                        "name" => "Seguro contra riesgo de montaje",
                        "slug" => "seguro_riesgo_montaje",
                        "picture" => "seguro_montaje.jpg"
                    ),
                    array(
                        "name" => "Seguro contra incendios",
                        "slug" => "seguro_incendio",
                        "picture" => "seguro_incendio.jpg"
                    ),
                    array(
                        "name" => "EPS",
                        "slug" => "eps",
                        "picture" => "seguro_eps.jpg"
                    )
                )
            ),
            array(
                "title" => "Seguros vehiculares",
                "seguros" => array(
                    array(
                        "name" => "SOAT",
                        "slug" => "soat",
                        "picture" => "seguro_soat.jpg"
                    ),
                    array(
                        "name" => "Seguro vehicular todo riesgo",
                        "slug" => "seguro_vehicular_todo_riesgo",
                        "picture" => "seguro_vehiculo.jpg"
                    )
                )
            ),
            array(
                "title" => "Otros seguros",
                "seguros" => array(
                    array(
                        "name" => "Seguro contra terremotos",
                        "slug" => "seguro_terremotos",
                        "picture" => "seguro_terremoto.jpg"
                    )
                )
            )
        );

        if (!$tipoSeguro) {
            return view("web.pages.seguros.index", compact("seguros"));
        } else {
            return view("web.pages.seguros." . $tipoSeguro, compact("seguros"));
        }
    }

    /**
     * Mostrar la pagina de Solicitudes
     *
     * @param string $solicitud
     * @return View
     */
    public function solicitudes($solicitud = null)
    {
        $solicitudes = array(
            array(
                "seguro" => "SOAT",
                "picture" => "seguro_soat.jpg",
                "opciones" => array(
                    array(
                        "name" => "Cotizar",
                        "slug" => "cotizar_soat",
                    )
                )
            ),
            array(
                "seguro" => "Seguro Vehicular Todo Riesgo",
                "picture" => "seguro_vehiculo.jpg",
                "opciones" => array(
                    array(
                        "name" => "Cotizar",
                        "slug" => "cotizar_seguro_vehicular_todo_riesgo",
                    )
                )
            ),
            array(
                "seguro" => "Seguro Estudiantil contra Accidentes",
                "picture" => "seguro_estudiante.jpg",
                "opciones" => array(
                    array(
                        "name" => "Afiliar",
                        "slug" => "afiliar_seguro_estudiantil",
                    )
                )
            ),
        );

        if (!$solicitud) {
            return view("web.pages.solicitudes.index", compact("solicitudes"));
        }

        $tipoDocumentoIdentidad = $this->modelTipoDocumentoIdentidad->getByTipoCliente(
            Config::get("constants.tipo_cliente.persona_natural")
        );
        $claseVehiculo = $this->modelClaseVehiculo->getAll();
        $paises = $this->modelPais->getAll();

        return view("web.pages.solicitudes." . $solicitud,  compact([
            "solicitudes",
            "tipoDocumentoIdentidad",
            "claseVehiculo",
            "paises"
        ]));
    }

    /**
     * Muestra la página de Clientes
     *
     * @return View
     */
    public function clientes()
    {
        $municipalidades = array(
            "Municipalidad de C.P. San Antonio (Moquegua)",
            "Municipalidad Distrital Gregorio Albarracín Lanchipa (Tacna)",
            "Municipalidad Distrital de Calana (Tacna)",
            "Municipalidad Distrital de Carumas (Moquegua)",
            "Municipalidad Distrital de Ciudad Nueva (Tacna)",
            "Municipalidad Distrital de Estique (Tacna)",
            "Municipalidad Distrital de Inclán (Tacna)",
            "Municipalidad Distrital de Ite (Tacna)",
            "Municipalidad Provincial de Tarata (Tacna)",
            "Municipalidad Provincial de Palca (Tacna)",
            "Municipalidad Distrital de Pocollay (Tacna)",
            "Municipalidad Provincial de Candarave (Tacna)",
            "Municipalidad Provincial de Tacna",
            "Municipalidad Distrital de Sama - Las Yaras (Tacna)"
        );

        $universidades = array(
            "Universidad Nacional Jorge Basadre Grohmann (Tacna)",
            "Universidad Nacional del Altiplano (Puno)"
        );

        $gobiernosRegionales = array(
            "Gobierno Regional de Tacna"
        );

        $otros = array(
            "PROMELEC S.A.C",
            "Proyecto Especial Tacna"
        );

        $clientes = array(
            "municipalidades" => $municipalidades,
            "universidades" => $universidades,
            "gobiernos_regionales" => $gobiernosRegionales,
            "otros" => $otros
        );

        return view("web.pages.clientes", compact("clientes"));
    }

    /**
     * Muestra la página de Contacto
     *
     * @return View
     */
    public function contacto()
    {
        return view("web.pages.contacto");
    }
}
