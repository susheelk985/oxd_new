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
  return view('wallet/e_wallet')->with('wdata', $membersData);


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
