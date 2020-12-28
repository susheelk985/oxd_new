<footer class="main-footer">

    <div class="pull-right hidden-xs">

      <b>Version</b> 1.0

    </div>



     <strong>  Copyright © Oxydyser Pvt. Ltd. 2020 <!--Powered by--></strong>

<!--<a rel="nofollow" href="#" target="_blank">Hiten Pingolia</a>-->





  </footer>





    <!-- Control Sidebar -->

   <!-- /.control-sidebar -->

  <!-- Add the sidebar's background. This div must be placed

       immediately after the control sidebar -->

  <div class="control-sidebar-bg"></div>

</div>

<!-- ./wrapper -->











  <!-- jQuery 3 -->

<script src="{{ asset('storage/components/jquery/dist/jquery.min.js') }}"></script>

<!-- Bootstrap 3.3.7 -->

<script src="{{ asset('storage/components/bootstrap/dist/js/bootstrap.min.js') }}"></script>



<script src="{{ asset('storage/components/PACE/pace.min.js') }}"></script>

<!-- SlimScroll -->

<script src="{{ asset('storage/components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- FastClick -->

<script src="{{ asset('storage/components/fastclick/lib/fastclick.js') }}"></script>

<!-- AdminLTE App -->

<script src="{{ asset('storage/dist/js/adminlte.min.js') }}"></script>

<!-- AdminLTE for demo purposes -->

<script src="{{ asset('storage/dist/js/demo.js') }}"></script>

<script>

  $(document).ready(function () {

    $('.sidebar-menu').tree()

  })

  $(document).ajaxStart(function () {

    Pace.restart();

  });

</script>
