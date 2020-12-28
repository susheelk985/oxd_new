<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use APP\Models\oxd_users;
use APP\Models\oxd_orders;
use APP\Models\oxd_plans;
use DB;
class PlanController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

    public function change_plan($plans){
      if($plans==888002){
        view()->composer('inc/sidebar_fifty_percentage',function($view){
            $id=Auth::user()->id;
            $plans_Details=DB::table('oxd_users')
                     ->join('oxd_orders','oxd_orders.member_id','=','oxd_users.id')
                     ->join('oxd_plans','oxd_plans.id','=','oxd_orders.plan_id')
                     ->select('oxd_plans.id','oxd_plans.name')
                     ->where('oxd_users.id',$id)
                     ->get();
            $view->with('plans_Details',$plans_Details);
      });
        $id=Auth::user()->id;
        $userDetails=DB::table('oxd_users')
                   ->join('oxd_orders','oxd_orders.member_id','=','oxd_users.id')
                   ->join('oxd_plans','oxd_plans.id','=','oxd_orders.plan_id')
                   ->select('oxd_users.id','oxd_users.name as username','city','state','email','mobile','bank_name','branch_name','account_no','ifsc_code','pan_card_no','oxd_plans.name as planname','oxd_orders.created_at','oxd_orders.product_cost')
                   ->where('oxd_users.id',$id)
                   ->where('oxd_plans.id',888002)
                   ->get();

        $autopool = DB::table('oxd_users')
                  ->join('oxd_orders', 'oxd_orders.member_id', '=', 'oxd_users.id')
                  ->join('oxd_member_log','oxd_member_log.member_id','=','oxd_users.id')
                  ->where('oxd_orders.plan_id',888001)
                  ->where('oxd_users.id','>=',$id)
                  ->select('oxd_users.id','oxd_member_log.referral_id')
                  ->take(40)
                  ->get();


        return view('dashboard/dashboard_fifty_percentage')->with('data', $userDetails)->with('autopool', $autopool);
      }else if($plans==888001){
        view()->composer('inc/sidebar_autopool',function($view){
            $id=Auth::user()->id;
            $plans_Details=DB::table('oxd_users')
                     ->join('oxd_orders','oxd_orders.member_id','=','oxd_users.id')
                     ->join('oxd_plans','oxd_plans.id','=','oxd_orders.plan_id')
                     ->select('oxd_plans.id','oxd_plans.name')
                     ->where('oxd_users.id',$id)
                     ->get();
            $view->with('plans_Details',$plans_Details);
      });
        $id=Auth::user()->id;
        $userDetails=DB::table('oxd_users')
                   ->join('oxd_orders','oxd_orders.member_id','=','oxd_users.id')
                   ->join('oxd_plans','oxd_plans.id','=','oxd_orders.plan_id')
                   ->select('oxd_users.id','oxd_users.name as username','city','state','email','mobile','bank_name','branch_name','account_no','ifsc_code','pan_card_no','oxd_plans.name as planname','oxd_orders.created_at','oxd_orders.product_cost')
                   ->where('oxd_users.id',$id)
                   ->where('oxd_plans.id',888001)
                   ->get();

        $autopool = DB::table('oxd_users')
                  ->join('oxd_orders', 'oxd_orders.member_id', '=', 'oxd_users.id')
                  ->join('oxd_member_log','oxd_member_log.member_id','=','oxd_users.id')
                  ->where('oxd_orders.plan_id',888001)
                  ->where('oxd_users.id','>=',$id)
                  ->select('oxd_users.id','oxd_member_log.referral_id')
                  ->take(40)
                  ->get();


        return view('dashboard/dashboard_autopool')->with('data', $userDetails)->with('autopool', $autopool);
      }else{
        view()->composer('inc/sidebar',function($view){
          $id=Auth::user()->id;
          $plans_Details=DB::table('oxd_users')
                       ->join('oxd_orders','oxd_orders.member_id','=','oxd_users.id')
                       ->join('oxd_plans','oxd_plans.id','=','oxd_orders.plan_id')
                       ->select('oxd_plans.id','oxd_plans.name')
                       ->where('oxd_users.id',$id)
                       ->get();
          $view->with('plans_Details',$plans_Details);
        });
        $id=Auth::user()->id;
        $userDetails=DB::table('oxd_users')
                     ->join('oxd_orders','oxd_orders.member_id','=','oxd_users.id')
                     ->join('oxd_plans','oxd_plans.id','=','oxd_orders.plan_id')
                     ->select('oxd_users.id','oxd_users.name as username','city','state','email','mobile','bank_name','branch_name','account_no','ifsc_code','pan_card_no','oxd_plans.name as planname','oxd_orders.created_at','oxd_orders.product_cost')
                     ->where('oxd_users.id',$id)
                     ->get();

        $autopool = DB::table('oxd_users')
                    ->join('oxd_orders', 'oxd_orders.member_id', '=', 'oxd_users.id')
                    ->join('oxd_member_log','oxd_member_log.member_id','=','oxd_users.id')
                    ->where('oxd_orders.plan_id',888001)
                    ->where('oxd_users.id','>=',$id)
                    ->select('oxd_users.id','oxd_member_log.referral_id')
                    ->take(40)
                    ->get();


        return view('dashboard/dashboard_customer_template')->with('data', $userDetails)->with('autopool', $autopool)->with('error','Invaild Plan ID');

      }
    }


}
