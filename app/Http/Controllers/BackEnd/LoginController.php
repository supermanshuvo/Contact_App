<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Contact;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact.login');
    }
    
    public function authenticate(Request $request)
    {
        $validateData = $request->validate([
            'email'=> 'required|email',
            'password'=> 'required|min:6|max:16',
        ]);
        $user = Contact::where('email','=', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                
            }else{
                return redirect('login')->with('fail','Invalid Password try again!');    
            }
        }else{
            return redirect('login')->with('fail','No Account found in this email try again!');
        }
    }
}
