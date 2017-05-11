<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Type;
use App\Images;
use Validator;
use Auth;

class ProductController extends Controller{

	// public function __construct(){
 //        $this->middleware('auth');
 //    }

	public function Joyeria(){
		$Joyas = Product::all()->where('Category_id','2');
        return view('Joyeria');
    }
    public function create($category_id){
    	$Category = Category::all()->where('id',$category_id)->where('state',true);
        $Type = Type::all()->where('category_id',$category_id)->where('state',true)->where('frame',false);
        return view('admin.product.create', compact('Category','Type'));
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
    public function EditarFrameN($id){
        $frame = Type::findOrFail($id);
        return view('admin.product.editarframen',compact('frame'));
    }
    public function ActualizarFrameN($id,Request $request){
        $validator = Validator::make($request->all(), [
            'description'   => 'required',
            'slug'       => 'required',
            'image'         => 'max:2048|mimes:jpeg,jpg,png',
            'image_n'         => 'max:2048|mimes:jpeg,jpg,png',
        ]);

        $imgfu = '';
        $imgfu_n = '';
        $frame = Type::findOrFail($request->id);

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
                $ImgId = $frame->images_id;
            }

            if(!empty($request->image_n)){
                $input['image_n'] = $request->image_n->getClientOriginalName();
                $request->image_n->move(public_path('images'), $input['image']);
                $imgfu_n = '/images/'.$request->image_n->getClientOriginalName();

                $Images_n = new Images;
                $Images_n->description = $input['image'];
                $Images_n->route = $imgfu_n;
                $Images_n->state = 1;
                $Images_n->created_by = Auth::user()->id;
                $Images_n->save();
                $ImgId_n = $Images->id;
            }else{
                $ImgId_n = $frame->images_id_frame;
            }

            $frame->description = $request->description;
            $frame->slug = $request->slug;
            $frame->content = $request->content;
            $frame->images_id = $ImgId;
            $frame->images_id_frame = $ImgId_n;
            $frame->state = 1;
            $frame->updated_by = Auth::user()->id;
            $frame->update();

            return redirect('NoviosAdm');
        }

    }
}