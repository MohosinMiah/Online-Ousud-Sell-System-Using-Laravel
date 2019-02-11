  <!-- footer content -->
  <footer>
          <!-- <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div> -->
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content --> 
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ URL::asset('public/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ URL::asset('public/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ URL::asset('public/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{ URL::asset('public/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{ URL::asset('public/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{ URL::asset('public/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ URL::asset('public/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{ URL::asset('public/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{ URL::asset('public/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{ URL::asset('public/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{ URL::asset('public/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{ URL::asset('public/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{ URL::asset('public/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{ URL::asset('public/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{ URL::asset('public/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{ URL::asset('public/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{ URL::asset('public/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{ URL::asset('public/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{ URL::asset('public/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{ URL::asset('public/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{ URL::asset('public/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ URL::asset('public/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{ URL::asset('public/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- Datatables -->
<script src="{{ URL::asset('public/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ URL::asset('public/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('public/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ URL::asset('public/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('public/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{ URL::asset('public/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{ URL::asset('public/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ URL::asset('public/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{ URL::asset('public/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{ URL::asset('public/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ URL::asset('public/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{ URL::asset('public/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{ URL::asset('public/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{ URL::asset('public/vendors/pdfmake/build/pdfmake.min.js')}}"></script>

   <!--Load Js Editor  start  -->
   
      <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <!--<script>tinymce.init({ selector:'textarea' });</script>-->
  <script>
   tinymce.init({
  selector: 'textarea',
  height: 500,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code help wordcount'
  ],
  toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css']
});
      
  </script>
  
   <!--Load Js Editor End-->

    <!-- Custom Theme Scripts -->
    <script src="{{ URL::asset('public/build/js/custom.min.js')}}"></script>

	
  </body>
</html>
