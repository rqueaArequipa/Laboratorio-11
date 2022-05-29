<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model as MongoModel;
class lineas_pedidos extends MongoModel
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $table = 'lineas_pedidos';
    protected $fillable = [
        'numero_envio',
        'pedido',
        'producto',
        'unidades',
    ];
}
