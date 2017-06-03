<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Type;
use App\Eventt;
use App\Marcket;
use App\Question;
use App\Frame;
use App\Subframe;
use Mail;

class HomeController extends Controller{

    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function home(){
    	$TypesJoyas = Type::where('category_id',1)->get();
        $TypesNovios = Type::where('category_id',2)->get();
        $frames = Frame::where('frame_type',2)->orderBy('id','ASC')->get();
        $slides = Frame::where('frame_type',3)->get();
        // dd($slides);
        return view('welcome',compact('TypesJoyas','TypesNovios','frames','slides'));
    }
    public function test(){
        return view('template');
    }
    public function storePer(Request $request){
        $userdata = array(
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'celphone' => $request->celphone,
            'product_name' => $request->product_name);
        if($request->parm == 'subs'){
            Mail::send( 'template_subs', $userdata, function( $message ) use ($userdata){$message->to([$userdata['email']])->subject('Subscrito al Newletter de Joyeria Aldo & CO');});
            Mail::send( 'template_subs_adm', $userdata, function( $message ) use ($userdata){$message->to('contacto@joyeria-aldo.com')->subject('Nuevo suscriptor newletter');});
        }
        if($request->parm == 'coti'){
            Mail::send( 'template_coti', $userdata, function( $message ) use ($userdata){$message->to([$userdata['email']])->subject("Solicitud de Cotización Joyeria Aldo & CO");});
            Mail::send( 'template_coti_adm', $userdata, function( $message ) use ($userdata){$message->to('contacto@joyeria-aldo.com')->subject('Nueva solicitud de cotización');});
        }
        return redirect()->back();
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
        $frames = Frame::where('frame_type',1)->where('state',1)->orderBy('created_at','DESC')->get();
    	$TypesJoyas = Type::where('category_id',1)->get();
        $TypesNovios = Type::where('category_id',2)->get();
        return view('ElMundoDeAldo',compact('TypesJoyas','TypesNovios','frames'));
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
        $Questions = Question::where('state',true)->get();
        return view('NoviosSub',compact('Products','TypesJoyas','TypesNovios','Type_selected','Questions'));
    }
    public function Producto($id){
    	$TypesJoyas = Type::where('category_id',1)->get();
        $TypesNovios = Type::where('category_id',2)->get();
    	$product = Product::find($id);
        return view('Producto',compact('product','TypesJoyas','TypesNovios'));
    }
    public function ElMundoDeAldoSub($slug){
    	$TypesJoyas = Type::where('category_id',1)->get();
        $TypesNovios = Type::where('category_id',2)->get();
        // $subTit = collect([['slug'=>'Historia','description'=>'HISTORIA'],
        //                   ['slug'=>'Nosotros','description'=>'NOSOTROS'],
        //                   ['slug'=>'creando_magia','description'=>'CREANDO MAGIA'],
        //                   ['slug'=>'responsabilidad_social','description'=>'RESPONSABILIDAD SOCIAL']]);
        $Type_selected = Frame::where('slug',$slug)->pluck('id');
        $Type_selected = (int)$Type_selected[0];
        $frames = Frame::where('frame_type',1)->where('state',true)->get();

        return view('ElMundoDeAldoSub',compact('TypesJoyas','TypesNovios','frames','slug','Type_selected'));
    }
}
