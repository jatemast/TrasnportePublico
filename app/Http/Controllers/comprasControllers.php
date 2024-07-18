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
}
