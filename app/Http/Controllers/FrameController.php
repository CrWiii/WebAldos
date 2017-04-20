<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Product;
// use App\Category;
// use App\Type;
use App\Frame;
use App\Images;
use Validator;
use Auth;

class FrameController extends Controller{

	// public function __construct(){
 //        $this->middleware('auth');
 //    }

	public function Joyeria(){
		$Joyas = Product::all()->where('Category_id','2');
        return view('Joyeria');
    }
    public function create(){
    	// $Category = Category::all()->where('id',$category_id)->where('state',true);
     //    $Type = Type::all()->where('category_id',$category_id)->where('state',true)->where('frame',false);
        return view('admin.Frame.create'/*, compact('Category','Type')*/);
    }
    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'name'        => 'required',
            'category_id'   => 'required',
            'type_id'       => 'required',
            'description'   => 'required',
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
        // return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function delete($id){
        $product = Product::destroy($id);
            return redirect('JoyasAdm');
    }
    public function desactive($id){
        $Product = Product::findOrFail($id);
        $Product->state = 0;
        $Product->update();
        return redirect('JoyasAdm');
    }
    public function active($id){
        $Product = Product::findOrFail($id);
        $Product->state = 1;
        $Product->update();
        return redirect('JoyasAdm');
    }
    public function edit($id){
        $Product = Product::findOrFail($id);
        $category_id = $Product->category_id;
        $type_selected = $Product->type_id;
        $Category = Category::all()->where('id',$category_id)->where('state',true);
        $Type = Type::all()->where('category_id',$category_id)->where('state',true);
        return view('admin.product.edit',compact('Product','Category','Type','type_selected'));
    }
    public function update($id,Request $request){
        $validator = Validator::make($request->all(), [
            'name'        => 'required',
            'category_id'   => 'required',
            'type_id'       => 'required',
            'description'   => 'required',
            'image'         => 'max:2048|mimes:jpeg,jpg,png',
        ]);

        $imgfu = '';
        $Product = Product::findOrFail($request->id);
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
                $ImgId = $Images->id;
            }else{
                $ImgId = $Product->images_id;
            }

            $Product->name = $request->name;
            $Product->description = $request->description;
            $Product->type_id = $request->type_id;
            $Product->category_id = $request->category_id;
            $Product->images_id = $ImgId;
            $Product->state = 1;
            $Product->created_by = Auth::user()->id;
            $Product->update();

            if($request->category_id==1){
                return redirect('JoyasAdm');
            }
            if($request->category_id==2){
                return redirect('NoviosAdm');
            }
        }
        // return response()->json(['error'=>$validator->errors()->all()]);
    }
}