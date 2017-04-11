<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Type;
use App\Images;

class ProductController extends Controller{

	// public function __construct(){
 //        $this->middleware('auth');
 //    }

	public function Joyeria(){
		$Joyas = Product::all()->where('Category_id','2');
        return view('Joyeria');
    }
    public function create(){
    	$Category = Category::all()->where('state',true);//->get()->pluck('id','description')
        $Type = Type::all()->where('state',true);
        return view('admin.product.create', compact('Category','Type'));
    }
    public function store(Request $request){
        $this->validate(request(),[
            'nombre'        => 'required',
            'category_id'   => 'required',
            'type_id'       => 'required',
            'description'   => 'required',
            ]);
        // Product::create(request(['nombre','category_id','type_id','description','images'=>1]));

        // $imgfu = '';
        // $New = News::findOrFail($request->id);
        // if ($validator->passes()) {
        //     $input = $request->all();
        //     if(!empty($request->image)){
        //         $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        //         $request->image->move(public_path('images/blog'), $input['image']);
        //         $imgfu = '/images/blog/'.time().'.'.$request->image->getClientOriginalExtension();
        //     }else{
        //         $imgfu = $New->img;
        //     }
            

            
        //         $New->title = $request->title;
        //         $New->description = $request->description;
        //         $New->img = $imgfu;
        //         $New->state = 1;
        //         $New->created_by = '';
        //         $New->user_id = \Auth::user()->id;
        //         $New->update();

        // }

        $Product = new Product;
        $Product->description = $request->description;
        $Product->type_id = $request->type_id;
        $Product->category_id = $request->category_id;
        $Product->images_id = 1;
        $Product->state = 1;
        $Product->created_by = $request->created_by;
        $Product->updated_by = $request->updated_by;
        $Product->save();
        
        // $Product->startdate = date("Y-m-d H:i:s",strtotime($request->astrt));
        // $Product->enddate = date("Y-m-d H:i:s",strtotime($request->aendt));
        // $Product->asunt = '#3a87ad';
        // $Product->place = $request->phone;
        // $Product->description = $request->description;
        // $Product->dni = $request->dni;
        // $Product->state = 'PENDIENTE';
        // $Product->mail = $request->email;
        
    	return redirect('JoyasAdm');
    }


    public function delete($id){
        if (\Auth::guest()){
        }else{
            $product = Product::destroy($id);
        }
    }
    public function edit($id){
        $Product = News::findOrFail($id);
        return view('admin.product.edit',compact('Product'));
    }
    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            //'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
          ]);
        $imgfu = '';
        $New = News::findOrFail($request->id);
        if ($validator->passes()) {
            $input = $request->all();
            if(!empty($request->image)){
                $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('images/blog'), $input['image']);
                $imgfu = '/images/blog/'.time().'.'.$request->image->getClientOriginalExtension();
            }else{
                $imgfu = $New->img;
            }
                $Product->title = $request->title;
                $Product->description = $request->description;
                $Product->img = $imgfu;
                $Product->state = 1;
                $Product->created_by = \Auth::user()->id;
                $Product->update();

            //return response()->json(['success'=>'done']);
            return Redirect('');
        }
        //return response()->json(['error'=>$validator->errors()->all()]);
    }
}