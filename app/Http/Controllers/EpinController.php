<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\oxd_users;
use App\Models\oxd_orders;
use App\Models\oxd_member_log;
use App\Models\oxd_pinrequest;
use DB;
class EpinController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function epin(){

    view()->composer('inc/sidebar_autopool',function($view){
      $id=Auth::user()->id;
      $plan_Details=DB::table('oxd_users')
                    ->join('oxd_orders','oxd_orders.member_id','=','oxd_users.id')
                    ->join('oxd_plans','oxd_plans.id','=','oxd_orders.plan_id')
                    ->where('oxd_users.id',$id)
                    ->select('oxd_plans.id','oxd_plans.name')
                    ->get();
        $view->with('plans_Details',$plan_Details);
    });
    $id=Auth::user()->id;
    $plan_Details=DB::table('oxd_users')
                  ->join('oxd_orders','oxd_orders.member_id','=','oxd_users.id')
                  ->join('oxd_plans','oxd_plans.id','=','oxd_orders.plan_id')
                  ->where('oxd_users.id',$id)
                  ->select('oxd_plans.id','oxd_plans.name')
                  ->get();

    $EpinRequest = DB::table('oxd_users')
                   ->join('oxd_pinrequest','oxd_pinrequest.user_id','=','oxd_users.id')
                   ->join('oxd_plans','oxd_plans.id','=','oxd_pinrequest.plan_id')
                   ->where('oxd_users.id',$id)
                   ->select('oxd_pinrequest.request_id','user_id','deposit_amount','transaction_date','payment_options','imps_mobileno','transaction_no','oxd_pinrequest.created_at','admin_msg','remarks','oxd_pinrequest.status','oxd_plans.name')
                   ->get();
    return view('wallet/e_pin')->with('plans', $plan_Details)->with('epinreq', $EpinRequest);
  }

  public function epin_request(Request $request){
    $userID=Auth::user()->id;
    //Request E-pin
    $epinReq = new oxd_pinrequest;
    $epinReq->user_id = $userID;
    $epinReq->plan_id = $request->input('plan_name');
    $epinReq->deposit_amount = $request->input('depositAmount');
    $epinReq->transaction_date = $request->input('transaction_date');
    $epinReq->payment_options = $request->input('payment_options');
    $epinReq->imps_mobileno = $request->input('imps_mobile_no');
    $epinReq->transaction_no = $request->input('transaction_no');
    $epinReq->remarks = $request->input('remarks');
    $epinReq->save();
    return redirect('/dashboard')->with('success', 'E-PIN Request Successfully Created');
  }

}
