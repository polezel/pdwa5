<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UtensilioCozinha;
use Illuminate\Support\Facades\Response;

class XmlController extends Controller
{
    public function gerarXML(){
        $dados = UtensilioCozinha::all();
        $content = view('data-xml', ['registro' => $dados])->render();
        return Response::make($content, 200, [
            'Content-Type' => 'application/xml'

        ]);
    }
}
