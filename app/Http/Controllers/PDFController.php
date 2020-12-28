<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\oxd_users;
use App\Models\oxd_orders;
use DB;
use Storage;
class PDFController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gen_InvoicePDF($id)
    {
      $regDetails = DB::table('oxd_users')
      ->select(['oxd_users.id','name','mobile','email','photo','address','city','state','country','pincode','account_no','ifsc_code','bank_name','branch_name','pan_card_no','password','oxd_users.created_at','oxd_orders.order_id','oxd_orders.product_cost','oxd_orders.product_id','oxd_orders.plan_id','oxd_orders.emi','oxd_orders.emi_amount','oxd_orders.down_payment','oxd_orders.inverstment','oxd_orders.payment_method','oxd_orders.created_at','oxd_products.products_name','oxd_product_category.category_name'])
      ->join('oxd_orders', 'oxd_orders.member_id', '=', 'oxd_users.id')
      ->join('oxd_products', 'oxd_products.products_id', '=', 'oxd_orders.product_id')
      ->join('oxd_product_category', 'oxd_product_category.category_id', '=', 'oxd_orders.category_id')
      ->where('oxd_orders.member_id', $id)
      ->get();
      foreach ($regDetails as $regD) {
        $name=$regD->name;
        $orderid=$regD->order_id;
        $mobile_NO=$regD->mobile;
        $email_ID=$regD->email;
        $address=$regD->address;
        $profileurl=$regD->photo;
        if($profileurl=='NULL'){
          $profileurl="profile-icon.png";
        }else{

        }
        $product_id=$regD->product_id;
        $plan_id=$regD->plan_id;
        $emi=$regD->emi;
        $emi_amount=$regD->emi_amount;
        $down_payment=$regD->down_payment;
        $inverstment=$regD->inverstment;
        $payment_method=$regD->payment_method;
        $price=$regD->product_cost;
        $product_name=$regD->products_name;
        $product_CategoryName=$regD->category_name;
        $datetime=$regD->created_at;


      }
      $timestamp = strtotime($datetime);
      $date = date('j-n-Y', $timestamp); // d-m-YYYY

        $data = [
            'title' => 'Test Laravel PDF',
            'date' => $date,
            'name' =>$name,
            'orderid' =>$orderid,
            'mobile' =>$mobile_NO,
            'email' =>$email_ID,
            'address' =>$address,
            'profileurl' =>$profileurl,
            'product_id' =>$product_id,
            'plan_id' =>$plan_id,
            'emi' =>$emi,
            'emi_amount' =>$emi_amount,
            'down_payment' =>$down_payment,
            'inverstment' =>$inverstment,
            'payment_method' =>$payment_method,
            'product_cost' =>$price,
            'product_name' =>$product_name,
            'product_CategoryName' =>$product_CategoryName,

        ];

        $pdf = PDF::loadView('/gen_invoice', $data);
        $pdf->setPaper('A4', 'portrait');
        return $pdf->download('OXD'.$orderid.'.pdf');
        //return view('myPDF')->with($data);
    }
}
