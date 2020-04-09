<?php

namespace App\Http\Controllers;
use App\saludo;
use App\contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
  //  public function contacto()
    //{
      //  return view('Contacto');

    //}

    public function contacto()
    {

      $contactos = Contacto::all();
    //  contactos = $contacto->saludos;
    //  $contactos = Saludo::all()->pluck('saludo', 'id');
//
    return view('contacto')->with(['contactos' => $contactos]);
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
       $contactos = Contacto::create($request->all());
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
       $contacto = Contacto::find($id);
       return view('detallec');

   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
     $editarContacto = Contacto::all();

     $saludos = Saludo::find($id);

     //Esto lo hago para lograr atrapar el genero que esta guardado en la base de datos, la idea luego es poder enviarlo a la vista
     $tipoSaludo = $tipoSaludo->tipo_saludo_id;
     $tipoSaludo = Tipo_Saludo::find($id);
      return back();

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
       $eliminarContacto = Contacto::find($id)->delete();
       $eliminarContacto = dalete;
       return back();
   }



}
