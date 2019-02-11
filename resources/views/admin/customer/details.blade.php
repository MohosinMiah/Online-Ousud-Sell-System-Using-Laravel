@extends('admin/main/master');
@section('content')
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
<div class="right_col" role="main">
   <div class="container">
   <h3 class="text text-info">Customer Details Information</h3>
                       <form action="{{route('register_customer_shipping_info')}}" method="POST">
                       {{ csrf_field() }}
                       <ul>
                       <div class="row">
                                <div class="col-sm-6">
                                    <label for="name" class="readonly">Customer Name</label>
                                    <input class="input form-control" name="house" value="{{$all_customer_lists->name}}" readonly id="house" type="text">
                                </div>
                                <div class="col-sm-6">
                                    <label for="road" class="readonly">Email</label>
                                    <input name="road" class="input form-control" value="{{$all_customer_lists->email}}" readonly id="road" type="text">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="name" class="readonly">House</label>
                                    <input class="input form-control" name="house" value="{{$all_customer_lists->house}}" readonly id="house" type="text">
                                </div>
                                <div class="col-sm-6">
                                    <label for="road" class="readonly">Road</label>
                                    <input name="road" class="input form-control" value="{{$all_customer_lists->road}}" readonly id="road" type="text">
                                </div>
                            </div>
                            <div class="row">
                                
                            <div class="col-sm-6">
                                    <label for="area" class="readonly">area</label>
                                    <input class="input form-control" name="area" value="{{$all_customer_lists->area}}" readonly id="area" type="text">
                                </div> 
                                <div class="col-sm-6">
                                    <label for="city" class="readonly">city</label>
                                    <input class="input form-control" name="city" value="{{$all_customer_lists->city}}" readonly id="city" type="text">
                                </div>
                            </div>
                            <div class="row"> 
           
                             <div class="col-sm-6">

                            <label for="zip" class="readonly">Zip Code </label>
                            <input class="input form-control" name="zip" value="{{$all_customer_lists->zip}}" readonly id="zip" type="text">

                            </div>
                            <div class="col-sm-6">
                                    <label for="phone" class="readonly">Phone</label>
                                    <input class="input form-control" name="phone" value="{{$all_customer_lists->phone}}" readonly id="phone" type="text">
                                </div>

                            </div>
       
                           

                          <br>
                            <div>
                                <a href="/customer/list" class="button">Back</a>
                            </div>
                        </ul>
                       </form>
             
     
        <!-- /page content -->
        @stop