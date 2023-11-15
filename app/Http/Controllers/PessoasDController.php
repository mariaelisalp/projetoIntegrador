<?php

namespace App\Http\Controllers;

use App\Models\PessoasDesaparecida;
use Illuminate\Http\Request;

class PessoasDController extends Controller{

   public function index(){

    $pessoasDesaparecidas = PessoasDesaparecida::all();
    //dd($pessoasDesaparecidas);
    return view('PessoasDesaparecidas.index', ['pessoasDesaparecidas' => $pessoasDesaparecidas]);
   }

   public function create(){
    return view('PessoasDesaparecidas.create');
   }

   public function store(Request $request){

      PessoasDesaparecida::create($request->all());
      return redirect()->route('pessoasDesaparecidas-index');

   }
    
}
