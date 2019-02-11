@extends('admin/main/master');
@section('content')
   <!-- page content -->
   <div class="right_col" role="main">

 <?php 
if (!empty($newMessages)) { ?>
    
    <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 972px;">
                      <thead>
                        <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 149px;" aria-sort="ascending" aria-label="Order ID#: activate to sort column descending">Message ID#</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 231px;" aria-label=" Name: activate to sort column ascending"> Name</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 111px;" aria-label="Phone: activate to sort column ascending">Mobile </th>
                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 56px;" aria-label="City: activate to sort column ascending">Email </th>
                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 56px;" aria-label="Created At: activate to sort column ascending">Message </th>
                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 56px;" aria-label="Created At: activate to sort column ascending">Image  </th>

                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 56px;" aria-label="Created At: activate to sort column ascending">Created   </th>
                      </thead>
                      <tbody>
                     <?php foreach ($newMessages as $newMessage) {
                        if ($newMessage->id % 2 != 0) { ?>
                     
                     <tr role="row" class="odd">

                        <td tabindex="0" class="sorting_1">{{$newMessage->id}}</td>

                          <td>{{ $newMessage->name }} </td>
                          <td>{{ $newMessage->mobile }}  </td>
                          <td>{{$newMessage->email}} </td>
                          <td>{{$newMessage->message}} </td>
                          <?php if($newMessage->image){?>
                          <td>{{$newMessage->image}} </td>
                          <?php }else{
                           
                          } ?>
                          
                          <td>{{date('D-M-Y', strtotime($newMessage->created_at))}} </td>
                         
                         
                          
                        </tr>
                        <?php 
                    } else { ?>


                        <tr role="row" class="even">
                          <td tabindex="0" class="sorting_1">{{$newMessage->id}}</td>

                        <td>{{ $newMessage->name }} </td>
                          <td>{{ $newMessage->mobile }}  </td>
                          <td>{{$newMessage->email}} </td>
                          <td>{{$newMessage->message}} </td>
                          <?php if($newMessage->image){?>
                          <td>{{$newMessage->image}} </td>
                          <?php }else{
                           
                          } ?>
                          
                          <td>{{date('D-M-Y', strtotime($newMessage->created_at))}} </td>
                         
                         
                         
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