<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
input[type=email], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

input[type=submit] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0; 
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}


button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 50%;
    }
}
</style>
</head>
<body>
<?php 

  $status = \Session::get('admin_roll');
  if ($status != 1) {
    header("Cache-Control: no-cache, must-revalidate");
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header("Content-Type: application/xml; charset=utf-8");
    echo '<meta http-equiv="refresh" content="1"/>';
    header('Location: /admin/login');
    exit;
    ?>
    
    <script>

window.location.href = '{{url("/admin/login")}}';

</script>
<?php 
} 

?>
   <!-- page content -->
   <div class="right_col container" role="main">
   <div class="container">
          <h1 class="jumbotron-heading text-center text-info"><span style="color:green;">Admin Login Form</span></h1>
          @if (Session::has('message'))
        <h4 class="text-info">{!! session('message') !!}</h4>
   @endif
          @if ( count( $errors ) > 0 )      
                @foreach ($errors->all() as $error)
            <p style="color:red">{{ $error }}</p>
            @endforeach
            @endif
          <!-- /top tiles -->
<form id="demo-form2"  action="{{route('register_admin')}}" method="POST" class="form-horizontal form-label-left"   enctype="multipart/form-data">
            {{ csrf_field() }}
 <div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Enter Your Name <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="name" name="name" placeholder="Enter Your Name" required="required" class="form-control col-md-7 col-xs-12">
  </div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Enter Your Email <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="email" id="email" name="email" placeholder="Enter Your Email" required="required" class="form-control col-md-7 col-xs-12">
  </div>
</div>


<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" >Enter Your PassWord <span class="required"> </span>
  </label>
  <div class="col-md-9 col-sm-9 col-xs-12">
 <input id="password" required="required" type="password" name="password" class="tags form-control"  >
</div>  
 </div>

 <div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" >Enter Your Roll <span class="required"> </span>
  </label>
  <select name="roll" required class="form-control" >
  <option  selected>Select Roll</option>
  <option value="1">Admin</option>
  <option value="2">Author</option>
</select>
</div>  
 </div>

 

<div class="ln_solid"></div>
<div class="form-group">
  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
    <input type="submit"  value="Add User" class="btn btn-success" style=" width: 50%;">
  </div>
</div>

</form>
     
</body>
</html>

       