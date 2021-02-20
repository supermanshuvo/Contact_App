<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Contact;
use App\Models\Number;

class LoginController extends Controller
{
    public function index()
    {
        if(session()->has('UserName')){
            return redirect('/');
        }else{
            return view('contact.login');
        }
    }
    
    public function authenticate(Request $request)
    {
        $validateData = $request->validate([
            'email'=> 'required|email',
            'password'=> 'required|min:6|max:16',
        ]);
        $user = Contact::where('ContactEmail','=', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $userName = $user->ContactName;
                $userId = $user->id;
                $request->session()->put('UserName',$userName);
                $request->session()->put('UserId',$userId);
                return redirect('/');
            }else{
                return redirect('login')->with('fail','Invalid Password try again!');    
            }
        }else{
            return redirect('login')->with('fail','No Account found in this email try again!');
        }
    }
}
