<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaxtecController extends Controller
{
    public function index(){
        return view('home');
    }

    public function about(){
        return view('pages.empresa');
    }

    public function servico(){
        return view('pages.servicos');
    }

    public function equipe(){
        return view('pages.equipe');
    }
}
