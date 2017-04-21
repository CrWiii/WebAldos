<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eventt;
use App\Images;
use Validator;
use Auth;
use Redirect;
use Session;
use Carbon\Carbon;

class EventController extends Controller{

    public function index(){
        return view('home');
    }
    public function create(){
    	return view('admin.event.create');
    }
    public function store(Request $request){      
    	$validator = Validator::make($request->all(), [
            'description'   => 'required',
            'content'   	=> 'required'
        ]);
        if ($validator->passes()) {
            $Eventt = new Eventt;
            $Eventt->description = $request->description;
            $Eventt->content = $request->content;
            $Eventt->state = 1;
            $Eventt->created_by = Auth::user()->id;
            $Eventt->updated_by = Auth::user()->id;
            $Eventt->save();
            $event_id = $Eventt->id;
        }
        $files = $request->images;
        $file_count = count($files);
        $uploadcount = 0;
        foreach($files as $file) {
            $rules = array('file' => 'required|max:4092|mimes:png,gif,jpeg'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
            $validator = Validator::make(array('file'=> $file), $rules);
            if($validator->passes()){
                $destinationPath = 'images';
                $filename = $file->getClientOriginalName();
                $upload_success = $file->move($destinationPath, $filename);
                $uploadcount ++;

                $Images = new Images;
                $Images->description = $filename;
                $Images->route = '/images/'.$filename;
                $Images->state = 1;
                $Images->created_by = Auth::user()->id;
                $Images->save();
                $img_id = $Images->id;
                $Eventt = Eventt::find($event_id);
                $Eventt->Images()->attach([$img_id => ['state'=>1, 'created_by'=>Auth::user()->id,'updated_by'=>Auth::user()->id,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]]);
                // 
                //create a new signature
                // $signature = new Signature($values);
                // //save the new signature and attach it to the user
                // $user = User::find($id)->signatures()->save($signature);
                // // The opposite is possible too:

                // $user = User::find($user_id);
                // $signature = Signature::create($values)->users()->save($user);
                // // Alternatively if you have an existing signature you should do:

                // $user = User::find($id);
                // $user->signature()->attach($signature->id);
            }
        }
        if($uploadcount == $file_count){
            // Session::flash('success', 'Upload successfully'); 
            return Redirect::to('Eventos');
        } 
        else{
            return Redirect()->back()->withInput()->withErrors($validator);
        }
    }

    public function edit($id){
        $Eventt = Eventt::findOrFail($id);
        return view('admin.event.Edit',compact('Eventt'));
    }
    public function update($id, Request $request){
        $validator = Validator::make($request->all(), [
            'description'   => 'required',
            'content'       => 'required'
        ]);
        if ($validator->passes()){
            $Eventt = Eventt::findOrFail($id);
            $Eventt->description = $request->description;
            $Eventt->content = $request->content;
            $Eventt->state = 1;
            $Eventt->created_by = Auth::user()->id;
            $Eventt->updated_by = Auth::user()->id;
            $Eventt->save();
            
            $event_id = $Eventt->id;
        }
        $files = $request->images;
        $file_count = count($files);
        $uploadcount = 0;
        if($files){
            foreach($files as $file){
                $rules = array('file' => 'required|max:4092|mimes:png,gif,jpeg'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
                $validator = Validator::make(array('file'=> $file), $rules);
                if($validator->passes()){
                    $destinationPath = 'images';
                    $filename = $file->getClientOriginalName();
                    $upload_success = $file->move($destinationPath, $filename);
                    $uploadcount ++;

                    $Images = new Images;
                    $Images->description = $filename;
                    $Images->route = '/images/'.$filename;
                    $Images->state = 1;
                    $Images->created_by = Auth::user()->id;
                    $Images->save();
                    $img_id = $Images->id;
                    $Eventt = Eventt::find($event_id);
                    $Eventt->Images()->attach([$img_id => ['state'=>1, 'created_by'=>Auth::user()->id,'updated_by'=>Auth::user()->id,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]]);

                
                    //create a new signature
                    // $signature = new Signature($values);
                    // //save the new signature and attach it to the user
                    // $user = User::find($id)->signatures()->save($signature);
                    // // The opposite is possible too:

                    // $user = User::find($user_id);
                    // $signature = Signature::create($values)->users()->save($user);
                    // // Alternatively if you have an existing signature you should do:

                    // $user = User::find($id);
                    // $user->signature()->attach($signature->id);
                }else{
                    return redirect()->back()->with('error');
                }
            }
            return redirect()->back();
        }
    }
    
    public function delete($id){
        $Eventt = Eventt::destroy($id);
            return redirect('Eventos');
    }
    public function desactive($id){
        $Eventt = Eventt::findOrFail($id);
        $Eventt->state = 0;
        $Eventt->update();
        return redirect('Eventos');
    }
    public function active($id){
        $Eventt = Eventt::findOrFail($id);
        $Eventt->state = 1;
        $Eventt->update();
        return redirect('Eventos');
    }
}

