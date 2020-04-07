<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// route::get('/',['as'=>'welcome','uses'=>'WelcomeController']);
route::get('/', 'WelcomeController@welcome');

route::get('contacto', 'ContactoController@contacto');
route::get('saludo', 'SaludoController@saludo');
