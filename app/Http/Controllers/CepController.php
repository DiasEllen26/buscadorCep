<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CepController extends Controller
{
   public function index(Request $request)
   {

    // Parametro cep digitado no input
    $cep = $request->input("cep");

    // Se tiver digitar o cep, vai fazer a requisição
        if ($cep) {
            $response = Http::get("https://viacep.com.br/ws/$cep/json");
            $dadosCep = $response->json();

            return view('cep.index', compact('dadosCep'));
        }

        // Se não tiver o cep, retorna a view normalmente
        return view('cep.index');
    }
}
