@extends('admin/main/master');
@section('content')
   <!-- page content -->
   <div class="right_col" role="main">

 <?php 
if (!empty($corporate_orders)) { ?>
    
    <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 972px;">
                      <thead>
                        <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 149px;" aria-sort="ascending" aria-label="Order ID#: activate to sort column descending">Order ID#</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 231px;" aria-label=" Name: activate to sort column ascending"> Name</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 111px;" aria-label="Phone: activate to sort column ascending">Position </th>
                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 56px;" aria-label="City: activate to sort column ascending">Mobile </th>
                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 56px;" aria-label="Created At: activate to sort column ascending">Email </th>
                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 56px;" aria-label="Created At: activate to sort column ascending">Company Name  </th>
               
                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 56px;" aria-label="Created At: activate to sort column ascending">Action   </th>
                 
                      </thead>

                      <tbody>
                     <?php foreach ($corporate_orders as $corporate_order) {
                        if ($corporate_order->id % 2 != 0) { ?>
                     
                     <tr role="row" class="odd">

                        <td tabindex="0" class="sorting_1">{{$corporate_order->id}}</td>

                          <td>{{ $corporate_order->name }} </td>
                          <td>{{ $corporate_order->position }}  </td>
                          <td>{{$corporate_order->mobile}} </td>
                          <td>{{$corporate_order->email}} </td>
                          <td>{{$corporate_order->company_name}} </td>
                       <td> <a  href="/adminpanel/corporate/order/action/{{$corporate_order->id}}" onclick="return confirm('Are You Sure To delete');">Done!(Delete)</a> </td>
                         
                              
                          
                        </tr>
                        <?php 
                    } else { ?>


                        <tr role="row" class="even">
                          <td tabindex="0" class="sorting_1">{{$corporate_order->id}}</td>

                          <td>{{ $corporate_order->name }}  </td>
                          <td>{{ $corporate_order->position }}  </td>
                          <td>{{$corporate_order->mobile}} </td>
                          <td>{{$corporate_order->email}} </td>
                          <td>{{$corporate_order->company_name}} </td>
                       <td> <a  href="/adminpanel/corporate/order/action/{{$corporate_order->id}}" onclick="return confirm('Are You Sure To delete');">Done!(Delete)</a> </td>

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