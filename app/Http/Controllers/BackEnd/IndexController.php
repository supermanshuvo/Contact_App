<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Number;

class IndexController extends Controller
{
    public function index()
    {
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
        return view('contact.login');
    }
}
