<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\oxd_plans;
use App\Models\oxd_users;
use DB;
use Validator;
use Redirect;
class LoginController extends Controller
{

  public function loginPage()
  {
    return view('auth/login');
  }

  public function login(Request $request)
  {
    $validator = Validator::make($request->all(), [
        'mobile' => 'required',
        'id' => 'required',
        'password' => 'required',

    ]);
    if(Auth::attempt(['mobile' => $request->mobile,'id'=>$request->id, 'password' => $request->password])){
          $user = Auth::user();


         return Redirect::to('dashboard');
      }
      else{
          $msg='Mobile number,User ID or Password is incorrect!';

          return Redirect::back()->withErrors([$msg]);
      }
  }



}
