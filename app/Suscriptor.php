<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suscriptor extends Model
{
    protected $fillable = [
      'nombre',
      'apellido',
      'dni',
      'sexo',
      'email',
      'sms',
      'direccion'
    ];
}
