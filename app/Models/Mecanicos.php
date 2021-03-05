<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mecanicos extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email','sucursal_id'];

    public function Sucursal()
    {
        return $this->hasOne(Sucursales::class, 'sucursal_id');
    }

    public function Reservas()
    {
        return $this->hasMany(Reservas::class, 'id');
    }
}

