<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Models\Targetas;


use Illuminate\Http\Request;

class comprasControllers extends Controller
{
    public function index(){

   $targetas = Targetas::all();

    return view('compras.index',compact('targetas'));


    }


    public function create(){

        return view('compras.create');

    }

    public function store(Request $request){

        $request->validate([
            'idTargeta' => 'required',
            'nombre' => 'required',
            'cedula' => 'required',
            'saldo' => 'required',
        ]);

        $targetas = new Targetas();
        $targetas->fill($request->all());
        $targetas->save();

        return redirect()->route('compras.index');

    }
   public function edit($id){

    $targetas = Targetas::find($id);
    return view('compras.edit',compact('targetas'));

   }


   public function update(Request $request, $id){

    $request->validate([
        'idTargeta' => 'required',
        'nombre' => 'required',
        'cedula' => 'required',
        'saldo' => 'required',
    ]);

    $targetas = Targetas::find($id);
    $targetas->fill($request->all());
    $targetas->save();

    return redirect()->route('compras.index');

   }


   public function destroy($id){

    $targetas = Targetas::find($id);
    $targetas->delete();

    return redirect()->route('compras.index');

   }
   public function buscar(Request $request)
   {
       $cedulaOrId = $request->input('q');

       $targetas = Targetas::where('cedula', $cedulaOrId)
                           ->orWhere('idTargeta', $cedulaOrId)
                           ->get();

       return view('compras.index', compact('targetas'));
   }




   public function recargar(Request $request)
   {
       $codigo = $request->input('codigo');
       $nuevoSaldo = $request->input('saldo-recarga');

       // Buscar la tarjeta por su código
       $targeta = Targetas::where('idTargeta', $codigo)->first();

       if ($targeta) {
           // Si la tarjeta existe, sumar el nuevo saldo al saldo existente
           $targeta->saldo += $nuevoSaldo;
           $targeta->save();
       } else {
           // Si la tarjeta no existe, crear una nueva
           $targeta = new Targetas();
           $targeta->idTargeta = $codigo;
           // Aquí puedes llenar otros campos si es necesario
           $targeta->saldo = $nuevoSaldo;
           $targeta->save();
       }

       return redirect()->route('compras.index');
   }





}
