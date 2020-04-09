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

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
       // ddd($request->all());

       $contactos = Saludo::create($request->all());

         return back();

     }

     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         $saludos = Saludos::find($id);
         return view('contactos', compact('id'));
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {

     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {

     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         $contactos = Contacto::find($id)->delete();

         return back();
     }



  }
