<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UtensilioCozinha;

class CadastrarController extends Controller
{
    //regra de negocio: validar e persistir dados
    public function salvar(Request $request){
        $request->validate([
            "nome" => "required|min:3|max:50",
            "material" => "required",
            "cor" => "required|min:3|max:50",
            "uso" => "required|min:3|max:50",
            "capacidade" => "required|decimal:2"
        ],
        [
            "nome.required" => "Obrigatório preencher nome do utensílio",
            "nome.min" => "Necessário inserir no mínimo 3 caracteres",
            "nome.max" => "Não é possível inserir mais de 50 caracteres neste campo",
            "material.required" => "Obrigório inserir a função do utensílio",
            "cor.required" => "Obrigatório preencher a cor do utensílio",
            "cor.min" => "Necessário inserir no mínimo 3 caracteres",
            "cor.max" => "Não é possível inserir mais de 50 caracteres neste campo",
            "uso.required" => "Obrigatório preencher uso para o utensílio",
            "uso.min" => "Necessário inserir no mínimo 3 caracteres",
            "uso.max" => "Não é possível inserir mais de 50 caracteres neste campo",
            "capacidade.required" => "Obrigatório preencher a capacidade do utensílio em Litros",
            "capacidade.decimal" => "Necessário inserir a capacidade em Litros em formato decimal (0.00)"
           
        ]);
        //dd($request);
        $data = $request->except('_token'); 
        $utensílio = new utensílioCozinha();
        $utensílio->fill($request->all());
        $utensílio->save();
        return view('cadastrosalvo');
    }
}

