<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Number;

class IndexController extends Controller
{
    public function index()
    {
        // if(session()->has('UserName')){
        //     $user = Contact::where('id','=', session('user'))->first();
        //     $Info = [
        //         'user'=> $user,
        //     ];
        // }
        // $data =Number::all()->where('userId','=','1')->first();
        $data =Number::all();
        return view('contact.index',['numbers'=>$data]);
    }

    public function delete($id)
    {
        $delete = Number::find($id);
        $delete->delete();
        return redirect('/')->with('delete','You have successfully Delete Contact');
    }
    
    public function destroy()
    {
        if(session()->has('UserName')){
            session()->pull('UserName');
            session()->pull('UserId');
        }
        return redirect('/login');
    }
}
