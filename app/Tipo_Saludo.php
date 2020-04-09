<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Saludo;

class Tipo_Saludo extends Model
{
  protected $table = 'tipo_saludos';
  protected $fillable = [
      'pago', 'free',
  ];

  public function saludos()
 {
  return $this->hasMany(Saludo::class,  );
 }

}
