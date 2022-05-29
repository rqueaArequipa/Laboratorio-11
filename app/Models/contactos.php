<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class contactos extends MongoModel
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $table = 'contactos';
    protected $fillable = [
        'nombre',
        'correo',
        'tema',
        'mensaje',
    ];
}
