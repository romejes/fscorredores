<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthAuthenticatable;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model implements AuthAuthenticatable
{
    use Authenticatable;

    protected $table = "Usuario";

    protected $primaryKey = "IdUsuario";

    public $incrementing = true;

    public $timestamps = false;

    /**
     * Retorna el campo que almacena la contraseña del usuario y que será
     * de utilidad para el metodo de Autenticación de Laravel
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->Clave;
    }

    /**
     * Retorna el valor del campo remember_token
     * En este caso, al no ser de utilidad el campo retorna un valor nulo
     *
     * @return string
     */
    public function getRememberToken()
    {
        return null;
    }

    /**
     * Retorna el nombre personalizado del campo que actuará como "remember_token"
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return null;
    }
}
