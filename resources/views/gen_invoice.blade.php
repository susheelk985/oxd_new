<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">



	<title>Receipt</title>
	<style>
	body{
		font-size: 14px;


	}
	.receiptbg{
		background-image:url("https://ester.store/storage/images/Receiptb.png");
		height: 85%;
		width: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
	}
		.invoice_no{
			float: right;
		}
		.recp{
			font-size: 13px;
		}
		.heading{
			font-size: 29px;
		}
		#left {
		 width: 350px;
		 padding-left: 135px;
		 float: left;
	 }
	 #right {
		 margin-left: 535px;
		 /* Change this to whatever the width of your left column is*/
	 }
	 .clear {
		 clear: both;
	 }
	 table, th, td {
  	border: 0px solid black;
		border-collapse: collapse;
	}
	th{
	/*	background-color: #df3342; */
		color: white;
	}
	td{
		text-align: center;
	}
	.first-box {
  width:300px;
  float:left;
  height: 100px;
  margin: 5px;
	/*border: 1px solid black; */
	border-collapse: collapse;
	border-radius: 15px;
}



.second-box {
  width:300px;
  height: 100px;
  float:right;
  margin: 5px;
	/*border: 1px solid black; */
	border-collapse: collapse;
	border-radius: 15px;
}
/* Dotted red border */
hr.new3 {
border-top: 2px dotted black;
}

.fake-legend {
  height: 15px;
  width:100%;
  border-bottom: solid 5px #df3342;
  text-align: center;
  margin: 2em 0;
}
.fake-legend span {
  background: #fff;
  position: relative;
  top: 0;
  padding: 0 20px;
  line-height:30px;
}
* {
  box-sizing: border-box;
}

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
  height: 150px; /* Should be removed. Only for demonstration */
}

.left, .right {
  width: 23%;
}

.middle {
  width: 47%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.div1 {
  width: 100px;
  height: 30px;
	margin-left: 20px;
}
.div2 {
  width:125px;
  height: 30px;
  margin: 5px;
	border: 1px solid black;
	border-collapse: collapse;
	border-radius: 15px;
}

.page-break {
    page-break-after: always;
}
	h1{
		color: #df3342;
	}
	.foo{
		background-color: #df3342;
		color: white;
		text-align: center;
		font-size: 11px;
		padding-top: 5px;
		padding-bottom: 5px;
	}
	.col
{
		padding-left: 181px;
    float: left;
    width: 0px;
}

.last{
    float: right;
    width: 17%;
}
.row{

    height: auto;
    overflow: auto;
}
.chb{
	zoom:2;
}
span {
    content: "\2713";
}
	</style>
</head>
<body>

	<img src="http://ester.store/storage/images/receipt_header.png"  width="100%">
<div class="receiptbg">
	<span style="line-height: 1.7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $date }}</span><span style="line-height: 1.7" class="invoice_no">&nbsp;OXD{{ $orderid }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br>
	<br><br>
	<div id="container">
		<div id="left"><br>
			<span style="line-height: 2.3">{{$name}}</span>
			<br>
			<span style="line-height: 2.0">{{$mobile}}</span>
			<br>
			<span style="line-height: 1.8">{{$email}}</span>
			<br>
			<address style="line-height: 2.0">{{$address}}</address>
		</div>
		<div id="right"><br>
				<img src="{{'http://ester.store/storage/profile/'.$profileurl}}" alt="profile_img" style="width: 150px; height: 181px;">

		</div>
	</div>
	<br><br><br><br>
	<div class="row">
    <span class="col">&nbsp;&nbsp;&nbsp;{{$product_cost}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$down_payment}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$inverstment}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$emi_amount}}*{{$emi}}</span>
</div>
<br><br><br><br>
<div>
		<div class="first-box">
			<p style="line-height: 2.6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product Name:&nbsp;&nbsp;&nbsp;{{$product_name}}</p>
			<p style="line-height: 0.1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product Category Name:&nbsp;&nbsp;&nbsp;</p>
			<p style="line-height: 0.3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$product_CategoryName}}</p>
  	</div>
  	<div class="second-box">
			<p style="line-height: 2.4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$inverstment}}</p>
			<p style="line-height: 0.0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$payment_method}}</p>
  	</div>

	</div>
	<br><br><br><br><br><br><br>
	<div style="padding-left: 219px;">I Agree to the Terms & Conditions Policy of the Company</div><br>
	<div style="padding-left: 579px;">
			<span style="line-height: 1.9">{{$name}}</span>
	</div>
	<br><br><br>
	<span style="line-height: 1.0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $date }}</span><span style="line-height: 0.9" class="invoice_no">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OXD{{ $orderid }}</span>
	<div class="row">
  	<div class="column left">
			<br><br><br><br><br><br>
			<?php if($payment_method=='Cash'){echo "<div style='font-family: DejaVu Sans, sans-serif; font-size: 15px;'>&nbsp;&nbsp;&nbsp;&nbsp;✔</div>";} ?><br>

			<?php if($payment_method=='Cheque'){echo "<div style='font-family: DejaVu Sans, sans-serif; font-size: 15px; line-height: 1.7;'>&nbsp;&nbsp;&nbsp;&nbsp;✔</div>";} ?><br>

			<?php if($payment_method=='BHIM / UPI'){echo "<div style='font-family: DejaVu Sans, sans-serif; font-size: 15px; line-height: 2.1;'>&nbsp;&nbsp;&nbsp;&nbsp;✔</div>";} ?><br>



  	</div>
  	<div class="column middle">
			<span style="line-height: 2.6; padding-top: 30px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$name}}</span><br>
			<span style="line-height: 2.0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$inverstment}}</span><br>
			<span style="line-height: 2.0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oxydyser</span><br><br>
			<span>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br><br>
  	</div>
  	<div class="column right"><br>
			<span style="line-height: 2.0; text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$inverstment}}</span>
    	<br><br><br><br><br><br>
			<div class="div1">
				<center><span style="line-height: 3.5; ">{{$name}}</span><center>
    	</div>


  	</div>
	</div>

