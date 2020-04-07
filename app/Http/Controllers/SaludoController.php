<?php

namespace App\Http\Controllers;

use App\saludo;
use Illuminate\Http\Request;

class SaludoController extends Controller
{

    public function saludo()
    {
        return view('saludo');
    }

}
