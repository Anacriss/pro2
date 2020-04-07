<?php

namespace App\Http\Controllers;

use App\contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function contacto()
    {
        return view('Contacto');
    }
}
