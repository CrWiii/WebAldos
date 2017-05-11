<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Eventt;
use App\Marcket;
use App\Question;
use App\Frame;
use App\Subframe;
use App\Type; 

class AdminController extends Controller{

	public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.index');
    }
    public function Inicio(){
        $frames = Frame::where('frame_type',2)->orderBy('created_at','DESC')->paginate(15);
    	return view('admin.Inicio',compact('frames'));
    }
    public function Joyas(){
    	$ProductJoyas = Product::where('category_id',1)->orderBy('created_at','DESC')->paginate(15);
        $frames = Type::where('category_id',1)->get();
    	return view('admin.Joyas', compact('ProductJoyas','frames'));
    }
    public function Novios(){
        $Questions = Question::paginate(15);
        $ProductNovios = Product::where('category_id',2)->orderBy('created_at','DESC')->paginate(15);
        $frames = Type::where('category_id',2)->get();

    	return view('admin.Novios',compact('ProductNovios','Questions','frames'));
    }
    public function MundoAldoAdm(){
        $frames = Frame::where('frame_type',1)->with('Images')->orderBy('created_at','DESC')->paginate(15);
    	return view('admin.MundoAldoAdm',compact('frames'));
    }
    public function Eventos(){
        $Events = Eventt::orderBY('created_at','DESC')->get();
    	return view('admin.Eventos',compact('Events'));
    }
    public function Marcket(){
        $Marckets = Marcket::orderBY('created_at','DESC')->get();
        return view('admin.Contactenos',compact('Marckets'));
    }
    public function Subframe($frame_id){
        $frame = Frame::find($frame_id);
        $subframes = Subframe::where('frame_id',$frame_id)->get();
        return view('admin.Subframe',compact('frame','subframes'));
    }
}
