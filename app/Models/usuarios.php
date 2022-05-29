<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
#use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Laravel\Sanctum\HasApiTokens;

class usuarios extends MongoModel implements Authenticatable
{
    use AuthenticableTrait;
    use HasApiTokens, HasFactory, Notifiable;
    protected $connection = 'mongodb';
    protected $table = 'usuarios';
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'imagen',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'verified' => 'datetime',
    ];
}
