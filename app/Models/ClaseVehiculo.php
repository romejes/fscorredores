<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClaseVehiculo extends Model
{
    protected $table = "ClaseVehiculo";

    protected $primaryKey = "IdClaseVehiculo";

    public $incrementing = true;

    public $timestamps = false;

    /**
     * Obtiene la clase de vehiculo por el ID
     *
     * @param integer $id
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function getById($id)
    {
        return self::where("IdClaseVehiculo", $id)->first();
    }
}
