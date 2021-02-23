<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Number;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if(session()->has('UserName')){
            $validateData = $request->validate([
                'search' => 'required|min:3',
            ]);
            $userId = session('UserId');
            $search ='%'.$request->search.'%';
            $info = Number::where('userId','=',$userId)
                            ->where('NumberName','LIKE',$search)
                            ->orWhere('NumberNumber','LIKE',$search)->get();
            
            return view('contact.search',['numbers'=>$info]);
        }else{
            return redirect('/');
        }
    }
}
