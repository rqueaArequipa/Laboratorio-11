<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class nosotros extends MongoModel
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $table = 'nosotros';
    protected $fillable = [
        'nombre',
        'apellido',
        'cargo',
    ];
}
