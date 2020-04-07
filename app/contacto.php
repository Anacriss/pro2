<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Saludo;
class contacto extends Model
{


 public $timestamps = false;
 protected $fillable = [
     'nombre', 'apellido', 'dni','saludo_id',
 ];

    public function saludos()
  {
    return $this->hasMany(Saludo::class);
  }


}
