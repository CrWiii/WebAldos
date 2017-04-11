<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class AdminController extends Controller{

	public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.index');
    }
    public function Inicio(){
    	return view('admin.Inicio');
    }
    public function Joyas(){
    	$ProductJoyas = Product::where('category_id',1)->get();
    	return view('admin.joyas', compact('ProductJoyas'));
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
