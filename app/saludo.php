<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class saludo extends Model
{


 protected $fillable = [
     'nombre', 'saludo', 'celular',
 ];
}
