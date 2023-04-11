<?php

namespace App\Controllers;

class Home extends BaseController
{
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
    public function treinos()
    {
        return view('treinos');
    }
}
