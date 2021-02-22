<?php

namespace App\Http\Controllers;

use App\Models\Number;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if(session()->has('UserName')){
            $validateData = $request->validate([
                'search' => 'required',
            ]);
            $userId = session('UserId');
            $search ='%'.$request->search.'%';
            $info = Number::where('userId','=',$userId)
                            ->where('NumberName','LIKE',$search)
                            ->orWhere('NumberNumber','LIKE',$search)->get();
            return $info;
        }else{
            return redirect('/');
        }
    }
}
