
	@include('inc.header')
    <!-- google font -->
    <link href="{{asset('storage/css/power.css')}}" rel="stylesheet" type="text/css">
    <!--<link href="{{asset('storage/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">-->
    <link href="{{asset('storage/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('storage/css/ionicons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('storage/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('storage/js/jquery.mCustomScrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('storage/css/weather-icons.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('storage/css/oxygen.css')}}">
    <!--<link href="{{asset('storage/css/style.css')}}" rel="stylesheet">-->
    <link href="{{asset('storage/css/responsive.css')}}" rel="stylesheet">

    <script src="{{asset('storage/js/jquery-1.8.2.js')}}"></script>
    <script src="{{asset('storage/js/jqueryy-1.8.2.js')}}" type="text/javascript"></script>
    <script src="{{asset('storage/js/jquery.tooltip.js')}}" type="text/javascript"></script>

    <script type="text/javascript">
        var jq = $.noConflict();
        function InitializeToolTip() {
            debugger;
            jq(".gridViewToolTip").tooltip({
                track: true,
                delay: 0,
                showURL: false,
                fade: 100,
                bodyHandler: function () {
                    return jq(jq(this).next().html());
                },
                showURL: false
            });
        }
    </script>

    <script type="text/javascript">
        var jq1 = $.noConflict();
        jq1(function () {
            InitializeToolTip();
        })
    </script>

    <style type="text/css">
		body{
			overflow-x: hidden;
  }

        #tooltip {
            position: absolute;
            z-index: 3000;
            border: 2px solid;
            border-radius: 10px;
            background-color: #000;
            color: White;
            padding: 5px;
            opacity: 0.85;
        }

            #tooltip h3, #tooltip div {
                margin: 0;
            }
            .cntr{
            	text-align: center;
            }

						/*Now the CSS*/
* {margin: 0; padding: 0;}

