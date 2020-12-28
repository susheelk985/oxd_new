<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\oxd_users;
use App\Models\oxd_orders;
use App\Models\oxd_member_log;
use DB;
class WalletController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function wallet(){
    view()->composer('inc/sidebar_autopool',function($view){
        $id = Auth::user()->id;
        $plan_Details = DB::table('oxd_users')
                      ->join('oxd_orders','oxd_orders.member_id','=','oxd_users.id')
                      ->join('oxd_plans','oxd_plans.id','=','oxd_orders.plan_id')
                      ->select('oxd_plans.id','oxd_plans.name')
                      ->where('oxd_users.id',$id)
                      ->get();
        $view->with('plans_Details',$plan_Details);

    });
    $id=Auth::user()->id;
    $walletData=DB::table('oxd_users')
                ->join('oxd_orders','oxd_orders.member_id','=','oxd_users.id')
                ->join('oxd_member_log','oxd_member_log.member_id','=','oxd_users.id')
                ->where('oxd_orders.plan_id','=',888001)
                ->where('oxd_users.id','>=',$id)
                ->take(40)
                ->select('oxd_users.id','oxd_orders.payment_method','oxd_member_log.referral_id')
                ->get();

    return view('wallet/e_wallet')->with('wdata', $walletData);
  }
}
