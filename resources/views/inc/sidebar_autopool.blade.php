<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <?php
            if(Auth::user()->photo!=='NULL'){
              $imageURL=Auth::user()->photo;
            }else{
              $imageURL="profile-icon.png";

            }

        ?>
        <img src="{{asset('storage/profile/'.$imageURL) }}" class="img-circle profileImgUrl" alt="User Image">
      </div>
      <div class="pull-left info">
        <p class="NameEdt">{{Auth::user()->name}}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->

    <br>
    <ul class="sidebar-menu" data-widget="tree">
      <div class="header" style="color: white;" align="center">MAIN NAVIGATION</div><br>

      <li class="{{ request()->is('dashboard') ? 'active' : '' }}"><a href="{{ url('dashboard') }}" ><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

         <?php if(Auth::user()->role == 'Customer'){

            // $id=App\Models\OuthModel::first()->Encrypt('9');
            function Encryptor($action, $string) {
                $output = false;

                $encrypt_method = "AES-256-CBC";
                //pls set your unique hashing key
                $secret_key = 'hitenVkuld%:bTXz,3r>6|FW#!7eSs>vM~n+48~{Mh$#A4p).)#wV3^_y-B.6WCar=b4.';
                $secret_iv = '3w8XD|r@n:nxp|oml]nw$-KEc|rT$H).(~ &`gnV!vD0vs|?r]#Zdr-qRlOV@&#6';

                // hash
                $key = hash('sha256', $secret_key);

                // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
                $iv = substr(hash('sha256', $secret_iv), 0, 16);

                //do the encyption given text/string/number
                if( $action == 'encrypt' ) {
                  $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
                  $output = base64_encode($output);
                }
                else if( $action == 'decrypt' ){
                  //decrypt the given text/string/number
                  $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
                }

                return $output;
              }
              $id=Encryptor('encrypt',Auth::user()->id);
              $id1=Auth::user()->id;
              //echo "<script type='text/javascript'>alert('$id');</script>";
              if($plans_Details[0]->id==888001){
      ?>

          <li class="{{ request()->is('member_net_sale_view') ? 'active' : '' }}">
          <!--<a href="<?//=base_url('v3/member-net-sale-view-chart?id='.$id.'#!/country/india');?>">{{url('member_net_sale_view?id='.$id.'#!/country/india')}}-->
          <a href="/genealogy">
          <i class="fa fa-users"></i>Network List</a></li>
          <li class="{{ request()->is('gen_invoice') ? 'active' : '' }}">
         <a href="{{url('gen_invoice/down/'.$id1.'')}}">
         <i class="fa fa-download"></i>Download Invoice</a></li>
          <li class="treeview">
             <a href="#">
               <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-wallet" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z"/>
</svg> <span>&nbsp;Wallet</span>
               <span class="pull-right-container">
                 <i class="fa fa-angle-left pull-right"></i>
               </span>
             </a>
             <ul class="treeview-menu">
               <li><a href="{{url('/e-pin')}}">E-PIN</a></li>
               <li><a href="{{url('/e-wallet')}}">E-Wallet</a></li>
             </ul>
         </li>
       <?php }else if($plans_Details[0]->id==888002){?>
         <li class="{{ request()->is('gen_invoice') ? 'active' : '' }}">
        <a href="{{url('gen_invoice/down/'.$id1.'')}}">
        <i class="fa fa-download"></i>Download Invoice</a></li>
      <?php }
          if(count($plans_Details)>1){

      ?>
      <li class="treeview"><a href=""><span>Plan</span><span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span></a>
      <ul class="treeview-menu">
        @foreach($plans_Details as $plans)
        <li><a href="{{url('/dashboard/plans/'.$plans->id.'')}}">{{$plans->name}}</a></li>
        @endforeach
      </ul>
      </li>
    <?php }else{} ?>

       <?php }else if(Auth::user()->role == 'Admin'){?>
           <li class="{{request()->is('e-pin-requests') ? 'active' : ''}}"><a href="{{url('/e-pin-requests')}}">E-PIN Requests</a></li>

       <?php } ?>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
