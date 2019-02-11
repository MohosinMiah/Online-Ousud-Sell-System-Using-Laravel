@extends('admin/main/master');
@section('content')
   <!-- page content -->
   <div class="right_col" role="main">
  

 
    <div class="col-md-12">
            <h3 class="text text-info">Search Order List By Date</h3>
            <div class="col-md-11 xdisplay_inputx form-group has-feedback">

            <form action="" method="GET" >
            <input type="date" name="from" required >
            <input type="date" name="to"  required>
            <input type="submit" value="Search">
            </form>
            </div></div>


<hr>

 <?php 
if (!empty($daily_orderss)) { ?>
    
    <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 972px;">
                      <thead>
                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 149px;" aria-sort="ascending" aria-label="Order ID#: activate to sort column descending">Order ID#</th><th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 231px;" aria-label="Customer Name: activate to sort column ascending">Customer Name</th><th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 111px;" aria-label="Order Total: activate to sort column ascending">Order Total</th><th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 56px;" aria-label="Status: activate to sort column ascending">Status</th>
                      </thead>
                      <tbody>
                     <?php foreach ($daily_orderss as $daily_order) {
                        if ($daily_order->id % 2 != 0) { ?>
                     
                     <tr role="row" class="odd">

                        <td tabindex="0" class="sorting_1">{{$daily_order->id}}</td>
<?php    
//Get Customer Name using customer id 
$cus_name = DB::table('users')->where('id', $daily_order->customer_id)->first();
?>
                          <td>{{$cus_name->name}}</td>
                          <td>{{ $daily_order->order_total }}  </td>
                          <td>{{$daily_order->order_status}} </td>
                         
                         
                          
                        </tr>
                        <?php 
                    } else { ?>


                        <tr role="row" class="even">
                        <td tabindex="0" class="sorting_1">{{$daily_order->id}}</td>
<?php    
//Get Customer Name using customer id 
$cus_name = DB::table('users')->where('id', $daily_order->customer_id)->first();
?>
                          <td>{{$cus_name->name}}</td>
                          <td>{{ $daily_order->order_total }}  </td>
                          <td>{{$daily_order->order_status}} </td>
                          
                         
                        </tr>
                        <?php 
                    }
                } ?>

                       </tbody>
                    </table>




    <?php

}


?>
         
     
    

        <!-- /page content -->
        @stop