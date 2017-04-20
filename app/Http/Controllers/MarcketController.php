<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Marcket;
// use App\Category;
// use App\Type;
use App\Marcket;
use App\Images;
use Validator;
use Auth;

class MarcketController extends Controller{

    public function create(){
        return view('admin.Marcket.create', compact('Category','Type'));
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'description'   => 'required',
            'address'       => 'required',
            'image'         => 'required|mimes:jpeg,jpg,png',
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

            $Marcket = new Marcket;
            $Marcket->description = $request->description;
            $Marcket->address = $request->address;
            $Marcket->images_id = $Images->id;
            $Marcket->state = 1;
            $Marcket->created_by = Auth::user()->id;
            $Marcket->save();

            return redirect('Marcket');
        }
        // return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function delete($id){
        $Marcket = Marcket::destroy($id);
            return redirect('Marcket');
    }
    public function desactive($id){
        $Marcket = Marcket::findOrFail($id);
        $Marcket->state = 0;
        $Marcket->update();
        return redirect('Marcket');
    }
    public function active($id){
        $Marcket = Marcket::findOrFail($id);
        $Marcket->state = 1;
        $Marcket->update();
        return redirect('Marcket');
    }
    public function edit($id){
        $Marcket = Marcket::findOrFail($id);
        return view('admin.Marcket.edit',compact('Marcket'));
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
        $Marcket = Marcket::findOrFail($request->id);
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
                $ImgId = $Marcket->images_id;
            }

            $Marcket->name = $request->name;
            $Marcket->description = $request->description;
            $Marcket->type_id = $request->type_id;
            $Marcket->category_id = $request->category_id;
            $Marcket->images_id = $ImgId;
            $Marcket->state = 1;
            $Marcket->created_by = Auth::user()->id;
            $Marcket->update();

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