<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Contact;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!(session()->has('UserName'))){
            return view('contact.register');
        }else{
            return redirect('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email'=> 'required|email|unique:App\Models\Contact,ContactEmail',
            'number'=> 'required|regex:/([\+])?\d(01)?(\d[0-9])?([-])?/|max:16',
            'password'=> 'required|min:6|max:16',
            'confirm_password'=> 'same:password',
        ]);
        
        $contact = new Contact;   
        $contact->ContactName=$request->name;
        $contact->ContactEmail=$request->email;
        $contact->ContactNumber=$request->number;
        $contact->password=Hash::make($request->password);
        $query = $contact->save();
        
        if($validateData){
            return redirect('login')->with('success','You have successfully registered');
        }else{
            return view('contact.register');
        }
    }
}
