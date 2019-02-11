@extends('fornt/master/allmaster')
@section('content')
            <!-- banner -->
            <br>
        
   <div class="container">
          <h1 class="jumbotron-heading text-center text-primary"><?php   
           if (Auth::user()) {
            $customer_name = Auth::user()->name;
            echo  $customer_name;

        } 
          ?> Your Shipping Address</h1>
          @if (Session::has('message'))
        <h4 class="text-info">{!! session('message') !!}</h4>
   @endif
          @if ( count( $errors ) > 0 )      
                @foreach ($errors->all() as $error)
            <p style="color:red">{{ $error }}</p>
            @endforeach
            <br>
            @endif
          <!-- /top tiles -->
         <div class="box-border">
                       <form action="{{route('update_customer_shipping_info')}}" method="POST">
                       {{ csrf_field() }}
                       <ul>
                         
                            <li class="row">
                                <div class="col-sm-6">
                                    <label for="name" class="required">House</label>
                                    <input class="input form-control" name="house" value="<?php if(!empty($shipping_info->house)){echo $shipping_info->house;}?>" required id="house" type="text">
                                </div>
                                <div class="col-sm-6">
                                    <label for="road" class="required">Road</label>
                                    <input name="road" class="input form-control"  value="<?php if(!empty($shipping_info->road)){echo $shipping_info->road;}?>"  required id="road" type="text">
                                </div>
                            </li>
                            <li class="row">
                                
                            <div class="col-sm-6">
                                    <label for="area" class="required">area</label>
                                    <input class="input form-control" name="area"  value="<?php if(!empty($shipping_info->area)){echo $shipping_info->area;}?>"  required id="area" type="text">
                                </div> 
                                <div class="col-sm-6">
                                    <label for="city" class="required">city</label>
                                    <input class="input form-control" name="city"  value="<?php if(!empty($shipping_info->city)){echo $shipping_info->city;}?>"  required id="city" type="text">
                                </div>
                            </li>
                            <li class="row"> 
           
                             <div class="col-sm-6">

                            <label for="zip" class="required">Zip Code </label>
                            <input class="input form-control" name="zip"  value="<?php if(!empty($shipping_info->zip)){echo $shipping_info->zip;}?>"  requred id="zip" type="text">

                            </div>
                            <div class="col-sm-6">
                                    <label for="phone" class="required">Phone</label>
                                    <input class="input form-control" name="phone" value="<?php if(!empty($shipping_info->phone)){echo $shipping_info->phone;}?>" required id="phone" type="text">
                                </div>

                            </li>
       
                           

                          <br>
                            <li>
                                <button type="submit" class="button">Update</button>
                            </li>
                        </ul>
                       </form>
                   </div>
                  </div>
         
         </div>
         <br>
         <!-- /page content -->
         @stop

               