@extends('admin/main/master')
@section('content')
   <!-- page content -->
   <div id="printableArea" class="right_col"  id="print_out" role="main">
   <div class="container">
    <div class="row"  style="padding: 12px;margin: 8px;background: #fff;">
        <div class="col-12" >
            <div class="card">
                <div class="card-body p-0">
                    <div class="row p-5">
                        <div class="col-md-6">
                            <!-- <img src="http://via.placeholder.com/400x90?text=logo"> -->
                            <p class="font-weight-bold mb-1">Order Invoice #{{$id}}</p>
                            <p class="text-muted">Order Date: {{date('d-m-Y', strtotime($order_details->created_at))}}</p>
                        </div>

                        <div class="col-md-6 text-right">

                            <!-- <p class="font-weight-bold mb-1">Invoice #550</p>
                            <p class="text-muted">Due to: 4 Dec, 2019</p> -->
                        </div>
                    </div>
                    
                    <hr class="my-5">

                    <div class="row pb-5 p-5">
                    <div class="col-md-4">
                            <p class="font-weight-bold mb-4 well well-sm text-primary">Client Information</p>
                            <p class="mb-1">Name: {{$order_details->name}}</p>
                            <p class="mb-1">Email: {{$order_details->email}}</p>
                        </div><div class="col-md-4">
                            <p class="font-weight-bold mb-4 well well-sm text-primary">Shipping Information</p>
                            <p class="mb-1">Name: {{$order_details->name}}</p>
                            <p class="mb-1">House: {{$order_details->house}}</p>
                            <p class="mb-1">Road: {{$order_details->road}}</p>
                            <p class="mb-1">Area: {{$order_details->area}}</p>
                            <p class="mb-1">City: {{$order_details->city}}</p>
                            <p class="mb-1">Zip Code: {{$order_details->zip}}</p>
                            <p class="mb-1">Phone: {{$order_details->phone}}</p>
                        </div>
                       <?php 
                        $order_status = DB::table('orders')->where('id', $id)->first();

                        ?>
                        <div class="col-md-4 text-right">
                            <p class="font-weight-bold mb-4 well well-sm text-primary">Payment Details</p>
                            <p class="mb-1"><span class="text-muted">Total : </span> {{$order_details->order_total}}  TK</p>
                            <p class="mb-1"><span class="text-muted">Payment Method : </span> {{$order_details->payment_method}}</p>
                            <p class="mb-1"><span class="text-muted">Order Status : </span> {{$order_status->order_status}}</p>
                            <p class="mb-1"><span class="text-muted">Order Type : </span> {{$order_details->order_type}}</p>
                        
                        </div>
                    </div>
     <?php 

    $number_of_product = DB::table('order_details')->where('order_id', $id)->get();


    ?>

                    <div class="row p-5">
                    <h3 class="text text-primary text-center well well-sm ">Product Order List. Number Of Product  <span class="badge badge-light">{{count($number_of_product)}} </span></h3>
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th class="border-0 text-uppercase small font-weight-bold">SN</th>
                                    <th class="border-0 text-uppercase small font-weight-bold">Product ID</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Product Name</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Product Price</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Product QTY</th>
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
                                    
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$display_order_detail->product_id}}</td>
                                        <td>{{$display_order_detail->product_name}}</td>
                                        <td>{{$display_order_detail->product_price}}  TK</td>
                                        <td>{{$display_order_detail->product_quantity}}</td>
                                        <?php 
                                        $total_price_with_all += ($display_order_detail->product_price * $display_order_detail->product_quantity);
                                        ?>
                                       
                                    </tr>
                                <?php 
                            } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                    <div class="text-primary text-center">
                            <div class="mb-2">   Without Service Charge and Offer</div>
                            <div class="h2 font-weight-light">{{$total_price_with_all}} TK</div>
                        </div>
<!--
                        <div class="py-3 px-5 text-right">
                            <div class="mb-2">Discount</div>
                            <div class="h2 font-weight-light">10%</div>
                        </div> -->

                        <div class="text-success text-center">
                            <div class="mb-2"> Total Amount(With Offer and service charge)</div>
                            <div class="h2 font-weight-light text-success">{{$order_details->order_total}} TK</div>
                        </div>
                    </div>
                </div>
                <!-- <div class="text-light mt-5 mb-5 text-center small">by : <a class="text-info" target="_blank" href="#">company Name</a></div> -->
            </div>
            <input type="button" onclick="printDiv('printableArea')" value="Print Document" />

        </div>
       
    </div>

    
   
     <script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
     
     
}
     </script>
        <!-- /page content -->
        @stop