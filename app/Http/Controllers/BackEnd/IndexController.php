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
        if(session()->has('user')){
            $user = Contact::where('id','=', session('user'))->first();
            $Info = [
                'user'=> $user
            ];
        }
        $data =Number::all();
        return view('contact.index',['numbers'=>$data],$Info);
    }

    public function delete($id)
    {
        $delete = Number::find($id);
        $delete->delete();
        return redirect('/')->with('delete','You have successfully Delete Contact');
    }
    
    public function destroy()
    {
        return view('contact.login');
    }
}
