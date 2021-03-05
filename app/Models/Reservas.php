<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservas extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','email','fecha_reserva'];


    public function Sucursal()
    {
        return $this->hasOne(Sucursales::class, 'sucursal_id');
    }

    public function Mecanico()
    {
        return $this->hasOne(Mecanicos::class, 'id');
    }


}
