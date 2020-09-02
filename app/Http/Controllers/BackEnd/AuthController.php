<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Autenticar usuario
     *
     * @param LoginRequest $loginRequest
     * @return void
     */
    public function login(LoginRequest $loginRequest)
    {
        $credentials = [
            "NombreUsuario" => $loginRequest->input("usuario"),
            "password" => $loginRequest->input("contrasena")
        ];

        if (!Auth::attempt($credentials, false)) {
            Session::flash('mensaje', 'Su nombre de usuario y/o contraseña son incorrectos');
            return redirect("/");
        }
        return redirect("intranet");
    }

    /**
     * Cerrar la sesión del usuario
     *
     * @return void
     */
    public function logout()
    {
        Auth::logout();
        return redirect("intranet/login");
    }
}
