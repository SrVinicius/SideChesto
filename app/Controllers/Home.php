<?php

namespace App\Controllers;

class Home extends BaseController
{
    // as views estao aqui
    public function index()
    {
        return view('homepage');
    }
    public function sobre()
    {
        return view('sobre');
    }
    public function contato()
    {
        return view('contato');
    }
    public function pesos()
    {
        return view('pesos');
    }
}
