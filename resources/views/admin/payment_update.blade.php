@include('inc.header')
<link href="{{asset('storage/css/power.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('storage/css/responsive.css')}}" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<style style="text/css">
  .f30 {
      font-size: 25px;
  }

  .f14 {
      font-size: 14px;
  }

  .f13 {
      font-size: 13px;
  }
  /* breadcrumb */
.page-heading {
padding-top: 20px
}

.page-breadcrumb h1 {
margin: 0 0 22px;
color: #fff;
}

.breadcrumb_nav {
margin-bottom: 15px;
}

.breadcrumb_nav .breadcrumb {
margin: 0px;
padding: 0px;
background-color: transparent;
}

.breadcrumb_nav .breadcrumb li {
display: inline-block;
line-height: 1;
margin: 0px 3px;
color: #fff;
}

.breadcrumb_nav .breadcrumb li a {
color: #fff;
font-size: 14px;
text-shadow: none;
text-decoration: none;
margin: 0px 3px;
}

.breadcrumb_nav .breadcrumb li.active {

color:rgba(255, 255, 255, 0.49);
}
/* full_Section */
.container_full {
background: #eaeef3;
margin-top: 70px;
position: relative;
}

.container_full:before {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 139px;
content: '';
background: #2a3142;
}
.bg_red .container_full:after{
background:#FF394F;
}
.bg_red .badge_coun{
background: #FF394F;
}
.bg_green .container_full:after{
background:#09cb9a;
}
.bg_green .badge_coun{
background: #09cb9a;
}
.bg_orange .container_full:after{
background:#fb8639;
}
.bg_orange .badge_coun{
background: #fb8639;
}
.bg_purple .container_full:after{
background:#9372e8;
}
.bg_purple .badge_coun{
background: #9372e8;
}
.bg_blue .container_full:after{
background:#36a2f5;
}
.bg_blue_top:before{
background: #df3342;
/*background: #f25c1b;*/
/*background: #be6ed4;*/
/*background: #007bff;*/
}
/* Right_side */
.content_wrapper {
margin-left: 285px;
margin-right: 15px;
margin-top: 0;
min-height: 600px;
padding: 25px 0px 0px 0px;
/* background-color: #eaeef3; */
}

.nav_small .content_wrapper {
margin-left: 85px;
}

@media (max-width: 767px) {

.content_wrapper {
margin-left: 0;
padding-top: 10px;
}

.nav_small .content_wrapper {
margin-right: 0px;
}

.side_bar {
top: 61px;
margin-left: -270px;
transition: all 0.3s;
height: calc(100vh - 61px);
padding-top: 33px;
}

.mobile_nav .side_bar {
margin-left: 0;
}

.content_wrapper {
margin-left: 0;
margin-right: 0px;
transition: all 0.3s;
}

.mobile_nav .content_wrapper {
margin-right: -285px !important;
margin-left: 285px;
}

.min-h {
min-height: 0;
}
}
.content_wrapper {
margin-left: 0px;
margin-right: 0px;

}
.content_wrapper {
padding-top: 10px;
}
.card {
position: relative;
margin-top: 0px;
background-color: #ffffff;
border-radius: 3px;
}
.card_chart {
padding: 10px 24px 14px 24px;
position: relative;
}
.card {
border: 1px solid #e5e9ec;
}
.card .card-header .card-title {
margin-bottom: 0;
color: #53505f;
font-size: 18px;
font-weight: 500;
}
.lobicard-custom-icon>.card-header .dropdown,
.card-shadow .card-header .dropdown,
.lobicard-custom-control .card-header .dropdown {
display: inline-block;
float: right;
position: relative;
}

.lobicard-custom-icon>.card-header .dropdown .tools,
.card-shadow .card-header .dropdown .tools,
.lobicard-custom-control .card-header .dropdown .tools {
margin: 0px;
}
.lobicard-custom-control .card-header .dropdown .tools {
margin: 0px;
}

.lobicard-custom-control .card-header .dropdown .tools a {
color: #fff;
}
/*Labels*/
.label-default {
background-color: #777;
}

