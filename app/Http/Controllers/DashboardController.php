<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use  App\Models\Customer_Registration;
use  App\Models\oxd_users;
use  App\Models\oxd_orders;
use  App\Models\oxd_member_log;
use  App\Models\oxd_payments;
use Illuminate\Support\Facades\Hash;
use DB;
use Storage;
class DashboardController extends Controller
{


  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
{

  if(Auth::user()->role=='Admin'){

    $id=Auth::user()->id;
    return view('dashboard/dashboard_admin_template');

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


                 $getChildMember=DB::table('oxd_member_log')
                                ->where('referral_id','=',$id)
                                ->get();

                  $arr=[];
                  foreach($getChildMember as $row){///level 2


                        $arr[] = [
                           'name' => $row->name,
                           'id' => $row->member_id,
                           'imgUrl' => $this->MemberPictureUrl($id),
                          'children' => $this->Children($row->member_id),
                        ];
                  }

                  $json[] = [
                        'name' => $this->memberName($id),
                        'id' => $this->memberID($id),
                        'imgUrl' => $this->MemberPictureUrl($id),
                      'children' => $arr,
                ];

                //$data[]=$json;

                $members = array();
                foreach ($json as $key => $row) {
                  $members[] = array('name' => $row["name"],
                    'id'  => $row["id"],
                    'imgurl'  => $row["imgUrl"],
                    );
                  //$d1[]=$row["name"];
                  $data=$row["children"];
                  foreach ($data as $key => $value) {
                    $members[] = array('name' => $value["name"],
                      'id'  => $value["id"],
                      'imgurl'  => $value["imgUrl"],
                      );

                   $data2=$value["children"];
                   foreach ($data2 as $key => $value) {
                     $members[] = array('name' => $value["name"],
                       'id'  => $value["id"],
                       'imgurl'  => $value["imgUrl"],
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
                     'imgurl'  => $value["imgurl"],
                   );

                }



               }


    $total_recAmount = DB::table('oxd_users')
                      ->join('oxd_orders', 'oxd_orders.member_id', '=', 'oxd_users.id')
                      ->leftjoin('oxd_payments','oxd_payments.user_id','=','oxd_users.id')
                      ->where('oxd_orders.plan_id',888001)
                      ->where('oxd_users.id','=',$id)
                      ->select('oxd_payments.amount')
                      ->get();
    $receivedAmount=0.0;
    foreach ($total_recAmount as $key => $recamount) {
      $receivedAmount=$receivedAmount+$recamount->amount;
    }
    return view('dashboard/dashboard_customer_template')->with('data', $userDetails)->with('autopool', $membersData)->with('recamount', $receivedAmount);
    //$this->parser->parse('dashboard/dashboard_customer_template',$data);
  }



public function plans($id){

echo 'test'.$id;

}

public function Parent(){


		 $id=Auth::user()->id;

     $getChildMember=DB::table('oxd_member_log')->where('referral_id',$id)->get();

 		$arr=[];

		foreach($getChildMember as $row){///level 2
            $NetSaleVolume3=DB::table('oxd_orders')->where('member_id',$id)->select('product_cost')->pluck('product_cost')->first();

					$arr[] = [
						 'ibo' => $row->name.' ['.$row->id.']',

						 'imgUrl' => $this->MemberPictureUrl($id),
 						'bv' => $NetSaleVolume3,
 						'children' => $this->Children($row->id),
 					 ];
		}
		$NetSaleVolume1=DB::table('oxd_orders')->where('member_id',$id)->get();
    foreach ($NetSaleVolume1 as $row) {
     $NetSaleVolume1= $row->product_cost;
    }

		$json = [	'ibo' => $this->memberName($id).' ['.$this->memberID($id).']',
					'imgUrl' => $this->MemberPictureUrl($id),
					'bv' => $NetSaleVolume1,
					'children' => $arr
				];

 //count($json['ibo']);
		return ($json['ibo']);
    //json_encode([$json]);
		//exit();


	}


  public function Children($id){

     $getChildMember=DB::table('oxd_member_log')->where('referral_id',$id)->get();

     $arr=[];

   foreach($getChildMember as $row){///level 2

         $arr[] = [

            'name' => $row->name,
            'id' => $row->member_id,
            'imgUrl' => $this->MemberPictureUrl($id),
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



  public function MemberPictureUrl($id){
     $PictureUrl=DB::table('oxd_users')->where('id',$id)->select('photo')->pluck('photo')->first();
     if($PictureUrl!='NULL'){
       return $MemberPictureUrl= asset('storage/profile/'.$PictureUrl);
          }else{
         return $MemberPictureUrl= asset('storage/profile/profile-icon.png');
      }
   }
}