.hrt .tree ul {
	padding-top: 20px; position: relative;

	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

.hrt .tree li {
	float: left; text-align: center;
	list-style-type: none;
	position: relative;
	padding: 20px 5px 0 5px;
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

/*We will use ::before and ::after to draw the connectors*/

.hrt .tree li::before, .tree li::after{
	content: '';
	position: absolute; top: 0; right: 50%;
	border-top: 1px solid #004d00;
	width: 50%; height: 20px;
}
.hrt .tree li::after{
	right: auto; left: 50%;
	border-left: 1px solid #004d00;
}

/*We need to remove left-right connectors from elements without
any siblings*/
.hrt .tree li:only-child::after, .tree li:only-child::before {
	display: none;
}

/*Remove space from the top of single children*/
.hrt .tree li:only-child{ padding-top: 0;}

/*Remove left connector from first child and
right connector from last child*/
.hrt .tree li:first-child::before, .tree li:last-child::after{
	border: 0 none;
}
/*Adding back the vertical connector to the last nodes*/
.hrt .tree li:last-child::before{
	border-right: 1px solid #004d00;
	border-radius: 0 5px 0 0;
	-webkit-border-radius: 0 5px 0 0;
	-moz-border-radius: 0 5px 0 0;
}
.hrt .tree li:first-child::after{
	border-radius: 5px 0 0 0;
	-webkit-border-radius: 5px 0 0 0;
	-moz-border-radius: 5px 0 0 0;
}

/*Time to add downward connectors from parents*/
.hrt .tree ul ul::before{
	content: '';
	position: absolute; top: 0; left: 50%;
	border-left: 1px solid #004d00;
	width: 0; height: 20px;
}

.hrt .tree li a{
	border: 1px solid #004d00;
	padding: 5px 10px;
	text-decoration: none;
	color: #3333ff;
	font-family: arial, verdana, tahoma;
	font-size: 11px;
	display: inline-block;

	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;

	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

/*Time for some hover effects*/
/*We will apply the hover effect the the lineage of the element also*/
.hrt .tree li a:hover, .tree li a:hover+ul li a {
	background: #6600ff; color: #ffffff; border: 1px solid #94a0b4;
}
/*Connector styles on hover*/
.hrt .tree li a:hover+ul li::after,
.hrt .tree li a:hover+ul li::before,
.hrt .tree li a:hover+ul::before,
.hrt .tree li a:hover+ul ul::before{
	border-color:  #94a0b4;
}
.cont {
    white-space:nowrap;
}

.sidebar-menu, .main-sidebar .user-panel, .sidebar-menu>li.header {
    white-space: nowrap;
    overflow: hidden;
}
.sidebar-menu {
    list-style: inside;
    margin: 0;
    padding: 0;
}



@media screen and (min-width: 1366px) {
   .fcp{
        width:44%;
    }
    .puff{
        margin-left: -41px;
    }
}
@media screen and (min-width: 1440px) {
     .fcp{
        width:63%;
    }
    .puff{
        margin-left: 245px;
    }
}
@media screen and (max-width: 480px and 411px) {
     .tsm{
         display:none;
     }
}

    </style>
  </head>
	<body class="hold-transition skin-blue sidebar-mini sidebar-collapse" style="width: 3000px;overflow-x: scroll; ">
	<div class="wrapper">
	@include('inc.topbar')
	<!-- Left side column. contains the logo and sidebar -->
	@include('inc.sidebar_autopool')

	<!-- Content Wrapper. Contains page content -->
	<div class="hrt content-wrapper">
	  <!-- Content Header (Page header) -->
	  <section class="content-header">
	    <h1> Genealogy View <small>Control panel</small> </h1>
	    <ol class="breadcrumb">
	      <li><a href="{{url('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	      <li class="active">
	       genealogy
	      </li>
	    </ol>
	  </section>



	  <!-- Main content -->
	  <section class="content tsm" >
	  <div class="row" >
	    <!-- left column -->
	    <div class="col-md-12">
	      <!-- general form elements -->
	      <div class="box box-primary">
	        <div class="box-body" align="center">

	   			<div class="entry-content">

	            <div class="row" ng-app="amwayCalApp">
	            <div class="span12" ng-view>
								<!-- /.content-wrapper -->
								<!-- Content_right -->
									<div class="container_full bg_blue_top">
											<div class="content_wrapper">
													<div class="container-fluid">
															<!-- breadcrumb -->
															<div class="page-heading">
																	<div class="row d-flex align-items-center">
																			<div class="col-md-12 fcp">
																					<div class="page-breadcrumb" style="background-color:#df3342; color:white; ">
																							<h1 class="cntr">Genealogy View</h1>
																							<h1 class="cntr">Plan 4</h1>
																					</div>
																			</div>

																	</div>
															</div>
															<!-- breadcrumb_End -->

																		<div style="
																		overflow-x: scroll;visibility: visible">
																				<div class="tree cont" ><!--style="padding-left: 250px"-->

																						<ul>
																							<li class="puff">
                                                <?php if (count($data)>0){
                                                  if($data[0]["imgurl"]='NULL'){
                                                    $imgurl="profile-icon.png";
                                                  }?>
                                                <a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
                                                  <span>Name: {{$data[0]["name"]}}</span><br>
                                                  <span>ID: {{$data[0]["id"]}}</span>
                                                </a>
                                              <?php }else{?>

                                              <?php } ?>
																								<ul>
																									<li>
																										<?php if (count($data)>1){
																											if($data[1]["imgurl"]='NULL'){
																												$imgurl="profile-icon.png";
																											}?>
																										<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																											<span>Name: {{$data[1]["name"]}}</span><br>
																											<span>ID: {{$data[1]["id"]}}</span><br>
																											<?php if($data[1]["referral_id"]==Auth::user()->id){
																												echo "<span>DR</span>";
																											}else{

																											} ?>
																										</a>
																									<?php }else{ ?>
                                                    <a href="#">1</a>
                                                  <?php } ?>
																										<ul>
																											<li>
																												<?php if (count($data)>4){
																													if($data[4]["imgurl"]='NULL'){
																														$imgurl="profile-icon.png";
																													}?>
																												<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																													<span>Name: {{$data[4]["name"]}}</span><br>
																													<span>ID: {{$data[4]["id"]}}</span><br>
																													<?php if($data[4]["referral_id"]==Auth::user()->id){
																														echo "<span>DR</span>";
																													}else{

																													} ?>
																												</a>
                                                      <?php }else{ ?>
                                                        <a href="#">4</a>
                                                      <?php } ?>
																												<ul>
																													<li>
																														<?php if (count($data)>13){
																															if($data[13]["imgurl"]='NULL'){
																																$imgurl="profile-icon.png";
																															}?>
																														<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																															<span>Name: {{$data[13]["name"]}}</span><br>
																															<span>ID: {{$data[13]["id"]}}</span><br>
																															<?php if($data[13]["referral_id"]==Auth::user()->id){
																																echo "<span>DR</span>";
																															}else{

																															} ?>
																														</a>
																													<?php }else{ ?>
						                                                <a href="#">13</a>
						                                              <?php } ?>
																													</li>
																													<li>
																														<?php if (count($data)>14){
																															if($data[14]["imgurl"]='NULL'){
																																$imgurl="profile-icon.png";
																															}?>
																														<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																															<span>Name: {{$data[14]["name"]}}</span><br>
																															<span>ID: {{$data[14]["id"]}}</span><br>
																															<?php if($data[14]["referral_id"]==Auth::user()->id){
																																echo "<span>DR</span>";
																															}else{

																															} ?>
																														</a>
																													<?php }else{ ?>
						                                                <a href="#">14</a>
						                                              <?php } ?>
																													</li>
																													<li>
																														<?php if (count($data)>15){
																															if($data[15]["imgurl"]='NULL'){
																																$imgurl="profile-icon.png";
																															}?>
																														<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																															<span>Name: {{$data[15]["name"]}}</span><br>
																															<span>ID: {{$data[15]["id"]}}</span><br>
																															<?php if($data[15]["referral_id"]==Auth::user()->id){
																																echo "<span>DR</span>";
																															}else{

																															} ?>
																														</a>
																													<?php }else{ ?>
						                                                <a href="#">15</a>
						                                              <?php } ?>
																													</li>
																												</ul>
																											</li>
																											<li>
																												<?php if (count($data)>5){
																													if($data[5]["imgurl"]='NULL'){
																														$imgurl="profile-icon.png";
																													}?>
																												<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																													<span>Name: {{$data[5]["name"]}}</span><br>
																													<span>ID: {{$data[5]["id"]}}</span><br>
																													<?php if($data[5]["referral_id"]==Auth::user()->id){
																														echo "<span>DR</span>";
																													}else{

																													} ?>
																												</a>
                                                      <?php }else{ ?>
                                                        <a href="#">5</a>
                                                      <?php } ?>
																												<ul>
																													<li>
																														<?php if (count($data)>16){
																															if($data[16]["imgurl"]='NULL'){
																																$imgurl="profile-icon.png";
																															}?>
																														<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																															<span>Name: {{$data[16]["name"]}}</span><br>
																															<span>ID: {{$data[16]["id"]}}</span><br>
																															<?php if($data[16]["referral_id"]==Auth::user()->id){
																																echo "<span>DR</span>";
																															}else{

																															} ?>
																														</a>
																													<?php }else{ ?>
						                                                <a href="#">16</a>
						                                              <?php } ?>
																													</li>
																													<li>
																														<?php if (count($data)>17){
																															if($data[17]["imgurl"]='NULL'){
																																$imgurl="profile-icon.png";
																															}?>
																														<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																															<span>Name: {{$data[17]["name"]}}</span><br>
																															<span>ID: {{$data[17]["id"]}}</span><br>
																															<?php if($data[17]["referral_id"]==Auth::user()->id){
																																echo "<span>DR</span>";
																															}else{

																															} ?>
																														</a>
																													<?php }else{ ?>
						                                                <a href="#">17</a>
						                                              <?php } ?>
																													</li>
																													<li>
																														<?php if (count($data)>18){
																															if($data[18]["imgurl"]='NULL'){
																																$imgurl="profile-icon.png";
																															}?>
																														<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																															<span>Name: {{$data[18]["name"]}}</span><br>
																															<span>ID: {{$data[18]["id"]}}</span><br>
																															<?php if($data[18]["referral_id"]==Auth::user()->id){
																																echo "<span>DR</span>";
																															}else{

																															} ?>
																														</a>
																													<?php }else{ ?>
						                                                <a href="#">18</a>
						                                              <?php } ?>
																													</li>
																												</ul>
																											</li>
																											<li>
																												<?php if (count($data)>6){
																													if($data[6]["imgurl"]='NULL'){
																														$imgurl="profile-icon.png";
																													}?>
																												<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																													<span>Name: {{$data[6]["name"]}}</span><br>
																													<span>ID: {{$data[6]["id"]}}</span><br>
																													<?php if($data[6]["referral_id"]==Auth::user()->id){
																														echo "<span>DR</span>";
																													}else{

																													} ?>
																												</a>
																											<?php }else{ ?>
																												<a href="#">6</a>
																											<?php } ?>
																												<ul>
																													<li>
																														<?php if (count($data)>19){
																															if($data[19]["imgurl"]='NULL'){
																																$imgurl="profile-icon.png";
																															}?>
																														<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																															<span>Name: {{$data[19]["name"]}}</span><br>
																															<span>ID: {{$data[19]["id"]}}</span><br>
																															<?php if($data[19]["referral_id"]==Auth::user()->id){
																																echo "<span>DR</span>";
																															}else{

																															} ?>
																														</a>
																													<?php }else{ ?>
						                                                <a href="#">19</a>
						                                              <?php } ?>
																													</li>
																													<li>
																														<?php if (count($data)>20){
																															if($data[20]["imgurl"]='NULL'){
																																$imgurl="profile-icon.png";
																															}?>
																														<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																															<span>Name: {{$data[20]["name"]}}</span><br>
																															<span>ID: {{$data[20]["id"]}}</span>

																														</a>
																													<?php }else{ ?>
						                                                <a href="#">20</a>
						                                              <?php } ?>
																													</li>
																													<li>
																														<?php if (count($data)>21){
																															if($data[21]["imgurl"]='NULL'){
																																$imgurl="profile-icon.png";
																															}?>
																														<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																															<span>Name: {{$data[21]["name"]}}</span><br>
																															<span>ID: {{$data[21]["id"]}}</span><br>
																															<?php if($data[21]["referral_id"]==Auth::user()->id){
																																echo "<span>DR</span>";
																															}else{

																															} ?>
																														</a>
																													<?php }else{ ?>
						                                                <a href="#">21</a>
						                                              <?php } ?>
																													</li>
																												</ul>
																											</li>
																										</ul>
																									</li>
																									<li>
																										<?php if (count($data)>2){
																											if($data[2]["imgurl"]='NULL'){
																												$imgurl="profile-icon.png";
																											}?>
																										<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																											<span>Name: {{$data[2]["name"]}}</span><br>
																											<span>ID: {{$data[2]["id"]}}</span><br>
																											<?php if($data[2]["referral_id"]==Auth::user()->id){
																												echo "<span>DR</span>";
																											}else{

																											} ?>
																										</a>
                                                  <?php }else{ ?>
                                                    <a href="#">2</a>
                                                  <?php } ?>
																										<ul>
																											<li>
																												<?php if (count($data)>7){
																													if($data[7]["imgurl"]='NULL'){
																														$imgurl="profile-icon.png";
																													}?>
																												<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																													<span>Name: {{$data[7]["name"]}}</span><br>
																													<span>ID: {{$data[7]["id"]}}</span><br>
																													<?php if($data[7]["referral_id"]==Auth::user()->id){
																														echo "<span>DR</span>";
																													}else{

																													} ?>
																												</a>
                                                      <?php }else{ ?>
                                                        <a href="#">7</a>
                                                      <?php } ?>
																												<ul>
																													<li>
																														<?php if (count($data)>22){
																															if($data[22]["imgurl"]='NULL'){
																																$imgurl="profile-icon.png";
																															}?>
																														<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																															<span>Name: {{$data[22]["name"]}}</span><br>
																															<span>ID: {{$data[22]["id"]}}</span><br>
																															<?php if($data[22]["referral_id"]==Auth::user()->id){
																																echo "<span>DR</span>";
																															}else{

																															} ?>
																														</a>
																													<?php }else{ ?>
						                                                <a href="#">22</a>
						                                              <?php } ?>
																													</li>
																													<li>
																														<?php if (count($data)>23){
																															if($data[23]["imgurl"]='NULL'){
																																$imgurl="profile-icon.png";
																															}?>
																														<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																															<span>Name: {{$data[23]["name"]}}</span><br>
																															<span>ID: {{$data[23]["id"]}}</span><br>
																															<?php if($data[23]["referral_id"]==Auth::user()->id){
																																echo "<span>DR</span>";
																															}else{

																															} ?>
																														</a>
																													<?php }else{ ?>
						                                                <a href="#">23</a>
						                                              <?php } ?>
																													</li>
																													<li>
																														<?php if (count($data)>24){
																															if($data[24]["imgurl"]='NULL'){
																																$imgurl="profile-icon.png";
																															}?>
																														<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																															<span>Name: {{$data[24]["name"]}}</span><br>
																															<span>ID: {{$data[24]["id"]}}</span><br>
																															<?php if($data[24]["referral_id"]==Auth::user()->id){
																																echo "<span>DR</span>";
																															}else{

																															} ?>
																														</a>
																													<?php }else{ ?>
						                                                <a href="#">24</a>
						                                              <?php } ?>
																													</li>
																												</ul>
																											</li>
																											<li>
																												<?php if (count($data)>8){
																													if($data[8]["imgurl"]='NULL'){
																														$imgurl="profile-icon.png";
																													}?>
																												<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																													<span>Name: {{$data[8]["name"]}}</span><br>
																													<span>ID: {{$data[8]["id"]}}</span><br>
																													<?php if($data[8]["referral_id"]==Auth::user()->id){
																														echo "<span>DR</span>";
																													}else{

																													} ?>
																												</a>
                                                      <?php }else{ ?>
                                                        <a href="#">8</a>
                                                      <?php } ?>
																												<ul>
																													<li>
																														<?php if (count($data)>25){
																															if($data[25]["imgurl"]='NULL'){
																																$imgurl="profile-icon.png";
																															}?>
																														<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																															<span>Name: {{$data[25]["name"]}}</span><br>
																															<span>ID: {{$data[25]["id"]}}</span><br>
																															<?php if($data[25]["referral_id"]==Auth::user()->id){
																																echo "<span>DR</span>";
																															}else{

																															} ?>
																														</a>
																													<?php }else{ ?>
						                                                <a href="#">25</a>
						                                              <?php } ?>
																													</li>
																													<li>
																														<?php if (count($data)>26){
																															if($data[26]["imgurl"]='NULL'){
																																$imgurl="profile-icon.png";
																															}?>
																														<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																															<span>Name: {{$data[26]["name"]}}</span><br>
																															<span>ID: {{$data[26]["id"]}}</span><br>
																															<?php if($data[26]["referral_id"]==Auth::user()->id){
																																echo "<span>DR</span>";
																															}else{

																															} ?>
																														</a>
																													<?php }else{ ?>
						                                                <a href="#">26</a>
						                                              <?php } ?>
																													</li>
																													<li>
																														<?php if (count($data)>27){
																															if($data[27]["imgurl"]='NULL'){
																																$imgurl="profile-icon.png";
																															}?>
																														<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																															<span>Name: {{$data[27]["name"]}}</span><br>
																															<span>ID: {{$data[27]["id"]}}</span><br>
																															<?php if($data[27]["referral_id"]==Auth::user()->id){
																																echo "<span>DR</span>";
																															}else{

																															} ?>
																														</a>
																													<?php }else{ ?>
						                                                <a href="#">27</a>
						                                              <?php } ?>
																													</li>
																												</ul>
																											</li>
																											<li>
																												<?php if (count($data)>9){
																													if($data[9]["imgurl"]='NULL'){
																														$imgurl="profile-icon.png";
																													}?>
																												<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																													<span>Name: {{$data[9]["name"]}}</span><br>
																													<span>ID: {{$data[9]["id"]}}</span><br>
																													<?php if($data[9]["referral_id"]==Auth::user()->id){
																														echo "<span>DR</span>";
																													}else{

																													} ?>
																												</a>
                                                      <?php }else{ ?>
                                                        <a href="#">9</a>
                                                      <?php } ?>
																												<ul>
																													<li>
																														<?php if (count($data)>28){
																															if($data[28]["imgurl"]='NULL'){
																																$imgurl="profile-icon.png";
																															}?>
																														<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																															<span>Name: {{$data[28]["name"]}}</span><br>
																															<span>ID: {{$data[28]["id"]}}</span><br>
																															<?php if($data[28]["referral_id"]==Auth::user()->id){
																																echo "<span>DR</span>";
																															}else{

																															} ?>
																														</a>
																													<?php }else{ ?>
						                                                <a href="#">28</a>
						                                              <?php } ?>
																													</li>
																													<li>
																														<?php if (count($data)>29){
																															if($data[29]["imgurl"]='NULL'){
																																$imgurl="profile-icon.png";
																															}?>
																														<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																															<span>Name: {{$data[29]["name"]}}</span><br>
																															<span>ID: {{$data[29]["id"]}}</span><br>
																															<?php if($data[29]["referral_id"]==Auth::user()->id){
																																echo "<span>DR</span>";
																															}else{

																															} ?>
																														</a>
																													<?php }else{ ?>
						                                                <a href="#">29</a>
						                                              <?php } ?>
																													</li>
																													<li>
																														<?php if (count($data)>30){
																															if($data[30]["imgurl"]='NULL'){
																																$imgurl="profile-icon.png";
																															}?>
																														<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																															<span>Name: {{$data[30]["name"]}}</span><br>
																															<span>ID: {{$data[30]["id"]}}</span><br>
																															<?php if($data[30]["referral_id"]==Auth::user()->id){
																																echo "<span>DR</span>";
																															}else{

																															} ?>
																														</a>
																													<?php }else{ ?>
						                                                <a href="#">30</a>
						                                              <?php } ?>
																													</li>
																												</ul>
																											</li>
																										</ul>
																									<li>
																										<?php if (count($data)>3){
																											if($data[3]["imgurl"]='NULL'){
																												$imgurl="profile-icon.png";
																											}?>
																										<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																											<span>Name: {{$data[3]["name"]}}</span><br>
																											<span>ID: {{$data[3]["id"]}}</span><br>
																											<?php if($data[3]["referral_id"]==Auth::user()->id){
																												echo "<span>DR</span>";
																											}else{

																											} ?>
																										</a>
                                                  <?php }else{ ?>
                                                    <a href="#">3</a>
                                                  <?php } ?>
																										<ul>
																											<ul>
																												<li>
																													<?php if (count($data)>10){
																														if($data[10]["imgurl"]='NULL'){
																															$imgurl="profile-icon.png";
																														}?>
																													<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																														<span>Name: {{$data[10]["name"]}}</span><br>
																														<span>ID: {{$data[10]["id"]}}</span><br>
																														<?php if($data[10]["referral_id"]==Auth::user()->id){
																															echo "<span>DR</span>";
																														}else{

																														} ?>
																													</a>
                                                        <?php }else{ ?>
                                                          <a href="#">10</a>
                                                        <?php } ?>
																													<ul>
																														<li>
																															<?php if (count($data)>31){
																																if($data[31]["imgurl"]='NULL'){
																																	$imgurl="profile-icon.png";
																																}?>
																															<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																																<span>Name: {{$data[31]["name"]}}</span><br>
																																<span>ID: {{$data[31]["id"]}}</span><br>
																																<?php if($data[31]["referral_id"]==Auth::user()->id){
																																	echo "<span>DR</span>";
																																}else{

																																} ?>
																															</a>
																														<?php }else{ ?>
							                                                <a href="#">31</a>
							                                              <?php } ?>
																														</li>
																														<li>
																															<?php if (count($data)>32){
																																if($data[32]["imgurl"]='NULL'){
																																	$imgurl="profile-icon.png";
																																}?>
																															<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																																<span>Name: {{$data[32]["name"]}}</span><br>
																																<span>ID: {{$data[32]["id"]}}</span><br>
																																<?php if($data[32]["referral_id"]==Auth::user()->id){
																																	echo "<span>DR</span>";
																																}else{

																																} ?>
																															</a>
																														<?php }else{ ?>
							                                                <a href="#">32</a>
							                                              <?php } ?>
																														</li>
																														<li>
																															<?php if (count($data)>33){
																																if($data[33]["imgurl"]='NULL'){
																																	$imgurl="profile-icon.png";
																																}?>
																															<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																																<span>Name: {{$data[33]["name"]}}</span><br>
																																<span>ID: {{$data[33]["id"]}}</span><br>
																																<?php if($data[33]["referral_id"]==Auth::user()->id){
																																	echo "<span>DR</span>";
																																}else{

																																} ?>
																															</a>
																														<?php }else{ ?>
							                                                <a href="#">33</a>
							                                              <?php } ?>
																														</li>
																													</ul>
																													<li>
																														<?php if (count($data)>11){
																															if($data[11]["imgurl"]='NULL'){
																																$imgurl="profile-icon.png";
																															}?>
																														<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																															<span>Name: {{$data[11]["name"]}}</span><br>
																															<span>ID: {{$data[11]["id"]}}</span><br>
																															<?php if($data[11]["referral_id"]==Auth::user()->id){
																																echo "<span>DR</span>";
																															}else{

																															} ?>
																														</a>
																													<?php }else{ ?>
						                                                <a href="#">11</a>
						                                              <?php } ?>
																													<ul>
																														<li>
																															<?php if (count($data)>34){
																																if($data[34]["imgurl"]='NULL'){
																																	$imgurl="profile-icon.png";
																																}?>
																															<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																																<span>Name: {{$data[34]["name"]}}</span><br>
																																<span>ID: {{$data[34]["id"]}}</span><br>
																																<?php if($data[34]["referral_id"]==Auth::user()->id){
																																	echo "<span>DR</span>";
																																}else{

																																} ?>
																															</a>
																														<?php }else{ ?>
							                                                <a href="#">34</a>
							                                              <?php } ?>
																														</li>
																														<li>
                                                              <?php if (count($data)>35){
																																if($data[35]["imgurl"]='NULL'){
																																	$imgurl="profile-icon.png";
																																}?>
																															<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																																<span>Name: {{$data[35]["name"]}}</span><br>
																																<span>ID: {{$data[35]["id"]}}</span><br>
																																<?php if($data[35]["referral_id"]==Auth::user()->id){
																																	echo "<span>DR</span>";
																																}else{

																																} ?>
																															</a>
																														<?php }else{ ?>
							                                                <a href="#">35</a>
							                                              <?php } ?>
																														</li>
																														<li>
                                                              <?php if (count($data)>36){
																																if($data[36]["imgurl"]='NULL'){
																																	$imgurl="profile-icon.png";
																																}?>
																															<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																																<span>Name: {{$data[36]["name"]}}</span><br>
																																<span>ID: {{$data[36]["id"]}}</span><br>
																																<?php if($data[36]["referral_id"]==Auth::user()->id){
																																	echo "<span>DR</span>";
																																}else{

																																} ?>
																															</a>
																														<?php }else{ ?>
							                                                <a href="#">36</a>
							                                              <?php } ?>
																														</li>
																													</ul>
																												</li>
																												<li>
																													<?php if (count($data)>12){
																														if($data[12]["imgurl"]='NULL'){
																															$imgurl="profile-icon.png";
																														}?>
																													<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
																														<span>Name: {{$data[12]["name"]}}</span><br>
																														<span>ID: {{$data[12]["id"]}}</span><br>
																														<?php if($data[12]["referral_id"]==Auth::user()->id){
																															echo "<span>DR</span>";
																														}else{

																														} ?>
																													</a>
																												<?php }else{ ?>
					                                                <a href="#">12</a>
					                                              <?php } ?>
																													<ul>
																														<li>
                                                              <?php if (count($data)>37){
    																														if($data[37]["imgurl"]='NULL'){
    																															$imgurl="profile-icon.png";
    																														}?>
    																													<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
    																														<span>Name: {{$data[37]["name"]}}</span><br>
    																														<span>ID: {{$data[37]["id"]}}</span>
																																<br>
																																<?php if($data[37]["referral_id"]==Auth::user()->id){
																																	echo "<span>DR</span>";
																																}else{

																																} ?>
    																													</a>
																														<?php }else{ ?>
 						                                                 <a href="#">37</a>
 						                                               <?php } ?>
																														</li>
																														<li>
                                                              <?php if (count($data)>38){
    																														if($data[38]["imgurl"]='NULL'){
    																															$imgurl="profile-icon.png";
    																														}?>
    																													<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
    																														<span>Name: {{$data[38]["name"]}}</span><br>
    																														<span>ID: {{$data[38]["id"]}}</span><br>
																																<?php if($data[38]["referral_id"]==Auth::user()->id){
																																	echo "<span>DR</span>";
																																}else{

																																} ?>
    																													</a>
																														<?php }else{ ?>
							                                                <a href="#">38</a>
							                                              <?php } ?>
																														</li>
																														<li>
                                                              <?php if (count($data)>39){
    																														if($data[39]["imgurl"]='NULL'){
    																															$imgurl="profile-icon.png";
    																														}?>
    																													<a href="#"><img src="{{asset('storage/profile/')}}/{{$imgurl}}" width="50px" height="50px"/><br>
    																														<span>Name: {{$data[39]["name"]}}</span><br>
    																														<span>ID: {{$data[39]["id"]}}</span><br>
																																<?php if($data[39]["referral_id"]==Auth::user()->id){
																																	echo "<span>DR</span>";
																																}else{

																																} ?>
    																													</a>
																														<?php }else{ ?>
							                                                <a href="#">39`</a>
							                                              <?php } ?>
																														</li>
																													</ul>
																												</li>
																											</ul>
																										</ul>
																									</li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>

	            </div>
	            </div>


	            </div>


	        </div>
	      </div>
	    </div>
	 </div>

															</section>


	@include('inc.footer')


</body>
</html>