.label,
.jvectormap-tip {
padding: 3px 6px 3px;
font-size: 11px;
border-radius: 50px;
text-transform: capitalize;
font-weight: 400;
color: #fff;
}

.label.label-info,
.label-info.jvectormap-tip {
background: #ed1b60;
}

.label.label-primary,
.label-primary.jvectormap-tip {
background: #0092ee;
}

.label.label-success,
.label-success.jvectormap-tip {
background: #22af47;
}

.label.label-danger,
.label-danger.jvectormap-tip {
background: #f83f37;
}

.label.label-warning,
.label-warning.jvectormap-tip {
background: #ffbf36;
}

.label.text-warning,
.text-warning.jvectormap-tip {
background: #ffbf36;
color: #fff !important;
}

.label.label-outline,
.label-outline.jvectormap-tip {
background: transparent;
color: #727272;
border: 1px solid;
}

.label.label-outline.label-info,
.label-outline.label-info.jvectormap-tip {
border-color: #ed1b60;
}

.label.label-outline.label-primary,
.label-outline.label-primary.jvectormap-tip {
border-color: #0092ee;
}

.label.label-outline.label-success,
.label-outline.label-success.jvectormap-tip {
border-color: #22af47;
}

.label.label-outline.label-danger,
.label-outline.label-danger.jvectormap-tip {
border-color: #f83f37;
}

.label.label-outline.label-warning,
.label-outline.label-warning.jvectormap-tip {
border-color: #ffbf36;
}

.weight-300 {
font-weight: 300 !important;
}

.weight-500 {
font-weight: 500 !important;
}

.weight-600 {
font-weight: 600 !important;
}
.card .card-header {
padding: 1rem;
border-bottom: 1px solid #e5e9ec;
background: #fff;
}.card .card-header .card-title {
margin-bottom: 0;
color: #53505f;
font-size: 18px;
font-weight: 500;
}

.lobicard-custom-icon>.card-header .dropdown,
.card-shadow .card-header .dropdown,
.lobicard-custom-control .card-header .dropdown {
display: inline-block;
float: right;
position: relative;
}

.lobicard-custom-icon>.card-header .dropdown .tools,
.card-shadow .card-header .dropdown .tools,
.lobicard-custom-control .card-header .dropdown .tools {
margin: 0px;
}
.card .card-header .card-title {
margin-bottom: 0;
color: #53505f;
font-size: 18px;
font-weight: 500;
}
.panel-content,
.panel-social {
position: relative;
border-radius: 0 0 4px 4px
}

.panel-content {
border-top: 1px solid #eee;
padding: 31px 20px 33px
}
.panel-about table {
width: 100%;
word-break: break-word
}

.panel-about table tr+tr td,
.panel-about table tr+tr th {
padding-top: 8px
}

.panel-about table th {
min-width: 120px;
/*color: #2bb3c0;*/
color: #0a71b4;
font-weight: 400;
vertical-align: top
}

.panel-about table th>i {
min-width: 14px;
margin-right: 8px;
text-align: center
}

.panel-social {
padding: 0 20px 33px;
z-index: 0
}

.panel-heading+.panel-social {
padding-top: 21px;
border-top: 1px solid #eee
}

.panel-social>.nav {
-ms-flex-pack: center;
-webkit-box-pack: center;
justify-content: center
}

.panel-social>.nav>li:not(:last-child) {
margin-right: 20px
}



.panel-activity__status>.actions {
display: -ms-flexbox;
display: -webkit-box;
display: flex;
padding: 10px 20px;
background-color: #ebebea;
border-style: solid;
border-width: 0 1px 1px;
border-color: #ccc;
border-bottom-left-radius: 4px;
border-bottom-right-radius: 4px;
}
.card-body .dropdown .dropdown-menu {
left: 0 !important;
right: auto !important;
}

