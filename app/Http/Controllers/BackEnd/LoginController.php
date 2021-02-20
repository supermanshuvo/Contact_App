<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Contact;
use App\Models\Number;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session()->has('UserName')){
            return redirect('/');
        }else{
            return view('contact.register');
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
                /* $data = Contact::where([
                    ['email','=',$request->email],
                    ['password','=',Hash::check($request->password, $user->password)]
                ]); */
                // $data = $request->session()->put('user',$user);
                // $data = $request->session()->put('user',$user);
                // return redirect('/');
                $userName = $user->ContactName;
                $userId = $user->id;
                // return $user['id'] .' '.$user['name'];
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
