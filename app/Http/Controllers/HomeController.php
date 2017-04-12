<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Type;
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
    public function Joyeria(){
        return view('Joyeria');
    }
    
    public function Novios(){
        return view('Novios');
    }
    public function JoyeriaSub($Type){
    	$Types = Type::where('category_id',1)->get();
    	$Type_selected = Type::where('description',$Type)->pluck('id');
    	$Type_selected = (int)$Type_selected[0];
    	$Products = Product::where('category_id',1)->where('type_id',$Type_selected)->get();
        return view('JoyeriaSub',compact('Products','Types','Type_selected'));
    }
    public function NoviosSub($Type){
        return view('NoviosSub');
    }
    public function Producto($id){
    	$product = Product::find($id);
        return view('Producto',compact('product'));
    }
    public function ElMundoDeAldoSub(){
        return view('ElMundoDeAldoSub');
    }
}
