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
    	$Types = Type::where('category_id',1)->get();
        return view('home',compact('Types'));
    }
    public function events(){
    	$Types = Type::where('category_id',1)->get();
        return view('events',compact('Types'));
    }
    public function event(){
    	$Types = Type::where('category_id',1)->get();
        return view('event',compact('Types'));
    }
    public function ElMundoDeAldo(){
    	$Types = Type::where('category_id',1)->get();
        return view('ElMundoDeAldo',compact('Types'));
    }
    public function PatekPhilippe(){
    	$Types = Type::where('category_id',1)->get();
        return view('PatekPhilippe',compact('Types'));
    }
    public function Contactenos(){
    	$Types = Type::where('category_id',1)->get();
        return view('Contactenos',compact('Types'));
    }
    public function Joyeria(){
    	$Types = Type::where('category_id',1)->get();
        return view('Joyeria',compact('Types'));
    }
    
    public function Novios(){
    	$Types = Type::where('category_id',1)->get();
        return view('Novios',compact('Types'));
    }
    public function JoyeriaSub($Type){
    	$Types = Type::where('category_id',1)->get();
    	$Type_selected = Type::where('description',$Type)->pluck('id');
    	$Type_selected = (int)$Type_selected[0];
    	$Products = Product::where('category_id',1)->where('type_id',$Type_selected)->get();
        return view('JoyeriaSub',compact('Products','Types','Type_selected'));
    }
    public function NoviosSub($Type){
    	$Types = Type::where('category_id',1)->get();
        return view('NoviosSub',compact('Types'));
    }
    public function Producto($id){
    	$Types = Type::where('category_id',1)->get();
    	$product = Product::find($id);
        return view('Producto',compact('product','Types'));
    }
    public function ElMundoDeAldoSub(){
    	$Types = Type::where('category_id',1)->get();
        return view('ElMundoDeAldoSub',compact('Types'));
    }
}
