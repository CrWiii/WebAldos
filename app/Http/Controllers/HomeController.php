<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Type;
use App\Eventt;
use App\Marcket;
class HomeController extends Controller{

    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function home(){
    	$TypesJoyas = Type::where('category_id',1)->get();
        $TypesNovios = Type::where('category_id',2)->get();
        return view('welcome',compact('TypesJoyas','TypesNovios'));
    }
    public function events(){
        $Eventts = Eventt::where('state',true)->orderBy('updated_at','DESC')->take(3)->get();
    	$TypesJoyas = Type::where('category_id',1)->get();
        $TypesNovios = Type::where('category_id',2)->get();
        return view('events',compact('TypesJoyas','TypesNovios','Eventts'));
    }
    public function event($id){
        $Eventt = Eventt::findOrFail($id);
    	$TypesJoyas = Type::where('category_id',1)->get();
        $TypesNovios = Type::where('category_id',2)->get();
        return view('event',compact('TypesJoyas','TypesNovios','Eventt'));
    }
    public function ElMundoDeAldo(){
    	$TypesJoyas = Type::where('category_id',1)->get();
        $TypesNovios = Type::where('category_id',2)->get();
        return view('ElMundoDeAldo',compact('TypesJoyas','TypesNovios'));
    }
    public function PatekPhilippe(){
    	$TypesJoyas = Type::where('category_id',1)->get();
        $TypesNovios = Type::where('category_id',2)->get();
        return view('PatekPhilippe',compact('TypesJoyas','TypesNovios'));
    }
    public function Contactenos(){
        $Marckets = Marcket::where('state',true)->orderBy('created_at','DESC')->get();
    	$TypesJoyas = Type::where('category_id',1)->get();
        $TypesNovios = Type::where('category_id',2)->get();
        return view('Contactenos',compact('TypesJoyas','TypesNovios','Marckets'));
    }
    public function Joyeria(){
    	$TypesJoyas = Type::where('category_id',1)->get();
        $TypesNovios = Type::where('category_id',2)->get();
        return view('Joyeria',compact('TypesJoyas','TypesNovios'));
    }
    
    public function Novios(){
    	$TypesJoyas = Type::where('category_id',1)->get();
        $TypesNovios = Type::where('category_id',2)->get();
        return view('Novios',compact('TypesJoyas','TypesNovios'));
    }
    public function JoyeriaSub($Type){
    	$TypesJoyas = Type::where('category_id',1)->get();
        $TypesNovios = Type::where('category_id',2)->get();

    	$Type_selected = Type::where('slug',$Type)->pluck('id');
    	$Type_selected = (int)$Type_selected[0];
    	$Products = Product::where('category_id',1)->where('type_id',$Type_selected)->where('state',true)->paginate(15);
        return view('JoyeriaSub',compact('Products','TypesJoyas','TypesNovios','Type_selected'));
    }
    public function NoviosSub($Type){
    	$TypesJoyas = Type::where('category_id',1)->get();
        $TypesNovios = Type::where('category_id',2)->get();
        $Type_selected = Type::where('slug',$Type)->pluck('id');
        $Type_selected = (int)$Type_selected[0];
        $Products = Product::where('category_id',2)->where('type_id',$Type_selected)->where('state',true)->paginate(15);
        return view('NoviosSub',compact('Products','TypesJoyas','TypesNovios','Type_selected'));
    }
    public function Producto($id){
    	$TypesJoyas = Type::where('category_id',1)->get();
        $TypesNovios = Type::where('category_id',2)->get();
    	$product = Product::find($id);
        return view('Producto',compact('product','TypesJoyas','TypesNovios'));
    }
    public function ElMundoDeAldoSub(){
    	$TypesJoyas = Type::where('category_id',1)->get();
        $TypesNovios = Type::where('category_id',2)->get();
        return view('ElMundoDeAldoSub',compact('TypesJoyas','TypesNovios'));
    }
}
