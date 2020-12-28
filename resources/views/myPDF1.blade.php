<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">



	<title>Receipt</title>
	<style>
	body{
		font-size: 21px;
	}
		.invoice_no{
			float: right;
		}
		.heading{
			font-size: 29px;
		}
		#left {
		 width: 115px;
		 float: left;
	 }
	 #right {
		 margin-left: 500px;
		 float: right;
		 /* Change this to whatever the width of your left column is*/
	 }
	 #center{
		 margin-left: 900px;
	 }
	 .clear {
		 clear: both;
	 }

	</style>
</head>
<body>
	<img src="{{ asset('storage/images/receipt_header.png') }}"><br>
	<span>Date: {{ $date }}</span><span class="invoice_no">Invoice No: OXD{{ $orderid }}</span><br>
	<p align="center" class="heading">Customer Details</p><br>
	<div id="container">
		<div id="left">
			<span>Name:</span><br><br>
			<span>Contact No:</span><br><br>
			<span>Email ID:</span><br><br>
			<span>Address:</span><br><br>
		</div>
		<div class="center">
			<span>{{$name}}</span><br><br>
			<span>{{$mobile}}</span><br><br>
			<span>{{$email}}</span><br><br>
			<span>{{$address}}</span><br><br>
		</div>
		<div id="right">
			<br>
			<img src="{{ asset("storage/profile/".$profileurl) }}" alt="" style="width: 150px; height: 150px;">

		</div>
	</div>
</body>
</html>
