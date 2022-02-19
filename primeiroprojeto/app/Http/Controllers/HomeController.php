<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // receber variavel que esta sendo digitado pelo ususario

class HomeController extends Controller // toda controler que for criado, precisa ser dependente da Controller
{
    // criar metodo
    public function index()
    {
        return view("welcome" ); // tirando o arquivo de rota
    }
    //
}
