<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller{

    public function index(){
        return view('home');
    }
    public function create(){
    	return view('admin.event.create');
    }
    public function store(Request $request){
        dd($request);
    	$validator = Validator::make($request->all(), [
            'description'   => 'required',
            'content'   	=> 'required',
            'image'         => 'required|max:2048|mimes:jpeg,jpg,png',
            ]);

        if ($validator->passes()) {
            $input = $request->all();
            
            if(!empty($request->image)){
                $input['image'] = $request->image->getClientOriginalName();
                $request->image->move(public_path('images'), $input['image']);
                $imgfu = '/images/'.$request->image->getClientOriginalName();

                $Images = new Images;
                $Images->description = $input['image'];
                $Images->route = $imgfu;
                $Images->state = 1;
                $Images->created_by = Auth::user()->id;
                $Images->save();
            }

            $Product = new Product;
            $Product->name = $request->name;
            $Product->description = $request->description;
            $Product->type_id = $request->type_id;
            $Product->category_id = $request->category_id;
            $Product->images_id = $Images->id;
            $Product->state = 1;
            $Product->created_by = Auth::user()->id;
            $Product->save();

            if($request->category_id==1){
                return redirect('JoyasAdm');
            }
            if($request->category_id==2){
                return redirect('NoviosAdm');
            }
        }

    }
}
