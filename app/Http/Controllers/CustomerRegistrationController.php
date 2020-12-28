<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Customer_Registration;
use  App\Models\oxd_users;
use  App\Models\oxd_orders;
use  App\Models\oxd_member_log;
use  App\Models\oxd_products;
use  App\Models\oxd_product_category;
use Illuminate\Support\Facades\Hash;
use DB;
use Storage;
class CustomerRegistrationController extends Controller
{
  public function index()
  {

      $plans = Customer_Registration::all();
      $productsAP = oxd_products::all()->where('products_planid',888001);
      $productsTT = oxd_products::all()->where('products_planid',888002);
      $product_categoryBike = oxd_product_category::select('category_id','category_name')->where('category_product_id', 1)->get();
      $product_categoryCar = oxd_product_category::select('category_id','category_name')->where('category_product_id', 2)->get();
      $product_categoryTT = oxd_product_category::select('category_id','category_name')->where('category_product_id', 3)->get();
      return view('customer_registration')->with('data',['plans' => $plans, 'productsAP' => $productsAP,'productsTT' => $productsTT, 'product_categoryBike' => $product_categoryBike, 'product_categoryCar' => $product_categoryCar, 'product_categoryTT' => $product_categoryTT]);
  }

  public function Customer_reg(Request $request){
    //$plans = Customer_Registration::all();
    //return view('customer_registration')->with('plans', $plans);
    $this->validate($request,[
        /*  'plan' => 'required',
          'products_id' => 'required',
          'category_id' => 'required',
          'emi_months' => 'required',
          'emi_amount' => 'required',
          'downpayment' => 'required',
          'inverstment' => 'required',
          'product_cost' => 'required',
          'cname' => 'required',
          'mobile' => 'required',
          'email'=>'required|email',
          'address' => 'required',
          'city' => 'required',
          'state' => 'required',
          'pincode' => 'required',
          'accno' => 'required',
          'ifsc_code' => 'required',
          'bank_name' => 'required',
          'bank_branch' => 'required',
          'pan_number' => 'required',
          'payment_method' => 'required',
          'reference_member_id' => 'required',
*/        'Cus_Name' => 'required',
          'profile_img' =>'image|nullable|max:1999',
        ]);
        if($request->input('member_ID')==''){

            // Handle file upload
            if($request->hasFile('profile_img')){
              // Get Filename with the extension
              $filenameWithExt = $request->file('profile_img')->getClientOriginalName();
              // Get just filename
              $filename =pathinfo($filenameWithExt, PATHINFO_FILENAME);
              // Get just ext
              $extension = $request->file('profile_img')->getClientOriginalExtension();
              //Filename to store5564564561
              $fileNameToStore=$filename .'_'.time().'.'.$extension;
              // Upload image
              $path = $request->file('profile_img')->storeAs('public/profile', $fileNameToStore);
            }
              //Register customer
              $reg = new oxd_users;
              $reg->name = $request->input('cname');
              $reg->email = $request->input('email');
              $reg->mobile = $request->input('mobile');
              $reg->role = 'Customer';
              $reg->status = '0';
              $reg->photo = 'NULL';
              $reg->address = $request->input('address');
              $reg->city = $request->input('city');
              $reg->state = $request->input('state');
              $reg->country = 'INDIA';
              $reg->pincode = $request->input('pincode');
              $reg->account_no = $request->input('accno');
              $reg->ifsc_code = $request->input('ifsc_code');
              $reg->bank_name = $request->input('bank_name');
              $reg->branch_name = $request->input('bank_branch');
              $reg->pan_card_no = $request->input('pan_number');
              $reg->password = Hash::make($request->input('mobile'));
              if($request->hasFile('profile_img')){
                if($reg->photo!=='profile-icon.jpg'){
                  Storage::delete('public/profile/'.$reg->photo);
                }

                $reg->photo = $fileNameToStore;

              }
                $reg->save();
                $member_id=$reg->id;
                //data to oxd_orders
                $ord = new oxd_orders;
                $ord->order_id = '0'.$member_id.time();
                $ord->member_id = $member_id;
                $ord->member_name = $request->input('Cus_Name');
                $ord->product_cost = $request->input('product_cost');
                $ord->product_id = $request->input('products_id');
                $ord->category_id = $request->input('category_id');
                $ord->plan_id = $request->input('plan');
                $ord->emi = $request->input('emi_months');
                $ord->emi_amount = $request->input('emi_amount');
                $ord->down_payment = $request->input('downpayment');
                $ord->inverstment = $request->input('inverstment');
                $ord->payment_method = $request->input('payment_method');
                $ord->save();

                //data to oxd_member_log
                $mem= new oxd_member_log;
                $mem->member_id = $member_id;
                $mem->name = $request->input('cname');
                $mem->referral_id =$request->input('reference_member_id');
                $mem->save();
                return redirect('/')->with('success', 'Successfully Registered.  Download your invoice now, <a href="'.  url('gen_invoice/down/'.$member_id). '"> click here  </a>');
              }else{
                $user_details = DB::table('oxd_users')->join('oxd_orders','oxd_orders.member_id', '=','oxd_users.id')->where('oxd_users.id',$request->input('member_ID'))->where('oxd_orders.plan_id', $request->input('plan'))->get();
                if($user_details->isEmpty()){
                  $user = oxd_users::find($request->input('member_ID'));
                  $user->address = $request->input('address');
                  $user->city = $request->input('city');
                  $user->state = $request->input('state');
                  $user->pincode = $request->input('pincode');
                  $user->save();
                  $member_id=$user->id;
                  //data to oxd_orders
                  $ord = new oxd_orders;
                  $ord->order_id = '0'.$member_id.time();
                  $ord->member_id = $member_id;
                  $ord->member_name = $request->input('Cus_Name');
                  $ord->product_cost = $request->input('product_cost');
                  $ord->product_id = $request->input('products_id');
                  $ord->category_id = $request->input('category_id');
                  $ord->plan_id = $request->input('plan');
                  $ord->emi = $request->input('emi_months');
                  $ord->emi_amount = $request->input('emi_amount');
                  $ord->down_payment = $request->input('downpayment');
                  $ord->inverstment = $request->input('inverstment');
                  $ord->payment_method = $request->input('payment_method');
                  $ord->save();

                  //data to oxd_member_log
                  $mem= new oxd_member_log;
                  $mem->member_id = $member_id;
                  $mem->name = $request->input('Cus_Name');
                  $mem->referral_id =$request->input('member_ID');
                  $mem->save();
                  return redirect('/')->with('success', 'Successfully Registered.  Download your invoice now, <a href="'.  url('gen_invoice/down/'.$member_id). '"> click here  </a>');
                }else{
                  return redirect('/customer_registration')->with('error', 'You are already a member in this plan!');
                }
              }
            }

  public function get_member_details(){
    $userid=$_GET['mid'];
    $planid=$_GET['pid'];
    //$user_id= oxd_users::find($id);
    //$user_details = DB::table('oxd_users')->where('id',$userid)->get();
    $user_details = DB::table('oxd_users')->join('oxd_orders','oxd_orders.member_id', '=','oxd_users.id')->where('oxd_users.id',$userid)->where('oxd_orders.plan_id', $planid)->get();
    foreach ($user_details as $row) {
     echo $row->name;
    }
    //$user_details_data['data'] = $user_details;
    //echo json_encode($user_details_data);
    //exit;

  }
  public function get_member_alldetails(){
    $userid=$_GET['mid'];
    $planid=$_GET['pid'];
    //$user_id= oxd_users::find($id);
    //$user_details = DB::table('oxd_users')->where('id',$userid)->get();
    $user_details = [];
    $user_details = DB::table('oxd_users')->join('oxd_orders','oxd_orders.member_id', '=','oxd_users.id')->where('oxd_users.id',$userid)->where('oxd_orders.plan_id', $planid)->get();
    return response()->json($user_details);
    //$user_details_data['data'] = $user_details;
    //echo json_encode($user_details_data);
    //exit;

  }

}
