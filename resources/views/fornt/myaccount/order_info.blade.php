@extends('fornt/master/allmaster')
@section('content')
   <!-- page content -->
   <script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script>
<div id="div1">
   <div class="container" role="main">
       <h3 class="text text-center text-primary">Dear,{{Auth::user()->name}} . Your Order Deatils</h3>
       
        <strong class="logo center">
                                <?php    
  
  $logo = DB::table('logos')->where('id',1)->first();
   
  ?>

            <img src="/images/{{$logo->image}}" alt="logo">
            <p class="text-danger">NB:Ousud is not replaceable</p>
                            </strong>
       
   <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 972px;">
                      <thead>
                        <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 149px;" aria-sort="ascending" aria-label="Order ID#: activate to sort column descending">Order ID#</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 111px;" aria-label="Order Total: activate to sort column ascending">Order Total</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 56px;" aria-label="Status: activate to sort column ascending">Status</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 111px;" aria-label="Details: activate to sort column ascending">Created At</th>
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
                             <td>{{$all_latest_orders_by_user->created_at}} </td>

                          
                         
                        </tr>
                        <?php 

                      } ?>

                <!-- Button trigger modal -->



                       </tbody>
                    </table>
                  

     </div>
     </div>
     <div class="container">
          <a href="/customer/order/list" class="btn btn-info" >Back</a>
                          <button onclick="printContent('div1')" class="btn btn-primary" >Print Content</button>
     </div>
        <!-- /page content -->
        @stop