<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class pedidos extends MongoModel
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $table = 'pedidos';
    protected $fillable = [
        'usuario_id',
        'provincia',
        'localidad',
        'direccion',
        'coste',
        'estado',
        'fecha_pedido',
        'fecha_entrega',
    ];
}
