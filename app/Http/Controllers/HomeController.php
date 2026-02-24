<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Redirect;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        //return view('backend.index');
        return redirect()->route(auth());
    }
    
    public function change_password(Request $request){
        return view('backend.change_password');
    }
    
    
     public function update_password(Request $request){
         if($request->confirm_password != $request->new_password){
            Session::put('error','Password not matches');
            return redirect()->back();
         }
         
         $user=Auth::user();
         if(!empty($user)){
             $user_table=User::where('id',$user->id)->first();
             if(\Hash::check($request->old_password,$user_table->password)){
                $result= User::where('id',$user->id)->update(['password'=>Hash::make($request->new_password)]);
                  Session::put('success',' Password changed successfully'); 
             }else{
                Session::put('error','Incorrect old Password'); 
             }
         }
        return view('backend.change_password');
    }
}
