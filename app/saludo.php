<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Contacto;
use App\Tipo_Saludo;

class saludo extends Model
{

 public $timestamps = false;
 protected $fillable = [
     'name', 'saludo', 'celular','contacto_id','tipo_saludos_id',
 ];


   public function contactos()
  {
   return $this->belongsTo(Contacto::class, 'contacto_id');
  }
    public function tipo_saludos()
   {
    return $this->belongsTo(Tipo_Saludo::class);
   }



}
