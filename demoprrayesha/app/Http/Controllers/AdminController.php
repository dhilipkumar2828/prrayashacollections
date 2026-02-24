<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Order;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
class AdminController extends Controller
{
    
    use AuthenticatesUsers {

        logout as performLogout;
    
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    function __construct()
    {
         @$this->userid=Auth::user()->id;
         @$this->username=Auth::user()->name;
    }
    public function admin(Request $request)
    {
        date_default_timezone_set('Asia/Kolkata');
        $current_user=Auth::user()->id;
        $customer=DB::table('users')->where('id',$current_user)->where('status','active')->first();
        @$user=(Auth::user()->roles[0]->id == 1 ) ?['1',$this->userid] : [$this->userid];
        $orders = Order::orderBy('id','DESC')->limit('7')->get();
       if(isset($customer)){
        return view('backend.index',compact('orders','user'));
        }else{
            $this->performLogout($request);
    
            return redirect()->route('admin');
        }
    }
}
