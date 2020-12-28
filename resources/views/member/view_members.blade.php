
@include('inc.header')
<link rel="stylesheet" href="{{asset('storage/hiten/css/app.css')}}">
<style>
	img{ width:45px; height:50px !important; margin-left:30px;}

	</style>
 <base href="{{asset('storage/hiten/')}}" />
</head>
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
<div class="wrapper">
@include('inc.topbar')
<!-- Left side column. contains the logo and sidebar -->
@include('inc.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> Net Sale Growth Report <small>Control panel</small> </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">
        member-net-sale-view
      </li>
    </ol>
  </section>



  <!-- Main content -->
  <section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-body" align="center">

   			<div class="entry-content">

            <div class="row" ng-app="amwayCalApp">
            <div class="span12" ng-view>

            </div>
            </div>


            </div>


        </div>
      </div>
    </div>
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


@include('inc.footer')

<script src="{{asset('storage/hiten/js/angular.min.js')}}"></script>
<script src="{{asset('storage/hiten/js/angular-route.min.js')}}"></script>
<script>
	var MemberID='{{ app('request')->input('id') }}';
	var BaseUrl='{{url('')}}';
</script>
<script src="{{asset('storage/hiten/js/app-min.js')}}"></script>

</body>
</html>
