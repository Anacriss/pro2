<?php

namespace App\Http\Controllers;

use App\saludo;
use App\tipo_saludo;
use App\Contacto;
use Illuminate\Http\Request;

class SaludoController extends Controller
{

    public function saludo()
    {

        $saludos = Saludo::all();
        $tiposaludos = Tipo_saludo::all();
        $contactos = Contacto::all();


      return view('saludo')->with(['saludos' => $saludos, 'tipo_saludos' => $tiposaludos, 'contactos' => $contactos]);
      }

      public function create()
     {


     }


     public function store(Request $request)
     {
       // ddd($request->all());

       $contactos = Saludo::create($request->all());

         return back();

     }



     public function show($id)
     {
         $saludos = Saludos::find($id);
         return view('contactos', compact('id'));
     }


     public function edit($id)
     {

     }



     public function update(Request $request, $id)
     {

     }



     public function destroy($id)
     {
         $contactos = Contacto::find($id)->delete();

         return back();
     }



  }
