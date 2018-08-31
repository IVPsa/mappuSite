<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
  protected $table = 'contacto';
  protected $primaryKey = "id";
  protected $fillable = [
    'nombres_apellidos',
    'telefono',
    'email',
    'mensaje',
    'motivo_id'
  ];
}