.card-body .dropdown .dropdown-menu:before,
.btn-group .dropdown-menu:before {
display: none !important;
}
.panel-title {
float: left;
margin-top: 3px;
margin-bottom: 3px;
font-size: 14px;
line-height: 24px;
font-weight: 700;
text-transform: uppercase
}

.panel-title select {
border-width: 0;
background-color: transparent;
text-transform: uppercase
}

.panel-title select option {
text-transform: capitalize
}

.panel-title .select2 {
display: block;
min-width: 200px
}

.panel-title .select2-selection {
height: auto;
padding: 0;
background-color: transparent;
border-width: 0;
border-radius: 0;
overflow: hidden;
white-space: nowrap
}

.no-outlines .panel-title .select2-selection {
outline: 0
}

.panel-title .select2-selection .select2-selection__rendered {
float: left;
margin-right: 8px;
padding: 0;
line-height: inherit
}

.panel-title .select2-selection .select2-selection__arrow {
float: left;
display: block;
position: relative;
top: auto;
right: auto;
width: auto;
height: auto
}

.panel-title .select2-selection .select2-selection__arrow:before {
content: "\f107";
font-family: "Font Awesome\ 5 Free";
font-weight: 700
}

.panel-title .select2-container--open .select2-selection__arrow:before {
content: "\f106"
}

.panel-heading .dropdown {
float: right
}

.panel-heading .dropdown .dropdown-toggle {
margin: -10px -20px;
padding: 10px 20px;
color: #999;
border-width: 0;
font-size: 14px;
line-height: 30px;
cursor: pointer
}

.panel-heading .dropdown .dropdown-toggle:after,
.toolbar__nav>li>a>span {
display: none
}

.panel-heading .dropdown-menu {
top: 30px !important;
left: auto !important;
right: -20px;
margin: 0;
padding: 10px 0;
border-width: 0;
border-radius: 4px 0 0 4px;
box-shadow: 0 1px 5px rgba(0, 0, 0, .08);
-webkit-transform: none !important;
transform: none !important;
z-index: 1001
}

.panel-heading .dropdown-menu a {
padding: 5px 15px;
color: #999;
font-size: 13px;
line-height: 23px
}

.panel-heading .dropdown-menu a:hover {
color: #e16123
}

.panel-heading .dropdown-menu i {
min-width: 15px;
margin-right: 6px;
font-size: 11px;
text-align: center
}

.panel-subtitle {
margin: 20px 0
}

.panel-subtitle:first-child {
margin-top: 0
}

.panel-subtitle .h5 {
color: #999;
font-weight: 600
}

.panel-subtitle .h5 small {
color: #777
}

.panel-body {
padding: 20px
}

.panel-content,
.panel-social {
position: relative;
border-radius: 0 0 4px 4px
}

.panel-content {
border-top: 1px solid #eee;
padding: 31px 20px 33px
}

.panel-about table {
width: 100%;
word-break: break-word
}

.panel-about table tr+tr td,
.panel-about table tr+tr th {
padding-top: 8px
}

.panel-about table th {
min-width: 120px;
/*color: #2bb3c0;*/
color: #0a71b4;
font-weight: 400;
vertical-align: top
}

.panel-about table th>i {
min-width: 14px;
margin-right: 8px;
text-align: center
}

.panel-social {
padding: 0 20px 33px;
z-index: 0
}

.panel-heading+.panel-social {
padding-top: 21px;
border-top: 1px solid #eee
}

.panel-social>.nav {
-ms-flex-pack: center;
-webkit-box-pack: center;
justify-content: center
}

.panel-social>.nav>li:not(:last-child) {
margin-right: 20px
}



.panel-activity__status>.actions {
display: -ms-flexbox;
display: -webkit-box;
display: flex;
padding: 10px 20px;
background-color: #ebebea;
border-style: solid;
border-width: 0 1px 1px;
border-color: #ccc;
border-bottom-left-radius: 4px;
border-bottom-right-radius: 4px;
}

.btn-link {
display: inline-block;
color: inherit;
font-weight: inherit;
cursor: pointer;
}

button.btn-link {
border-width: 0;
}

