<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\oxd_plans;
use App\Models\oxd_users;
use DB;
class LoginController extends Controller
{

    public function index(){
      $plans = DB::table('oxd_plans')->get();
        return view(('auth.login'),compact('plans',$plans));
        //return View::make('auth/login')->with('plans', $plans);
        //  return view('auth.login', ['plans' => $plans]);
    }
    public function login(Request $request){
    /*  $mobile=$request->input('mobile');
      $password=$request->input('password');
      $plan=$request->input('plan');
      $user = DB::table('oxd_users')
              ->where('mobile',$mobile)
              ->where('password',$password)
              ->get();
            //  echo $user;
*/
  
    return view('dashboard/dashboard_admin_template');

    }

}
