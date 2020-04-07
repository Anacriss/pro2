<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Contacto;

class saludo extends Model
{


 protected $fillable = [
     'nombre', 'saludo', 'celular',
 ];

   public function contactos()
  {
   return $this->belongsTo(Contacto::class,  );
  }



}