.panel-activity__status>.actions>.btn-group>.btn-link:not(:last-child) {
margin-right: 25px;
}

.panel-activity__status>.actions>.btn-group>.btn-link {
padding-left: 0;
padding-right: 0;
color: #9c9c9c;
}

.btn-info {
background-color: #2bb3c0;
border: none;
}

.btn-group,
.btn-group-vertical {
position: relative;
display: -ms-inline-flexbox;
display: inline-flex;
vertical-align: middle;
}

.panel-activity__status>.actions>.btn-group {
-ms-flex: 1;
-webkit-box-flex: 1;
flex: 1;
font-size: 16px;
}

.panel-activity__list {
margin: 60px 0 0;
padding: 0;
list-style: none;
}

.panel-activity__list,
.panel-activity__list>li {
position: relative;
z-index: 0;
}

.panel-activity__list:before {
content: " ";
display: none;
position: absolute;
top: 20px;
left: 35px;
bottom: 0;
border-left: 2px solid #ebebea;
}

.activity__list__icon {
display: none;
position: absolute;
top: 2px;
left: 0;
min-width: 30px;
color: #fff;
background-color: #2bb3c0;
border-radius: 50%;
line-height: 30px;
text-align: center;
}

.panel-activity__list,
.panel-activity__list>li {
position: relative;
z-index: 0;
}
td{
  font-family:Tahoma;font-size:10pt;
}
th{
  text-align: center;
  vertical-align: middle;
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #4CAF50;
  color: white;
}
tr{
  text-align: center;
}
</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
@include('inc.topbar')

  <!-- Left side column. contains the logo and sidebar -->

