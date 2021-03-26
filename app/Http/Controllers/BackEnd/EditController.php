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
            'number'=> 'required|regex:/\+?(88)?0?1[3456789][0-9]{8}\b/|max:14',
        ]);
        $dataName = $request->input('name');
        $dataNumber = $request->input('number');
        $duplicate = Number::where([
            ['userId','=',session('UserId')],
            ['NumberName','=',$dataName],
            ['NumberNumber','=',$dataNumber]
        ])->first();
        $duplicateNumber = Number::where([
            ['userId','=',session('UserId')],
            ['NumberNumber','=',$dataNumber]
        ])->first();
        if($duplicate){
            return redirect('/')->with('sameNumber','Contact Already add!');
        }elseif($duplicateNumber){
            return redirect('/')->with('sameNumber','Number Already add!');
        }else{
            $data = Number::find($request->id);
            $data->NumberName = $request->name;
            $data->NumberNumber = $request->number;
            $data->save();
            if($validateData){
                return redirect('/')->with('success','You have successfully Update Contact');
            }
        }
    }
}
