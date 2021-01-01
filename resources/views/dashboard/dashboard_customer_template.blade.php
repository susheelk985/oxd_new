
@include('inc.header')
    <!-- Morris chart -->
   <link rel="stylesheet" href="{{ asset('storage/components/morris.js/morris.css') }}">
   <!-- jvectormap -->
   <link rel="stylesheet" href="{{ asset('storage/components/jvectormap/jquery-jvectormap.css') }}">
   <!-- Date Picker -->
   <link rel="stylesheet" href="{{ asset('storage/components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
   <!-- Daterange picker -->
   <link rel="stylesheet" href="{{ asset('storage/components/bootstrap-daterangepicker/daterangepicker.css') }}">
   <!-- bootstrap wysihtml5 - text editor -->
   <link rel="stylesheet" href="{{ asset('storage/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
   <link href="{{asset('storage/css/power.css')}}" rel="stylesheet" type="text/css">
   <!--<link href="{{asset('storage/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">-->
  <!-- <link href="{{asset('storage/css/style.css')}}" rel="stylesheet" type="text/css">-->
   <link href="{{asset('storage/css/responsive.css')}}" rel="stylesheet" type="text/css">
   <link href="{{asset('storage/css/oxygen.css')}}" rel="stylesheet" type="text/css">

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
      <!-- /.row (main row) -->
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
	display: block;public function Children($id){

  		$getChildMember=DB::table('oxd_member_log')->where('referral_id',$id)->get();

 		$arr=[];

		foreach($getChildMember as $row){///level 2
						$NetSaleVolume3=DB::table('oxd_orders')->where('member_id',$id)->select('product_cost')->pluck('product_cost')->first();
					$arr[] = [

						 'ibo' => $row->name.' ['.$row->id.']',
						 'imgUrl' =>$this->MemberPictureUrl($id),
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
    $users_Data=DB::table('oxd_users')->where('id',$id)->select('photo')->pluck('photo')->first();
    if(!empty($MemberPictureUrl)){
      return $MemberPictureUrl= asset('storage/profile/'.$MemberPictureUrl);
         }else{
        return $MemberPictureUrl= asset('storage/profile/profile-icon.png');
     }
  }

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

    </style>
    <!-- Content_right -->
    <div class="container_full bg_blue_top">
        <div class="content_wrapper">
            <div class="container-fluid">
                <!-- breadcrumb -->
                <div class="page-heading" >
                    <div class="row d-flex align-items-center">
                        <div class="col-md-6">
                            <div class="page-breadcrumb">
                                <h1>Dashboard</h1>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- breadcrumb_End -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="page-title-box">
                                    <marquee align="left" behavior="scroll" direction="left" loop="10" scrolldelay="200" width="100%">
                                          <span id="ContentPlaceHolder1_lblMEssage" style="color:#000000;font-family:TImes New Roman;font-size:14pt;font-weight:bold;">WELCOME TO OXYDYSER</span>
                                       </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
               Personal Details  &nbsp; &nbsp; &nbsp;
                            </div>
                            <div class="panel-content panel-about">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th><i class="fa fa-user"></i>Code</th>
                                            <td><?php $id=sprintf("%08d", $data[0]->id); ?>
                                                <span id="ContentPlaceHolder1_lblswcode" class="form-label">{{'OXD'.$id}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><i class="fa fa-user"></i>Name</th>
                                            <td>
                                                <span id="ContentPlaceHolder1_lblname" class="form-label">{{$data[0]->username}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><i class="fa fa-map-marker"></i>City / Town</th>
                                            <td>
                                                <span id="ContentPlaceHolder1_lblcity" class="form-label">{{$data[0]->city}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><i class="fa fa-map-marker"></i>State</th>
                                            <td>
                                                <span id="ContentPlaceHolder1_lblstate" class="form-label">{{$data[0]->state}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><i class="fa fa-envelope-o"></i>Email Id</th>
                                            <td>
                                                <span id="ContentPlaceHolder1_lblemail" class="form-label">{{$data[0]->email}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><i class="fa fa-mobile-phone"></i>Contact No</th>
                                            <td>
                                                <span id="ContentPlaceHolder1_lblmobile" class="form-label">{{$data[0]->mobile}}</span>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">WALLET DETAILS</h3>
                            </div>
                            <div class="panel-content panel-about">
                              <?php $count=0; ?>
                              @foreach ($autopool as $Amountdata)

                              <?php
                              if(($Amountdata["referral_id"]==Auth::user()->id)&&$count<=9){
                                $count++;
                              }
                                ?>
                              @endforeach
                              <?php
                              $autoAmount=0.00;

                              // echo '<script type="text/javascript">alert("' . count($autopool) . '")</script>';
                              if((count($autopool)>3)&&(count($autopool)<12)){
                                $autoAmount=3000;
                              }else if((count($autopool)>11)&&(count($autopool)<40)){
                                $autoAmount=9000;
                              }else if(count($autopool)==40){
                                $autoAmount=50000;
                              }else{
                                $autoAmount=$autoAmount;
                              }

                              $referralAmount=$count*1000;
                              $totalAmount=number_format((($referralAmount)+($autoAmount)),2);

                              ?>

                                <div class="row">
                                    <div class="col-xl-3 col-sm-6 mb-4">
                                        <div class="card bg-inverse border-0 text-light h-55">
                                            <div class="card-body "style="background-color: #262626; color:white;">
                                                <div class="row">
                                                    <div class=" col-3">
                                                        <i class="icon-people f30"></i>
                                                    </div>
                                                    <div class=" col-9">
                                                        <h6 class="m-0 text-light f14" align="center"><b>REFERRAL EARN</b></h6>
                                                        <p class="f14 mb-0">

                                                            <h5 style="font-weight: bold; padding-left: 150px;"><i class="fa fa-rupee "></i>{{number_format($referralAmount,2)}}</h5>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 mb-4">
                                        <div class="card bg-inverse border-0 text-light h-55">
                                            <div class="card-body "style="background-color: #262626; color:white;">
                                                <div class="row">
                                                    <div class=" col-3">
                                                        <i class="icon-people f30"></i>
                                                    </div>
                                                    <div class=" col-9">
                                                        <h6 class="m-0 text-light f14" align="center"><b>AUTO POOL INCOME</b></h6>
                                                        <p class="f14 mb-0">

                                                            <h5 style="font-weight: bold; padding-left: 150px;"><i class="fa fa-rupee "></i>{{number_format($autoAmount,2)}}</h5>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-sm-6 mb-4">
                                        <div class="card bg-inverse border-0 text-light h-55">
                                            <div class="card-body "style="background-color: #262626; color:white;">
                                                <div class="row">
                                                    <div class=" col-3">

                                                    </div>
                                                    <div class=" col-9">
                                                        <h6 class="m-0 text-light f14" align="center"><b>TOTAL INCOME</b></h6>
                                                        <p class="f14 mb-0">

                                                            <h5 style="font-weight: bold; padding-left: 150px;"><i class="fa fa-rupee "></i>{{$totalAmount}}</h5>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 mb-4">
                                        <div class="card bg-inverse border-0 text-light h-55">
                                            <div class="card-body " style="background-color: #262626; color:white;">
                                                <div class="row">
                                                    <div class=" col-3">

                                                    </div>
                                                    <div class=" col-9">
                                                        <h6 class="m-0 text-light f14" align="center"><b>RECEIVED AMOUNT</b></h6>
                                                        <p class="f14 mb-0">
                                                            <h5 style="font-weight: bold; padding-left: 150px;"><i class="fa fa-rupee "></i>{{$recamount}}</h5>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>


                </div>

                <br>



                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title" align="center">
                                <h3>ACCOUNT DETAILS</h3>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="panel-title">Account Details</h3><br>
                                    </div>
                                    <div class="panel-content panel-about">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th><i class="fa fa-bank "></i>Bank Name</th>
                                                    <td>
                                                        <span id="ContentPlaceHolder1_lblbank" class="form-label">{{$data[0]->bank_name}}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th><i class="fa fa-map-marker"></i>Branch Name</th>
                                                    <td>
                                                        <span id="ContentPlaceHolder1_lblbranch" class="form-label">{{$data[0]->branch_name}}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th><i class="fa fa-bank"></i>Account No</th>
                                                    <td>
                                                        <span id="ContentPlaceHolder1_lblaccount" class="form-label">{{$data[0]->account_no}}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th><i class="fa fa-bank"></i>IFSC Code</th>
                                                    <td>
                                                        <span id="ContentPlaceHolder1_lblifsc" class="form-label">{{$data[0]->ifsc_code}}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th><i class="fa fa-vcard"></i>Pan Card</th>
                                                    <td>
                                                        <span id="ContentPlaceHolder1_lblpan" class="form-label">{{$data[0]->pan_card_no}}</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="panel-title">Plan Details</h3><br>
                                    </div>
                                    <div class="panel-content panel-about">

                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th><i class="fa fa-rupee"></i>Plan Name</th>
                                                    <td>
                                                        <span id="ContentPlaceHolder1_lbl15Count" class="form-label">{{$data[0]->planname}}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th><i class="fa fa-rupee"></i>Joining Date</th>
                                                    <td><?php
                                                    $joiningDate=$data[0]->created_at;
                                                    $joiningDate = strtotime($joiningDate);
                                                    $joiningDate = date('j-n-Y', $joiningDate); ?>
                                                        <span id="ContentPlaceHolder1_lbl15Amount" class="form-label">{{$joiningDate}}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th><i class="fa fa-rupee"></i>Paid Amount</th>
                                                    <td>
                                                        <span id="ContentPlaceHolder1_lbl15Achievement" class="form-label">{{$data[0]->product_cost}}</span>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>



            </div>

            <br>
            <br>


        </div>
    </div>

    </section>

    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->

@include('inc.footer')

<script src="{{ asset('storage/components/Flot/jquery.flot.js') }}"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="{{ asset('storage/components/Flot/jquery.flot.resize.js') }}"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="{{ asset('storage/components/Flot/jquery.flot.pie.js') }}"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="{{ asset('storage/components/Flot/jquery.flot.categories.js') }}"></script>
<script>
 /*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data : [
	  			['January', 10],
				['February', 50],
				['March', 4],
				['April', 13],
				['May', 17],
				['June', 9],
				['July', 50] ,
				['August', 0],
				['September', 0],
			   ['October', 40],
			  ['November', 0],
			  ['December', 0]
	  ],
      color: '#3c8dbc'
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.5,
          align   : 'center'
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      }
    })
    /* END BAR CHART */
</script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('storage/components/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>






<!-- AdminLTE for demo purposes -->
</body>
</html>
