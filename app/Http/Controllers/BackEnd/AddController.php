<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Number;

class AddController extends Controller
{
    public function index()
    { 
        if(session()->has('UserName')){
            return view('contact.add');
        }else{
            return view('contact.login');
        }
    }

    public function store(Request $request)
    {
        // return $request->input();
        $dataName = $request->input('name');
        $dataNumber = $request->input('number');
        // return $dataName.' '.$dataNumber;
        $duplicate = Number::where([])->first();
        /* $duplicate =Number::where([
            ['userId','=',session('UserId')],
            []
        ])->get();
        if($duplicate){
            return 'duplicate';
        }else{
         return 'not found';   
        } */
        // dd($duplicate);
        /* if($duplicate){
            return redirect('add')->with('fail','Number Already add ');
        }else{
            return view('contact.login');
        }
        $validateData = $request->validate([
            'name' => 'required',
            'number'=> 'required|regex:/([\+])?\d(01)?(\d[0-9])?([-])?/|max:16|unique:App\Models\Number,NumberNumber',
        ]);
        $number = new Number;
        $number->NumberName = $request->name;
        $number->NumberNumber = $request->number;
        $number->userId = session('UserId');
        $query = $number->save();
        if($validateData){
            return redirect('add')->with('success','You have successfully Add New Contact');
        } */
    }
}
