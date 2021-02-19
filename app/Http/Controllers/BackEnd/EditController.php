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
            return view('contact.edit');
        }else{
            return view('contact.login');
        }
    }
    public function edit($id)
    {
        $data = Number::find($id);
        return view('contact.edit',compact('data'));
    }
    public function update(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'number'=> 'required|regex:/(01)[0-9]{9}/|max:16',
        ]);
        $data = Number::find($request->id);
        $data->name = $request->name;
        $data->number = $request->number;
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
