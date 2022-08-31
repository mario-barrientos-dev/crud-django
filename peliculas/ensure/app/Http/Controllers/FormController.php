<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        //
        return view('plantilla.plantilla');
    }
    public function guardar(request $request)
    {
        //
        
        $request->validate([
            'nombre' => 'required', 
            'apellido' => 'required', 
            'email' => 'required|email', 
            'mobil' => 'required|numeric', 
            'factura'=> 'required | mimes:jpeg,png,jpg,pdf',
            'n_factura'=> 'required',
        ]);
        
          
        $form = new Form;
        $form->nombre=$request->nombre;
        $form->apellido=$request->apellido;
        $form->email=$request->email;
        $form->mobil=$request->mobil;
       // $form->factura=$request->factura;
        $form->n_factura=$request->n_factura;
        if($request->hasFile("factura")){
            $time=time();
            $imagen = $request->file("factura");
            $nombreimagen = date("H.i.s", $time).".".date("m.d").".".Str::slug($request->n_factura).".".$imagen->guessExtension();
            $ruta = public_path("facturas/");

            //$imagen->move($ruta,$nombreimagen);
            copy($imagen->getRealPath(),$ruta.$nombreimagen);

            $form->factura = $nombreimagen;            
            
        }
        $form->save();
        
        return redirect('thank')->with('success', 'gracias!');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
