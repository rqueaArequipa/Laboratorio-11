<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class carrito extends MongoModel
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $table = 'carrito';
    protected $fillable = [
        'nombre_articulo',
        'precio',
        'comportamiento',
        'estado',
        'cantidad',
    ];
}
