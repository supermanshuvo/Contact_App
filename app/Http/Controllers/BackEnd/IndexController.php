<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Number;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        if(session()->has('UserName')){
            $data =Number::where('userId','=',session('UserId'))->get();
            return view('contact.index',['numbers'=>$data]);
        }else{
            return view('contact.login');
        }
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
