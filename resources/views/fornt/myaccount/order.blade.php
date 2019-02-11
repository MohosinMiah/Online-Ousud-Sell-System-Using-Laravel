@extends('fornt/master/allmaster')
@section('content')
   <!-- page content -->

   <div class="container" role="main">
   <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 972px;">
                      <thead>
                        <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 149px;" aria-sort="ascending" aria-label="Order ID#: activate to sort column descending">Order ID#</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 111px;" aria-label="Order Total: activate to sort column ascending">Order Total</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 56px;" aria-label="Status: activate to sort column ascending">Status</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 111px;" aria-label="Details: activate to sort column ascending">Details</th>
                         </tr>
                      </thead>
                      <tbody>

                     <?php


                    foreach ($all_latest_orders_by_users as $all_latest_orders_by_user) {


                      ?>
                     
                   

                        <tr role="row" class="even">
                        <td tabindex="0" class="sorting_1">{{$all_latest_orders_by_user->id}}</td>

                        <td>{{ $all_latest_orders_by_user->order_total }} TK </td>
                        <?php    
                         
                         Session::put('order_total_'.$all_latest_orders_by_user->id, $all_latest_orders_by_user->order_total);

                        
                        ?>
                        <td>{{$all_latest_orders_by_user->order_status}} </td>
                        <td>
                        <!-- Button trigger modal -->
<a href="/customer/order/details/{{$all_latest_orders_by_user->id}}" class="btn btn-primary" >
  Details
</a>

                      </td>
                          
                         
                        </tr>
                        <?php 

                      } ?>

                <!-- Button trigger modal -->



                       </tbody>
                    </table>
                  <a href="/customer/order_info" class="btn btn-info" >Print Order Information</a>
    
     </div>
       
        <!-- /page content -->
        @stop