<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{

    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function index(){
        return view('home');
    }

    public function events(){
        return view('events');
    }
    public function event(){
        return view('event');
    }
    public function ElMundoDeAldo(){
        return view('ElMundoDeAldo');
    }
    public function PatekPhilippe(){
        return view('PatekPhilippe');
    }
    public function Contactenos(){
        return view('Contactenos');
    }
    
    public function Novios(){
        return view('Novios');
    }
    public function JoyeriaSub(){
        return view('JoyeriaSub');
    }
    public function NoviosSub(){
        return view('NoviosSub');
    }
    public function Producto(){
        return view('Producto');
    }
    public function ElMundoDeAldoSub(){
        return view('ElMundoDeAldoSub');
    }
}
