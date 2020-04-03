<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contacto extends Model
{

 protected $fillable = [
     'nombre', 'apellido', 'dni',
 ];
}
