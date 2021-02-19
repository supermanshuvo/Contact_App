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
    }
}
