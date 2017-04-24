<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Frame;
use App\Subframe;
use App\Images;
use Validator;
use Auth;
use Redirect;

class SubframeController extends Controller{

// public function __construct(){
//        $this->middleware('auth');
//    }
    public function create($frame_id){
        // $frame_type = Frame::where('id',$frame_id)->pluck('frame_type');
        // $frame_type = (int)$frame_type[0];
        $frame = Frame::find($frame_id);
        return view('admin.Subframe.create', compact('frame'));
    }
    public function store(Request $request){
        // dd($request);
        $validator = Validator::make($request->all(), [
            'title'         => 'required',
            // 'frame_id'      => 'required',
            'image'         => 'required|max:4092|mimes:jpeg,jpg,png',
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

            $Subframe = new Subframe; 
            $Subframe->title = $request->title;
            $Subframe->images_id = $Images->id;
            $Subframe->content = $request->content;
            $Subframe->frame_id = $request->frame_id;
            $Subframe->state = 1;
            $Subframe->created_by = Auth::user()->id;
            $Subframe->updated_by = Auth::user()->id;
            
            $Subframe->save();
            $frame_id = $request->frame_id;
                return redirect('SubframeList/'.$frame_id);
        }
         return response()->json(['error'=>$validator->errors()->all()]);
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
            'image'         => 'required|max:2048|mimes:jpeg,jpg,png',
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
            $Frame->images_id = $Images->id;
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
}