@include('inc.sidebar')
  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
    <div class="row">
        @include('inc.messages')
      </div>
      <div class="container_full bg_blue_top">
        <div class="content_wrapper">
            <div class="container-fluid">
                <!-- breadcrumb -->
                <div class="page-heading">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-6">
                            <div class="page-breadcrumb" style="color:white;">
                                <h1>Payment Details Autopool</h1>
                                @foreach ($paymentUsers as $date)

                                <?php $date=$date['date']; ?>
                                @endforeach
                                {{date('F', strtotime($date))}} {{date('Y', strtotime($date))}}
                              </center><br>
                              <p>{{date("d-m-Y", strtotime($date))}}</p>
                            </div>
                        </div>

                    </div>
                </div>
                <table id="customers">
                  <tr>
                    <th>SL.NO</th>
                    <th>User ID</th>
                    <th>Order ID</th>
                    <th>Name</th>
                    <th>Account No</th>
                    <th>IFSC Code</th>
                    <th>Bank</th>
                    <th>Branch Name</th>
                    <th>Amount</th>
                    <th>Actions</th>


                  </tr>
                  <?php $elsemsg ='<td rowspan="10">No payment records found!</td>' ?>
                  @forelse ($paymentUsers  as $index => $pdu)
                  <?php

                     $start=date('Y-m-d',strtotime($pdu['updat']));
                    $days=dateDiffInDays($start, $date);

                   ?>

                   @if(($pdu['crtat']!=$pdu['updat']) && $days>14)
                    <tr>

                        <td>{{$index+1}}</td>
                        <td class="usrid">OUI{{sprintf("%08d",$pdu['userID'])}}</td>
                        <td class="ordid">OOI{{sprintf("%08d",$pdu['orderID'])}}</td>
                        <td>{{$pdu['name']}}</td>
                        <td>{{$pdu['accno']}}</td>
                        <td>{{$pdu['ifsc']}}</td>
                        <td>{{$pdu['bname']}}</td>
                        <td>{{$pdu['nbranch']}}</td>
                        <td class="amt">{{$pdu['amount']}}</td>
                        <td><button type="button" id=""  class="btn btn-primary use-address" data-toggle="modal" data-target="#PaymentUpdate" data-whatever="@mdo">Update</button></td>
                    </tr>
                  @elseif(($pdu['crtat']==$pdu['updat']) && $days>29)
                  <tr>

                      <td>{{$index+1}}</td>
                      <td class="usrid">OUI{{sprintf("%08d",$pdu['userID'])}}</td>
                      <td class="ordid">OOI{{sprintf("%08d",$pdu['orderID'])}}</td>
                      <td>{{$pdu['name']}}</td>
                      <td>{{$pdu['accno']}}</td>
                      <td>{{$pdu['ifsc']}}</td>
                      <td>{{$pdu['bname']}}</td>
                      <td>{{$pdu['nbranch']}}</td>
                      <td class="amt">{{$pdu['amount']}}</td>
                      <td><button type="button" id="" class="btn btn-primary use-address" data-toggle="modal" data-target="#PaymentUpdate" data-whatever="@mdo">Update</button></td>

                  </tr>
                  @elseif($days>14)
                  <tr>

                      <td>{{$index+1}}</td>
                      <td class="usrid">OUI{{sprintf("%08d",$pdu['userID'])}}</td>
                      <td class="ordid">OOI{{sprintf("%08d",$pdu['orderID'])}}</td>
                      <td>{{$pdu['name']}}</td>
                      <td>{{$pdu['accno']}}</td>
                      <td>{{$pdu['ifsc']}}</td>
                      <td>{{$pdu['bname']}}</td>
                      <td>{{$pdu['nbranch']}}</td>
                      <td class="amt">{{$pdu['amount']}}</td>
                      <td><button type="button" id="" class="btn btn-primary use-address" data-toggle="modal" data-target="#PaymentUpdate" data-whatever="@mdo">Update</button></td>

                  </tr>

                  @endif

                  @empty
                  <tr>
                    <td colspan="10">No payment records found!</td>
                  </tr>


                  @endforelse

                  <?php function dateDiffInDays($start, $date)
                  {
                    // Calculating the difference in timestamps
                    $diff = strtotime($date) - strtotime($start);

                    // 1 day = 24 hours
                    // 24 * 60 * 60 = 86400 seconds
                    return abs(round($diff / 86400));
                  } ?>
                </table>
             </div>
          </div>
      </div>
    </div>
    <div class="modal fade" id="PaymentUpdate" tabindex="-1" role="dialog" aria-labelledby="PaymentUpdateLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="PaymentUpdateLabel">Payment Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="tru$datee">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" name="cusreg" id="OrderForm" action="{{url('/payment_details/payment_upd')}}" method="post" enctype="multipart/form-data">
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
          <input type="hidden" name="data_userID" id="data_userID">
          <input type="hidden" name="data_orderID" id="data_orderID">

          <div class="form-group">
            <label for="message-text" class="col-form-label">Payment Date</label>
            <input type="date" name="payment_date" class="form-control" value="{{$date}}">
            <label for="message-text" class="col-form-label">Amount</label>
            <input type="text" name="payment_amount" id="payment_amount" class="form-control" value="">
          </div>
          <center><button type="submit" class="btn btn-primary">Confirm</button></center>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
  <script type="text/javascript">
  $('#PaymentUpdate').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)

  })
'id'
  $(".use-address").click(function() {
    var $row = $(this).closest("tr");    // Find the row
    var $userid = $row.find(".usrid").text(); // Find the text
        $userid = getnumber($userid);
    var $orderid = $row.find(".ordid").text(); // Find the text
        $orderid = getnumber($orderid);
    var $paymentamt = $row.find(".amt").text(); // Find the text
      document.getElementById('payment_amount').value=$paymentamt;
      document.getElementById('data_userID').value=$userid;
      document.getElementById('data_orderID').value=$orderid;
    // Let's test it out
  //  alert($orderid);
});
  function getnumber($num){
    $num = $num.split(/(\d+)/);
    $num = $num[1];
    $num = $num.replace(/^0+/, '');
    return $num;

  }
  if (document.getElementById('customers').rows.length == 1) {
    $('#customers').find('tbody').append("<tr ><td colspan='10'>No payment records found!</td></tr>");

}
  </script>
    @include('inc.footer')
</div>
