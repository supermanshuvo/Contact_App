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
            return view('contact.login');
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
        $dataName = $request->input('name');
        $dataNumber = $request->input('number');
        // return $dataName.' '.$dataNumber;
        $data = Number::find($request->id);
        $data->NumberName = $dataName;
        $data->NumberNumber = $dataNumber;
        $data->save();
        if($validateData){
            return redirect('/')->with('success','You have successfully Update Contact');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
