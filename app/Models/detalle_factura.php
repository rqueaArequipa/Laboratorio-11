<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class detalle_factura extends MongoModel
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $table = 'detalle_factura';
    protected $fillable = [
        'nombre_usuario',
        'direccion',
        'codigo_postal',
        'pais',
        'ciudad',
    ];
}
