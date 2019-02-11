
    @extends('fornt/master/allmaster')
@section('content')
   <!-- page content -->
   <div class="container" role="main">
  
   <?php 
    $customer_id = Auth::user()->id;

    $display_order_details = DB::table('orders')
      ->join('order_details', 'order_details.order_id', '=', 'orders.id')
      ->select('orders.*', 'order_details.*')
      ->where('orders.customer_id', '=', $customer_id)
      ->where('orders.id', '=', $id)
      ->get();

    ?>
   <div class="container">

    
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th class="border-0 text-uppercase small font-weight-bold">SN</th>
                                    <th class="border-0 text-uppercase small font-weight-bold">Product ID</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Product Name</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Product Price</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Product QTY</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Offer</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Order Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $i = 0;
                                $total_price_with_all = 0;  
                                // die($display_order_details);
                                foreach ($display_order_details as $display_order_detail) {
                                  $i++;
                                  ?>
                                    <!-- product_price -->
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$display_order_detail->product_id}}</td>
                                         <?php     
                                         $product_single_dtls = DB::table('tproducts')->where('id',$display_order_detail->product_id)->get();
                                         ?>
                                        <td>{{$display_order_detail->product_name}} {{Session::get('order_total_12')}}<?php    
                                        
                                        ?></td>
                                        <td>{{$display_order_detail->product_price}} TK</td>
                                        <td>{{$display_order_detail->product_quantity}}</td>
                                       <?php    
                             foreach ($product_single_dtls as $product_single_dtl) {

                                       ?> 
                                        <td>{{$product_single_dtl->offer}} % </td>
                             <?php    } ?>
                                        <td>{{date('d-m-Y', strtotime($display_order_detail->created_at))}}</td>
                                        <?php 
                                        ?>
                                       
                                    </tr>
                                <?php 
                              } ?>
                            
                                </tbody>
                            </table>
                        </div>
                        <a href="/customer/order/list" type="button" class="btn btn-info">Back To Order List</a>
     </div>
  
        <!-- /page content -->
        @stop