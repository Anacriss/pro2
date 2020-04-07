<?php

namespace App\Http\Controllers;

use App\welcome;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
  public function welcome()
  {
      return view('welcome');
  }
}
