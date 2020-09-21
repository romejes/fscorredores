<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoDocumentoIdentidad extends Model
{
    protected $table = "TipoDocumentoIdentidad";

    protected $primaryKey = "IdTipoDocumentoIdentidad";

    public $incrementing = true;

    public $timestamps = false;

    /**
     * Obtiene el pais segun su codigo
     *
     * @param integer $id
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function getById($id)
    {
        return self::where("IdTipoDocumentoIdentidad", $id)->first();
    }

    /**
     * Obtiene todos los tipos de documento de identidad
     *
     * @return Collection
     */
    public function getAll()
    {
        return self::all();
    }
}
