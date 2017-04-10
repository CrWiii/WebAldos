<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller{

	// public function __construct(){
 //        $this->middleware('auth');
 //    }

    public function index(){
        return view('admin.index');
    }
    public function Inicio(){
    	return view('admin.Inicio');
    }
    public function Joyas(){
    	return view('admin.joyas');
    }
    public function Novios(){
    	return view('admin.novios');
    }
    public function MundoAldoAdm(){
    	return view('admin.MundoAldoAdm');
    }
    public function Eventos(){
    	return view('admin.Eventos');
    }
}
