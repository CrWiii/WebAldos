<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Frame;
use App\Images;
use Validator;
use Auth;

class FrameController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

    public function create($category_id){
    // $Category = Category::all()->where('id',$category_id)->where('state',true);
    //    $Type = Type::all()->where('category_id',$category_id)->where('state',true)->where('frame',false);
        return view('admin.Frame.create', compact('category_id'));
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'title'         => 'required',
            'route'         => 'required',
            'frame_type'    => 'required',
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

            $Frame = new Frame; 
            $Frame->title = $request->title;
            $Frame->subtitle = $request->subtitle;
            $Frame->frame_type = $request->frame_type;
            $Frame->route = $request->route;
            $Frame->images_id = $Images->id;
            $Frame->slug =  str_replace(' ', '_', strtolower($request->title));
            $Frame->state = 1;
            $Frame->content = $request->content;
            $Frame->created_by = Auth::user()->id;
            $Frame->updated_by = Auth::user()->id;
            $Frame->save();

            if($request->frame_type==1){
                return redirect('MundoAldoAdm');
            }
            if($request->frame_type==2){
                return redirect('Inicio');
            }
        }
        // return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function delete($id){
        $frame_type = Frame::where('id',$id)->pluck('frame_type');
        $frame_type = (int)$frame_type[0];
        $frame = frame::destroy($id);
            if($frame_type==1){
                return redirect('MundoAldoAdm');
            }
            if($frame_type==2){
                return redirect('Inicio');
            }
    }
    public function desactive($id){
        $Frame = Frame::findOrFail($id);
        $Frame->state = 0;
        $Frame->update();
        // $frame_type = Frame::where('id',$id)->pluck('frame_type');
            if($Frame->frame_type==1){
                return redirect('MundoAldoAdm');
            }
            if($Frame->frame_type==2){
                return redirect('Inicio');
            }
    }
    public function active($id){
        $Frame = Frame::findOrFail($id);
        $Frame->state = 1;
        $Frame->update();
            if($Frame->frame_type==1){
                return redirect('MundoAldoAdm');
            }
            if($Frame->frame_type==2){
                return redirect('Inicio');
            }
    }
    public function edit($id){
        $frame = Frame::findOrFail($id);
        return view('admin.Frame.edit',compact('frame'));
    }
    public function update($id,Request $request){
        $validator = Validator::make($request->all(), [
            'title'         => 'required',
            'route'         => 'required',
            'frame_type'    => 'required',
            'image'         => 'max:2048|mimes:jpeg,jpg,png',
        ]);

        $imgfu = '';
        $Frame = Frame::findOrFail($request->id);
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
                $ImgId = $Frame->images_id;
            }

            $Frame->title = $request->title;
            $Frame->subtitle = $request->subtitle;
            $Frame->frame_type = $request->frame_type;
            $Frame->route = $request->route;
            $Frame->images_id = $ImgId;
            $Frame->state = 1;
            $Frame->content = $request->content;
            $Frame->updated_by = Auth::user()->id;
            $Frame->update();

            if($Frame->frame_type==1){
                return redirect('MundoAldoAdm');
            }
            if($Frame->frame_type==2){
                return redirect('Inicio');
            }
        }
        // return response()->json(['error'=>$validator->errors()->all()]);
    }
    public function createSlide(){
        return view('admin.slide.create');

    }
    public function storeSlide(Request $request){
        $validator = Validator::make($request->all(), [
            'title'         => 'required',
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

            $Slide = new Frame; 
            $Slide->title = $request->title;
            $Slide->subtitle = $request->subtitle;
            $Slide->frame_type = 3;
            $Slide->images_id = $Images->id;
            $Slide->state = 1;
            $Slide->created_by = Auth::user()->id;
            $Slide->updated_by = Auth::user()->id;
            $Slide->save();

            return redirect('Inicio');
            }

    return response()->json(['error'=>$validator->errors()->all()]);
    }
}