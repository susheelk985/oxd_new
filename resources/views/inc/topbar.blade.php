 <header class="main-header">

    <!-- Logo -->

    <a href="{{ url('dashboard') }}" class="logo">

      <!-- mini logo for sidebar mini 50x50 pixels -->

      <span class="logo-mini"><b>Oxydyser</b></span>

      <!-- logo for regular state and mobile devices -->

      <span class="logo-lg"><b>Oxydyser</b></span>

    </a>

    <!-- Header Navbar: style can be found in header.less -->

    <nav class="navbar navbar-static-top">

      <!-- Sidebar toggle button-->

      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">

        <span class="sr-only">Toggle navigation</span>

      </a>



      <div class="navbar-custom-menu">

        <ul class="nav navbar-nav">



          <!-- User Account: style can be found in dropdown.less -->

          <?php
/*
            	$obj=&get_instance();

				$obj->load->model('UserModel');

 				$profile_url = $obj->UserModel->PictureUrl();

				$user=$obj->UserModel->GetUserData();
*/
			?>
      <?php
          if(Auth::user()->photo!=='NULL'){
            $imageURL=Auth::user()->photo;
          }else{
            $imageURL="profile-icon.png";
            //echo '<script type="text/javascript">alert("' . $imageURL . '")</script>';
          }

      ?>
          <li class="dropdown user user-menu">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <img src="{{asset('storage/profile/'.$imageURL) }}" class="user-image profileImgUrl" alt="User Image">

              <span class="hidden-xs NameEdt">{{ Auth::user()->name }}</span>

            </a>

            <ul class="dropdown-menu">

              <!-- User image -->

              <li class="user-header">



                <img src="{{asset('storage/profile/'.$imageURL) }}" class="img-circle profileImgUrl" alt="User Image">



                <p>

                  <span class="NameEdt">{{ Auth::user()->name }}</span> - {{ Auth::user()->role }}

                  <small>Member since <?=date('M. Y',strtotime( Auth::user()->created_at ) );?></small>

                </p>

              </li>

              <!-- Menu Body -->

              <!--<li class="user-body">

                <div class="row">

                  <div class="col-xs-4 text-center">

                    <a href="#">Followers</a>

                  </div>

                  <div class="col-xs-4 text-center">

                    <a href="#">Sales</a>

                  </div>

                  <div class="col-xs-4 text-center">

                    <a href="#">Friends</a>

                  </div>

                </div>



              </li>-->

              <!-- Menu Footer-->

              <li class="user-footer">

                <div class="pull-left">

                  <!--<a href="<?//=base_url('v3/profile');?>" class="btn btn-default btn-flat">Profile</a>-->

                </div>

                <div class="pull-right">

                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat logout-form" method="POST" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Sign out') }}</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                </div>

              </li>

            </ul>

          </li>



        </ul>

      </div>

    </nav>

  </header>
