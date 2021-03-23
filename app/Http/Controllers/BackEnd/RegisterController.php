<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Contact;

class RegisterController extends Controller
{
    public function index()
    {
        if(session()->has('UserName')){
            return redirect('/');
        }else{
            return view('contact.register');
        }
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email'=> 'required|email|unique:App\Models\Contact,ContactEmail',
            'number'=> 'required|regex:/\+?(88)?0?1[3456789][0-9]{8}\b/|max:16',
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
