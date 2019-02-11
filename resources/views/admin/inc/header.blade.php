<!DOCTYPE html>
<html lang="en">
  <head>
  <?php 

  $status = \Session::get('admin_login');
  if ($status == false) {
    header("Cache-Control: no-cache, must-revalidate");
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header("Content-Type: application/xml; charset=utf-8");
    echo '<meta http-equiv="refresh" content="1"/>';
    header('Location: /haetywxisbwvfkixds/login');
    exit;
    ?>
    
        <script>

window.location.href = '{{url("/haetywxisbwvfkixds/login")}}';

</script>
<?php 
} 

?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Health Farma Admin Panel </title>
   
    
    <!-- Bootstrap -->
    <link href="{{ URL::asset('public/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ URL::asset('public/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ URL::asset('public/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ URL::asset('public/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{ URL::asset('public/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ URL::asset('public/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ URL::asset('public/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
 <!-- bootstrap-daterangepicker -->
 <link href="{{ URL::asset('public/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
  <!-- Datatables -->
  <link href="{{ URL::asset('public/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('public/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('public/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('public/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('public/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
  <script>
  tinymce.init({
    selector: '#mytextarea',
    plugins: 'link code',
    menubar : false
  });
  </script>
    <!-- Custom Theme Style -->
    <link href="{{ URL::asset('public/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/haetywxisbwvfkixds" class="site_title"><i class="fa fa-paw"></i> <span>Hello  {{\Session::get('admin_name')}} </span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <!-- <div class="profile_pic">
                <img src="/images/img.jpg" alt="..." class="img-circle profile_img">
              </div> -->
              <div class="profile_info">
                <span>Welcome,</span>
                <?php $status = \Session::get('admin_login');
                if ($status) {
                  ?>
                <h2>{{\Session::get('admin_name')}}</h2>
                <?php 
              } ?>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
            <!-- \Session::put('admin_login', true);
                \Session::put('admin_id', $admin_info->id);
                \Session::put('admin_name', $admin_info->name);
                \Session::put('admin_email', $admin_info->email); -->