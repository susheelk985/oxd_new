@include('inc.header')
<link href="{{asset('storage/css/power.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('storage/css/responsive.css')}}" rel="stylesheet" type="text/css">
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
</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
@include('inc.topbar')

  <!-- Left side column. contains the logo and sidebar -->

@include('inc.sidebar_autopool')
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
                            <div class="page-breadcrumb">
                                <h1>Pin Request</h1>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- breadcrumb_End -->


                <div class=" col-xl-8">
                    <div class="card card-shadow mb-4">

                        <div class="card-body">
                          <form role="form" name="frm_pin_request" id="frm_pin_request" action="{{url('/e-pin/pin-request')}}" method="post" enctype="multipart/form-data">
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                            <input type = "hidden" name = "depositAmount" id="depositAmount">



                        	<div class="form-group row">
                                <label for="inputPlc" class="col-sm-4 col-form-label">Select Plan&nbsp;<strong><span style="color: #ff0000">*</span></strong></label>
                                <div class="col-sm-8">
                                    <select name="plan_name" id="plan_name" class="form-control col-sm-8" onchange="selectPlan(this);" required>
	<option value="">-- Select Plan --</option>
<!--	<option value="888001">AutoPool</option>
	<option value="888002">50%</option>-->
  @foreach ($plans as $plandetails)
  <option value="{{$plandetails->id}}">{{$plandetails->name}}</option>
  @endforeach

</select>
                                    <span id="ContentPlaceHolder1_RequiredFieldValidator1ss" style="display:none;"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Deposited Rs&nbsp;<strong><span style="color: #ff0000">*</span></strong></label>
                                <div class="col-sm-8">
                                    <input name="deposit_amount" type="text" maxlength="10" id="deposit_amount"  class="form-control col-sm-8" required>

                                    <span id="ContentPlaceHolder1_RequiredFieldValidator8" style="display:none;"></span>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputSponser3" class="col-sm-4 col-form-label">Deposit/Transaction Date&nbsp;<strong><span style="color: #ff0000">*</span></strong></label>
                                <div class="col-sm-8">
                                    <input name="transaction_date" type="date"  id="transaction_date" class="form-control col-sm-8" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputPlc" class="col-sm-4 col-form-label">Payment Options&nbsp;<strong><span style="color: #ff0000">*</span></strong></label>
                                <div class="col-sm-8">
                                    <select name="payment_options" id="payment_options" class="form-control col-sm-8" required>
	<option value="">-- Select Payment --</option>
	<option value="Online Transfer ( NEFT / RTGS)">Online Transfer ( NEFT / RTGS)</option>
	<option value="IMPS">IMPS</option>
	<option value="ATM TRANSFER">ATM TRANSFER</option>
	<option value="MONEY TRANSFER">MONEY TRANSFER</option>

</select>


                                    <span id="ContentPlaceHolder1_RequiredFieldValidator12" style="display:none;"></span>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputPlacement3" class="col-sm-4 col-form-label">IMPS Mobile No&nbsp;<strong><span style="color: #ff0000">*</span></strong></label>
                                <div class="col-sm-8">
                                    <input name="imps_mobile_no" type="text" maxlength="20" id="imps_mobile_no" onkeypress="CheckNumeric(event);" class="form-control col-sm-8" required>
                                    <span id="ContentPlaceHolder1_RegularExpressionValidator1" style="display:none;"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPlcName" class="col-sm-4 col-form-label">Transaction No&nbsp;<strong><span style="color: #ff0000">*</span></strong></label>
                                <div class="col-sm-8">
                                    <input name="transaction_no" type="text" maxlength="20" id="transaction_no" class="form-control col-sm-8" required>
                                    <span id="ContentPlaceHolder1_RequiredFieldValidator4" style="display:none;"></span>
                                    <span id="ContentPlaceHolder1_rfvname" style="color:Red;display:none;"></span>
                                </div>
                            </div>





                            <div class="form-group row">
                                <label for="inputName" class="col-sm-4 col-form-label">Remark</label>
                                <div class="col-sm-8">
                                    <input name="remarks" type="text" maxlength="50" id="remarks" class="form-control col-sm-8">

                                </div>
                            </div>



                            <div class="form-group row">
                                <div class="col-sm-10" align="center">
                                    <input type="submit" name="ctl00$ContentPlaceHolder1$Btn_Save" value="Submit" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$Btn_Save&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="ContentPlaceHolder1_Btn_Save" class="btn btn-success">
                                    <input type="submit" name="ctl00$ContentPlaceHolder1$btnback" value="Cancel" id="ContentPlaceHolder1_btnback" class="btn btn-danger">
                                </div>
                            </div>


                            <div id="ContentPlaceHolder1_ValidationSummary1" style="display:none;">

