<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use Validator;
use Auth;

class QuestionController extends Controller{

	public function index(){
		$Question = Question::all();
        return view('Joyeria');
    }
    public function create(){
        return view('admin.question.create');
    }
    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'question'      => 'required',
            'answer'        => 'required'
            ]);

        if ($validator->passes()) {
                $Question = new Question;
                $Question->question = $request->question;
                $Question->answer = $request->answer;
                $Question->state = 1;
                $Question->created_by = Auth::user()->id;
                $Question->updated_by = Auth::user()->id;
                $Question->save();

                return redirect('NoviosAdm');
            }
        // return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function delete($id){
        $Question = Question::destroy($id);
            return redirect('NoviosAdm');
    }
    public function desactive($id){
        $Question = Question::findOrFail($id);
        $Question->state = 0;
        $Question->update();
        return redirect('NoviosAdm');
    }
    public function active($id){
        $Question = Question::findOrFail($id);
        $Question->state = 1;
        $Question->update();
        return redirect('NoviosAdm');
    }
    public function edit($id){
        $Question = Question::findOrFail($id);
        return view('admin.question.edit',compact('Question'));
    }
    public function update($id,Request $request){
        $validator = Validator::make($request->all(), [
            'question'      => 'required',
            'answer'        => 'required'
        ]);

        $Question = Question::findOrFail($request->id);
        if ($validator->passes()) {
            $Question->question = $request->question;
            $Question->answer = $Request->answer;
            $Question->state = 1;
            $Question->updated_by = Auth::user()->id;
            $Question->update();

            return redirect('NoviosAdm');
            
        }
        // return response()->json(['error'=>$validator->errors()->all()]);
    }
}