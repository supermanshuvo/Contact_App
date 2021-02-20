<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Number;

class EditController extends Controller
{
    public function index()
    {
        if(session()->has('UserName')){
            return redirect('/');
        }else{
            return redirect('/');
        }
    }
    public function edit($id)
    {
        $data = Number::find($id);
        if(session()->has('UserName')){
            if($data){
                return view('contact.edit',compact('data'));
            }
        }else{
            return view('contact.login');
        }        
    }
    public function update(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'number'=> 'required|regex:/([\+])?\d(01)?(\d[0-9])?([-])?/|max:16',
        ]);
        $data = Number::find($request->id);
        $data->NumberName = $request->name;
        $data->NumberNumber = $request->number;
        $data->save();
        if($validateData){
            return redirect('/')->with('success','You have successfully Update Contact');
        }
    }
}
