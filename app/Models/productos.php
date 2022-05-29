<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class productos extends MongoModel
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $table = 'productos';
    protected $fillable = [
        'categoria',
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'oferta',
        'fechavnc',
        'imagen',
    ];
}
