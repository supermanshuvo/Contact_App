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
    public function search(Request $request)
    {
        if(session()->has('UserName')){
            $validateData = $request->validate([
                'search' => 'required',
            ]);

            $data = '%'.$request->search.'%';
            // $data = $request->input('search');
/* 
            $info = DB::table('numbers')->where('NumberNumber','LIKE',$data)->orWhere('NumberName','LIKE',$data)
                            ->where(function ($query) {
                                 $query->where('userId','=',session('UserId'));
                            })
                            ->get(); */
            $info =DB::table('numbers')->where('userId','=',session('UserId'))->where('NumberNumber','LIKE',$data)->orWhere('NumberName','LIKE',$data)->get();
/* 
            $info = DB::table('numbers')->where('userId','=',session('UserId'))
                            ->when($data, function ($query, $data) {
                                return $query->where('NumberNumber','LIKE',$data)->orWhere('NumberName','LIKE',$data);
                            })
                            ->get(); */
            return $info;

            /* $role = $request->input('role');

            $ifo = DB::table('users')
                ->when($role, function ($query, $role) {
                    return $query->where('role_id', $role);
                })
                ->get(); */


            
            /* $sql = "SELECT * FROM contact.numbers WHERE userId = 3 AND (numbers.NumberName LIKE '".$data."' OR numbers.NumberNumber LIKE '".$data."');";
            $info = DB::raw($sql);
            return $info; */
            // dd($sql);
            // $info = DB::raw($sql);
            /* $info = DB::table('numbers')
           ->where('userId', '=', session('UserId'))
           ->where(function ($query) {
               $query->where('NumberNumber',"LIKE",$GLOBALS['data'])
                     ->orWhere('NumberName',"LIKE",$GLOBALS['data']);
           })
           ->get(); */


            /* $info = DB::table('numbers')->where('userId','=',session('UserId'))->where('NumberNumber','LIKE',$data)->orWhere('NumberName',"LIKE",$data)->get();
 */
                /* $test = DB::table('numbers')->where('userId',session('UserId'))->where("NumberName","LIKE '",$data,"'")->orWhere("NumberNumber","LIKE '",$data,"'");
 */
            // $info = DB::table('numbers')->where('userId',session('UserId'))->orwhere('NumberNumber','LIKE','%',$data,'%')->orWhere('NumberName','%',$data,'%')->get();





                /* print_r($test);
                die(); */
            return $info;
            
            
            
            
            
            
            
            /* 
            $data =DB::table('numbers')->where('NumberNumber','Like','%', $request->search,'%')->get();
            // return view('contact.index',['numbers'=>$data]);
            if($data){
                return $data;
            }else{
                return "not";
            } */
        }else{
            return redirect('/');
        }
    }
}
