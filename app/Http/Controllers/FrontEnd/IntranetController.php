<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;

class IntranetController extends Controller
{
    /**
     * Muestra la vista de inicio de sesion
     *
     * @return View
     */
    public function login()
    {
        return view("intranet.pages.login");
    }

    /**
     * Muestra la vista de Panel de Control
     *
     * @return View
     */
    public function dashboard()
    {
        return view("intranet.pages.inicio");
    }
}
