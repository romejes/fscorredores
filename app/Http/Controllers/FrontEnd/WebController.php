<?php

namespace App\Http\Controllers\FrontEnd;

use App\CustomClass\Seguro;
use App\Http\Controllers\Controller;
use App\Models\ClaseVehiculo;
use App\Models\Pais;
use App\Models\TipoDocumentoIdentidad;
use Illuminate\Support\Facades\Config;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
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
        $seguros = Seguro::getData();

        //  Si no se especifica el tipo de seguro, muestra la pagina principal de la seccion Seguros
        if (!$tipoSeguro) {
            return view("web.pages.seguros.index", compact("seguros"));
        }

        //  Comprueba que el parametro enviado coincida dentro del elemento slug del arreglo de solicitudes
        //  que se muestra al inicio de la funcion.
        //  Si no existe, se lanzará una excepcion.
        $seguroExiste = false;
        foreach ($seguros as $seguro) {
            if (in_array($tipoSeguro, array_column($seguro["seguros"], "slug"))) {
                $seguroExiste = true;
                break;
            }
        }

        if (!$seguroExiste) {
            throw new NotFoundHttpException();
        }

        return view("web.pages.seguros." . $tipoSeguro, compact("seguros"));
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
                    ),
                    array(
                        "name" => "Comprar",
                        "slug" => "comprar_soat",
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

        //  Si no se especifica el tipo de solicitud, muestra la pagina principal de la seccion Solicitudes
        if (!$solicitud) {
            return view("web.pages.solicitudes.index", compact("solicitudes"));
        }

        //  Comprueba que el parametro enviado coincida dentro del elemento slug del arreglo de solicitudes
        //  que se muestra al inicio de la funcion.
        //  Si no existe, se lanzará una excepcion.
        $solicitudExiste = false;
        foreach ($solicitudes as $itemSolicitud) {
            if (in_array($solicitud, array_column($itemSolicitud["opciones"], "slug"))) {
                $solicitudExiste = true;
                break;
            }
        }

        if (!$solicitudExiste) {
            throw new NotFoundHttpException();
        }

        //  Obtener datos para mostrar la pagina detalle de cada pagina de solicitud
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
        $clientes = array(
            "publicas" => array(
                array(
                    "logo" => "mun_cp_sanantonio_moquegua.png",
                    "nombre" => "Municipalidad de C.P. San Antonio",
                ),
                array(
                    "logo" => "mun_dist_albarracin.png",
                    "nombre" => "Municipalidad Distrital Gregorio Albarracín Lanchipa",
                ),
                array(
                    "logo" => "mun_dist_calana.png",
                    "nombre" => "Municipalidad Distrital de Calana",
                ),
                array(
                    "logo" => "mun_dist_carumas_moquegua.png",
                    "nombre" => "Municipalidad Distrital de Carumas",
                ),
                array(
                    "logo" => "mun_dist_ciudadnueva.png",
                    "nombre" => "Municipalidad Distrital de Ciudad Nueva",
                ),
                array(
                    "logo" => "mun_dist_estique.png",
                    "nombre" => "Municipalidad Distrital de Estique",
                ),
                array(
                    "logo" => "mun_dist_inclan.png",
                    "nombre" => "Municipalidad Distrital de Inclán",
                ),
                array(
                    "logo" => "mun_dist_ite.png",
                    "nombre" => "Municipalidad Distrital de Ite",
                ),
                array(
                    "logo" => "mun_prov_tarata.png",
                    "nombre" => "Municipalidad Distrital de Tarata",
                ),
                array(
                    "logo" => "mun_dist_palca_tacna.png",
                    "nombre" => "Municipalidad Distrital de Palca",
                ),
                array(
                    "logo" => "mun_dist_pocollay.png",
                    "nombre" => "Municipalidad Distrital de Pocollay",
                ),
                array(
                    "logo" => "mun_prov_candarave.png",
                    "nombre" => "Municipalidad Distrital de Candarave",
                ),
                array(
                    "logo" => "muni_prov_tacna.png",
                    "nombre" => "Municipalidad Provincial de Tacna",
                ),
                array(
                    "logo" => "muni_dist_sama-las_yaras.png",
                    "nombre" => "Municipalidad Distrital de Sama - Las Yaras",
                ),
                array(
                    "logo" => "gobierno_regional_tacna.png",
                    "nombre" => "Gobierno Regional de Tacna",
                ),
                array(
                    "logo" => "pet.png",
                    "nombre" => "Proyecto Especial Tacna",
                ),
                array(
                    "logo" => "unjbg.png",
                    "nombre" => "Universidad Nacional Jorge Basadre Grohmann",
                ),
                array(
                    "logo" => "una.png",
                    "nombre" => "Universidad Nacional del Altiplano",
                ),
            ),
            "privadas" => array(
                array(
                    "logo" => null,
                    "nombre" => "PROMELEC S.A.C",
                ),
            )
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
