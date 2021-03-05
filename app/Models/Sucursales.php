<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursales extends Model
{
    use HasFactory;
    protected $fillable = ['name','dias_atencion','horas_atencion'];


    public function Mecanicos()
    {
        return $this->hasMany(Mecanicos::class, 'sucursal_id');
    }

    public function Reservas()
    {
        return $this->hasMany(Reservas::class, 'sucursal_id');
    }
}

