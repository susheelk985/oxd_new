<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  App\Models\oxd_users;
use  App\Models\oxd_orders;
use  App\Models\oxd_member_log;
use Illuminate\Support\Facades\Hash;
use DB;
use Storage;
class MemberController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(){
    return view('member/view_members');
  }
  public function login_customer_view(){
    //$data['members']=$this->Parent();
		return view('member/view_members',[]);
	}

  public function Parent(){


  			$id=Auth::user()->id;

       $getChildMember=DB::table('oxd_member_log')->where('referral_id',$id)->get();

   		$arr=[];

  		foreach($getChildMember as $row){///level 2
            $NetSaleVolume3=DB::table('oxd_orders')->where('member_id',$id)->where('plan_id',888001)->select('product_cost')->pluck('product_cost')->first();

  					$arr[] = [
  						 'ibo' => $row->name.' ['.$row->id.']',
  						 'imgUrl' => $this->MemberPictureUrl($id),
   						'bv' => $NetSaleVolume3,
   						'children' => $this->Children($row->id),
   					 ];
  		}
  		  $NetSaleVolume1=DB::table('oxd_orders')->where('member_id',$id)->where('plan_id',888001)->select('product_cost')->pluck('product_cost')->first();
        		$json = [
                  'ibo' => $this->memberName($id).' ['.$this->memberID($id).']',
  					     'imgUrl' => $this->MemberPictureUrl($id),
  					      'bv' => $NetSaleVolume1,
  					      'children' => $arr
  				];

   //count($json['ibo']);
  		//return json_encode([$json]);
  		return json_encode([$json]);

  		//exit();


  	}

    public function Children($id){

    		$getChildMember=DB::table('oxd_member_log')->where('referral_id',$id)->get();

   		$arr=[];

  		foreach($getChildMember as $row){///level 2
            $NetSaleVolume3=DB::table('oxd_orders')->where('member_id',$id)->where('plan_id',888001)->select('product_cost')->pluck('product_cost')->first();
  					$arr[] = [

  						 'ibo' => $row->name.' ['.$row->id.']',
  						 'imgUrl' => $this->MemberPictureUrl($id),
   						 'bv' => $NetSaleVolume3,
   						 'children' => $this->Children($row->id),
   					 ];
  		}
   		return $arr;
   	}

    public function memberName($id){
      return $users_name=DB::table('oxd_users')->where('id',$id)->select('name')->pluck('name')->first();
    }

    public function memberID($id){
      return $users_name=DB::table('oxd_users')->where('id',$id)->select('id')->pluck('id')->first();
    }


  public function MemberPictureUrl($id){
      $PictureUrl=DB::table('oxd_users')->where('id',$id)->select('photo')->pluck('photo')->first();
      if($PictureUrl!='NULL'){
        return $MemberPictureUrl= asset('storage/profile/'.$PictureUrl);
           }else{
          return $MemberPictureUrl= asset('storage/profile/profile-icon.png');
       }
    }

 public function genealogy_view(){
      view()->composer('inc/sidebar_autopool',function($view){
          $id=Auth::user()->id;
          $plans_Details=DB::table('oxd_users')
                        ->join('oxd_orders','oxd_orders.member_id','=','oxd_users.id')
                        ->join('oxd_plans','oxd_plans.id','=','oxd_orders.plan_id')
                        ->select('oxd_plans.id','oxd_plans.name')
                        ->where('oxd_users.id','=',$id)
                        ->get();
          $view->with('plans_Details',$plans_Details);

      });
    	   $id=Auth::user()->id;
         $userData=DB::table('oxd_users')
         ->join('oxd_orders', 'oxd_orders.member_id', '=', 'oxd_users.id')
         ->join('oxd_member_log','oxd_member_log.member_id','=','oxd_users.id')
         ->where('oxd_orders.plan_id',888001)
         ->where('oxd_users.id','>=',$id)
         ->select('photo','oxd_users.name','oxd_users.id','oxd_member_log.referral_id')
         ->take(40)
         ->get();
         if($userData->isEmpty()){
           return redirect()->back()->with('error', 'Genealogy view is not found in this plan!');
         }
         return view('member/genealogy_view',['data' => $userData]);

       }





}
