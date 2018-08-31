<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MotivoContacto extends Model
{
  protected $table = 'motivo_contacto';
  protected $primaryKey = "id";
  protected $fillable = [
    'descripcion'];
  }
