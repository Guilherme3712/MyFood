<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    public function mostrar()
    {
        //return "Mostrar funcionários!";
        return view('mostrar');
    }

    public function adicionar()
    {
        return view('adicionar');
    }

    public function detalhes()
    {
        return view('detalhes');
    }

    public function myfood()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function validar()
    {
        return view('validar');
    }

    public function sobre()
    {
        return view('sobre');
    }

    public function restaurantes()
    {
        return view('restaurantes');
    }

    

    

    //adicionar/atualizar

    //detalhes
}
