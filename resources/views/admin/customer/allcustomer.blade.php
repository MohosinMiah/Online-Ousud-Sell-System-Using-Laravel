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

 <?php 
if (!empty($all_customer_lists)) { ?>
    
    <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 972px;">
                      <thead>
                        <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 149px;" aria-sort="ascending" aria-label="Order ID#: activate to sort column descending">Customer ID#</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 231px;" aria-label=" Name: activate to sort column ascending"> Name</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 111px;" aria-label="Phone: activate to sort column ascending">Phone</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 56px;" aria-label="Email: activate to sort column ascending">Email</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 56px;" aria-label="Created At: activate to sort column ascending">Created</th>
                      </thead>
                      <tbody>
                     <?php foreach ($all_customer_lists as $all_customer_list) {
                        if ($all_customer_list->id % 2 != 0) { ?>
                     
                     <tr role="row" class="odd">

                        <td tabindex="0" class="sorting_1">{{$all_customer_list->id}}</td>

                          <td><a href="/customer/details/{{$all_customer_list->id}}" title="Show Details">{{ $all_customer_list->name }} </a> </td>
                          <td>{{ $all_customer_list->phone }}  </td>
                          <td>{{$all_customer_list->email}} </td>
                          <td>{{date('d-m-Y', strtotime($all_customer_list->created_at))}} </td>
                         
                         
                          
                        </tr>
                        <?php 
                    } else { ?>


                        <tr role="row" class="even">
                        <td tabindex="0" class="sorting_1">{{$all_customer_list->id}}</td>
                        <td><a href="/customer/details/{{$all_customer_list->id}}" title="Show Details">{{ $all_customer_list->name }} </a> </td>
                        <td>{{ $all_customer_list->phone }}  </td>
                          <td>{{$all_customer_list->email}} </td>
                          <td>{{date('d-m-Y', strtotime($all_customer_list->created_at))}} </td>
                          
                         
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