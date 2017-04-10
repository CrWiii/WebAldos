<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller{

	// public function __construct(){
 //        $this->middleware('auth');
 //    }

	public function Joyeria(){
		$Joyas = Product::all()->where('Category_id','2');
        return view('Joyeria');
    }
    public function Edit(){
    	return view('admin.product.edit');
    }
    public function create(){
        return view('admin.product.create');
    }
}