</div>


	<div class="page-break"></div>
	<img src="http://ester.store/storage/images/receipt_header.png" width="100%"><br>
		<h1 align="center">FEATURES, TERMS AND CONDITIONS</h1>
		<ol style="font-size: 19px;">
  		<li>Users must comply with all the rules and regulation governing any other
					network accessed through OXYDYSER.</li>
  		<li>The company reserves the right to modify the services offered or the terms
of service. The changes will be notified to the customer through a notification.</li>
  		<li>A sales contract is deemed as entered into from the receipt of the amount
payable according to the confirmation of the order to the bank account of seller

or after the contract for payment by installments has been signed. The seller
shall not process order confirmation that have not been paid for.</li>
<li>If you do not give us the personal information that we require, then we may not
be able to approve your application for related products.</li>
<li>Complaints concerning the application provided by the company can be
submitted to customer support.</li>
<li>If an account is terminated by either party, OXYDYSER may delete user’s
personal files. All publically viewable materials are subjected to editing and/or

deletion by OXYDYSER.</li>
<li>User is himself responsible for the procurement and keeps up to all the
necessities of the user. For any equipment, do contact OXYDYSER.</li>
<li>We always deal with your personal information consistently with our privacy
obligation and we are committed to resolving any issues that you may wish to
raise.</li>
<li>Payment of referred and advantage earnings would be done to your loan linked

a/c before your loan due date (PLAN-A).</li>
<li>Every member has to bring two members under him/her to get autopool
advantage if he/she wants to repay their respective EMI faster (PLAN-A).</li>
<li>Delay for getting product from showrooms/shops is not company culpability
though we may recommend them to fasten up the delivery process (PLAN-A).</li>
<li>If the customer deliberately avoids watching the advertisements regularly, the

EMI will be bounced automatically (PLAN-A).</li>
<li>OXYDYSER assures repayment of your principle amount in any adversity
occurring in due course of EMI repayment. However company expects faster
sales from your side to get rid of your EMI by using this platform (PLAN-A).</li>
<li>Company helps the customers to ease their EMI for the products purchased
with our reference (PLAN-A).</li>
		</ol>
		<div class="foo">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Website:www.oxydyser.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: mail@oxydyser.com
	</div>
	<div class="page-break"></div>
	<img src="http://ester.store/storage/images/receipt_header.png" width="100%">
	<ol style="font-size: 19px;" start="15">

<li>The customer should keep the agreement until the EMI is closed (PLAN-A).</li>
<li>A member of our company has to compulsorily get 3 directs under him/her
(PLAN-B).</li>
<li>Each member should complete the 3rd level to get the product they require
(PLAN-B).</li>
<li>Each member can bring up to 12 directs (PLAN-B).</li>
<li>Refunds are not applicable since the customer has already got the product

(PLAN-B).</li>
<li>Any product purchased by the costumer at OXYDYSER is not company’s
responsibility, since company has no direct ownership over the product.</li>
<li>All the products purchased are from their own respective brand /shops.</li>
<li>Company will consider refunding the amount paid to us if and only if there is
an undisputed genuine fault from the company’s side.</li>
<li>Company has rights to discontinue any clients if found any illegal embezzle
against company’s policy (or wrong publicity of the company).</li>
<li>User must be at least 18 years of age. If user is less than 18, this agreement
must be signed by a parent or legal guardian, who will be held responsible for
all account .</li>
<li>The purchaser has to keep the purchase documents that verify the purchase
of the goods for the resolution of possible later problems. The seller/customer
service assistance has the right to not resolve the problem if a purchase
document is missing.</li>
<li>The seller shall ensure the protection of the purchaser’s data, including their
personal data, and the use of the data in line with the procedure prescribed by
the terms of the privacy policy.</li>
<li>All claims arising out of anything related to these terms or the service will be
governed by Indian law; all legal issues will be handled at Kerala Court.</li>
<li>The password given by OXYDYSER must be replaced by a password of the
customer/other stakeholder’s choice at the time of first log-in.</li>
<li>If the customer has to change their respective personal details and Bank
details they must raise a valuable reason.</li>
<li>The purchaser should confirm that they read and agreed to the terms of the
privacy policy.</li>
	</ol>
	<br><br><br><br><br><br><br><br><br>
	<div class="foo">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Website:www.oxydyser.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: mail@oxydyser.com
	</div>
</body>
</html>
