<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\oxd_users;
use App\Models\oxd_orders;
use App\Models\oxd_member_log;
use App\Models\oxd_pinrequest;
use App\Models\oxd_payments;
use DB;
use PDF;
class AdminController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function e_pin_requests(){

    $EpinRequest = DB::table('oxd_users')
                   ->join('oxd_pinrequest','oxd_pinrequest.user_id','=','oxd_users.id')
                   ->join('oxd_plans','oxd_plans.id','=','oxd_pinrequest.plan_id')
                   ->select('oxd_users.id','oxd_users.name as username','oxd_users.mobile','oxd_pinrequest.request_id','user_id','deposit_amount','transaction_date','payment_options','imps_mobileno','transaction_no','oxd_pinrequest.created_at','admin_msg','remarks','oxd_pinrequest.status','oxd_plans.name')
                   ->get();
    return view('admin/e_pin_request')->with('epinreq', $EpinRequest);
  }

  public function epin_approve(Request $request){
    DB::update('update oxd_pinrequest set admin_msg = ? ,status = ? where request_id = ?',[$request->input('admin_msg'),1,$request->input('requestid')]);

    $EpinRequest = DB::table('oxd_users')
                   ->join('oxd_pinrequest','oxd_pinrequest.user_id','=','oxd_users.id')
                   ->join('oxd_plans','oxd_plans.id','=','oxd_pinrequest.plan_id')
                   ->select('oxd_users.id','oxd_users.name as username','oxd_users.mobile','oxd_pinrequest.request_id','user_id','deposit_amount','transaction_date','payment_options','imps_mobileno','transaction_no','oxd_pinrequest.created_at','admin_msg','remarks','oxd_pinrequest.status','oxd_plans.name')
                   ->get();


    return view('admin/e_pin_request')->with('success', 'Request Approved Successfully')->with('epinreq', $EpinRequest);
  }

  public function mothly_payment_export(){
    return view('admin/csv_export');
  }
  public function get_monthly_payment(Request $request){
      $date=$request->input('export_date');
      $plan_ID=$request->input('plan_id');
      $year=date('Y', strtotime($date));
      //$month=date('F', strtotime($date));
      $month=date("m", strtotime($date));

      $paymentUsers=DB::table('oxd_users')
                     ->join('oxd_orders','oxd_orders.member_id','=','oxd_users.id')
                     ->leftjoin('oxd_payments','oxd_payments.order_id','=','oxd_orders.id')
                     ->where('oxd_orders.plan_id','=',$plan_ID)
                     ->whereBetween('oxd_orders.updated_at',['updated_at',$date])
                     ->select('oxd_users.id','oxd_orders.id as orderid','oxd_users.name','oxd_users.account_no','oxd_users.ifsc_code','oxd_users.bank_name','oxd_users.branch_name','oxd_orders.updated_at','oxd_orders.created_at','oxd_payments.amount')
                     ->get();
    $arr=[];
      foreach ($paymentUsers as $key => $row) {
        $arr[] = [
                          'userID' => $row->id,
                          'orderID' => $row->orderid,
                          'name'  => $row->name,
                          'accno'  => $row->account_no,
                          'ifsc'  => $row->ifsc_code,
                          'bname'  => $row->bank_name,
                          'nbranch'  => $row->branch_name,
                          'updat'  => $row->updated_at,
                          'crtat'  => $row->created_at,
                          'preAmount' => $row->amount,
                          'amount' =>$this->walletAmount($row->id)-$row->amount,
                          'date'  => $date,



                ];

      }

      //  return view('admin/monthly_paymentPDF')->with('paymentUsers', $arr);
     view()->share('paymentUsers',$arr);
     $pdf = PDF::loadView('admin/monthly_paymentPDF', $arr);
     $pdf->setPaper('A4', 'portrait');
     return $pdf->download('Payment'.date("d-m-Y", strtotime($date)).'.pdf');
  }

  public function walletAmount($id){
    $getChildMember=DB::table('oxd_member_log')
                   ->where('referral_id','=',$id)
                   ->get();

     $arr=[];
     foreach($getChildMember as $row){///level 2


           $arr[] = [
              'name' => $row->name,
              'id' => $row->member_id,

             'children' => $this->Children($row->member_id),
           ];
     }

     $json[] = [
           'name' => $this->memberName($id),
           'id' => $this->memberID($id),

         'children' => $arr,
   ];

   //$data[]=$json;

   $members = array();
   foreach ($json as $key => $row) {
     $members[] = array('name' => $row["name"],
       'id'  => $row["id"],

       );
     //$d1[]=$row["name"];
     $data=$row["children"];
     foreach ($data as $key => $value) {
       $members[] = array('name' => $value["name"],
         'id'  => $value["id"],

         );

      $data2=$value["children"];
      foreach ($data2 as $key => $value) {
        $members[] = array('name' => $value["name"],
          'id'  => $value["id"],

          );
      }
     }

   }
   $membersData = array();
   foreach ($members as $key => $value) {
     $refID=DB::table('oxd_member_log')
                 ->where('member_id','=',$value["id"])
                 ->select('referral_id')
                 ->pluck('referral_id')
                 ->first();

      $membersData[] = array('name' => $value["name"],
        'id'  => $value["id"],
        'referral_id'  =>$refID ,

      );

   }

  $count=0;
  foreach ($membersData as $key => $wallet) {
    if(($wallet["referral_id"]==$id)&&$count<=9){
      $count++;
  }

  }

  $autoAmount=0.00;

  // echo '<script type="text/javascript">alert("' . count($autopool) . '")</script>';
  if((count($membersData)>3)&&(count($membersData)<12)){
    $autoAmount=3000;
  }else if((count($membersData)>11)&&(count($membersData)<40)){
    $autoAmount=9000;
  }else if(count($membersData)==40){
    $autoAmount=50000;
  }else{
    $autoAmount=$autoAmount;
  }
  $DRAmount=$count*1000;
  $toatalAmount=$autoAmount+$DRAmount;
  $c=$toatalAmount/2;
  return $c;

}

  public function current_paymentDetails(){
    $date=date("Y/m/d");
    $day=date('d',strtotime($date));
    $month=date('m',strtotime($date));
    $year=date('Y',strtotime($date));
    if($day<16){
      $date=$year.'-'.$month.'-'.'1';
    }else if($day>15){
      $date=$year.'-'.$month.'-'.'16';
    }
    $year=date('Y', strtotime($date));
    //$month=date('F', strtotime($date));
    $month=date("m", strtotime($date));

    $paymentUsers=DB::table('oxd_users')
                   ->join('oxd_orders','oxd_orders.member_id','=','oxd_users.id')
                   ->leftjoin('oxd_payments','oxd_payments.user_id','=','oxd_users.id')
                   ->where('oxd_orders.plan_id','=',888001)
                   ->whereBetween('oxd_orders.updated_at',['updated_at',$date])
                   ->select('oxd_users.id','oxd_orders.id as orderid','oxd_users.name','oxd_users.account_no','oxd_users.ifsc_code','oxd_users.bank_name','oxd_users.branch_name','oxd_orders.updated_at','oxd_orders.created_at','oxd_payments.amount')
                   ->get();
  $arr=[];
    foreach ($paymentUsers as $key => $row) {
      $arr[] = [
                        'userID' => $row->id,
                        'orderID' => $row->orderid,
                        'name'  => $row->name,
                        'accno'  => $row->account_no,
                        'ifsc'  => $row->ifsc_code,
                        'bname'  => $row->bank_name,
                        'nbranch'  => $row->branch_name,
                        'updat'  => $row->updated_at,
                        'crtat'  => $row->created_at,
                        'amount' =>$this->walletAmount($row->id)-$row->amount,
                        'date'  => $date,

              ];

    }
    //echo json_encode($arr);
    return view('admin/payment_update')->with('paymentUsers', $arr);
  }

  public function update_payment(Request $request){

    $updpayment = new oxd_payments;
    $updpayment->user_id = $request->input('data_userID');
    $updpayment->order_id = $request->input('data_orderID');
    $updpayment->amount = $request->input('payment_amount');
    $updpayment->date = $request->input('payment_date');
    $updpayment->save();

    DB::update('update oxd_orders set updated_at = ?  where id = ?',[$request->input('payment_date'),$request->input('data_orderID')]);
    return $this->current_paymentDetails();
  }

  public function Children($id){

     $getChildMember=DB::table('oxd_member_log')->where('referral_id',$id)->get();

     $arr=[];

   foreach($getChildMember as $row){///level 2

         $arr[] = [

            'name' => $row->name,
            'id' => $row->member_id,

              'children' => $this->Children($row->member_id),
            ];
   }
     return $arr;
   }

   public function memberName($id){
     return DB::table('oxd_users')->where('id',$id)->select('name')->pluck('name')->first();
   }

   public function memberID($id){
     return DB::table('oxd_users')->where('id',$id)->select('id')->pluck('id')->first();
   }

}
