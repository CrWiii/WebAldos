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
    	$ProductJoyas = Product::where('category_id',1)->orderBy('created_at','DESC')->get();
    	return view('admin.Joyas', compact('ProductJoyas'));
    }
    public function Novios(){
        $ProductNovios = Product::where('category_id',2)->orderBy('created_at','DESC')->get();
    	return view('admin.Novios',compact('ProductNovios'));
    }
    public function MundoAldoAdm(){
    	return view('admin.MundoAldoAdm');
    }
    public function Eventos(){
    	return view('admin.Eventos');
    }
}