</div>
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$hidenPin" id="ContentPlaceHolder1_hidenPin">

                        </div>
                      </form>
                    </div>
                </div>



                <br>

                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title" style="font-size: 15px;">
                                    Requests
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">

                                    <div>
	<table class="table table-striped text-nowrap" cellspacing="0" cellpadding="4" border="0" id="ContentPlaceHolder1_grdRequest" style="color:#1A1A1A;width:100%;border-collapse:collapse;">
		<tbody>
      <tr style="color:White;background-color:#000000;font-weight:bold;">
			     <th align="center" valign="middle" scope="col">Sl.No</th>
           <th scope="col">Request ID</th>
           <th scope="col" style="font-family:Tahoma;font-size:10pt;">Plan Name</th>
           <th scope="col" style="font-family:Tahoma;font-size:10pt;">Payment Method</th>
           <th scope="col" style="font-family:Tahoma;font-size:10pt;">Amount</th>
           <th scope="col" style="font-family:Tahoma;font-size:10pt;">Transaction No</th>
           <th scope="col" style="font-family:Tahoma;font-size:10pt;">Transaction Date</th>
           <th scope="col" style="font-family:Tahoma;font-size:10pt;">Request Date</th>
           <th scope="col" style="font-family:Tahoma;font-size:10pt;">Remarks</th>
           <th scope="col" style="font-family:Tahoma;font-size:10pt;">Admin Message</th>
           <th scope="col" style="font-family:Tahoma;font-size:10pt;">Status</th>
		</tr>
    @forelse  ($epinreq as $index => $EPINreqdata)
      <tr>
        <th>{{$index+1}}</th>
        <th>OXDRI{{sprintf("%08d",$EPINreqdata->request_id)}}</th>
        <th>{{$EPINreqdata->name}}</th>
        <th>{{$EPINreqdata->payment_options}}</th>
        <th>{{$EPINreqdata->deposit_amount}}</th>
        <th>{{$EPINreqdata->transaction_no}}</th>
        <th>{{date("d-m-Y",strtotime($EPINreqdata->transaction_date))}}</th>
        <th>{{date('d-m-Y',strtotime($EPINreqdata->created_at))}}</th>
        <th>{{$EPINreqdata->remarks}}</th>
        <th>{{$EPINreqdata->admin_msg}}</th>
        <th><?php if($EPINreqdata->status==0){
          echo "<p style='color:red;'>Processing</p>";
        }else if($EPINreqdata->status==1){
          echo "<p style='color:green;'>Approved</p>";
        }else{} ?></th>
      </tr>
      @empty
      <td colspan="10">No E-PIN Requests Found</td>
    @endforelse

	</tbody></table>
</div>
                                </div>
                            </div>
                            <!-- table-wrapper -->
                        </div>
                        <!-- section-wrapper -->

                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>


<script type="text/javascript">
  function selectPlan(plan){
    if(plan.value==888001){
      document.getElementById("depositAmount").value=10000;
      document.getElementById("deposit_amount").value=10000;

      document.getElementById('deposit_amount').disabled=true;


    }else if(plan.value==888002){
      document.getElementById('deposit_amount').value='';
      document.getElementById('plan_id').value=plan.value;
      document.getElementById('deposit_amount').disabled=false;
    }else{
      document.getElementById('deposit_amount').value='';
      document.getElementById('deposit_amount').disabled=false;
    }

  }
</script>

  @include('inc.footer')
</div>
