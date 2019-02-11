@extends('fornt/master/allmaster')
@section('content')
            <!-- banner -->
            <main class="site-main">

<div class="columns container">
    <!-- Block  Breadcrumb-->
            
    <!-- <ol class="breadcrumb no-hide">
        <li><a href="#">Home    </a></li>
        <li class="active">Your shopping cart</li>
    </ol> -->
    <!-- Block  Breadcrumb-->
        <?php $i = 1;
        $total_price = 0;
        $session_id = Session::getId();
        $cartinfos = DB::table('carts')->where('session_id', $session_id)->get();
        // $sumwithoutOf = DB::table('carts')->where('session_id', $session_id)->sum('price');
      if(count($cartinfos)>0){
        $total_price_with_all = 0;
        foreach ($cartinfos as $cartinfo) {


            $total_price_with_all += ($cartinfo->price * $cartinfo->qty);

        }

        $total_price_with_offer = 0;
        foreach ($cartinfos as $cartinfo) {
            if ($cartinfo->offer > 1) {
                $offer_price = (($cartinfo->price * $cartinfo->qty) * ($cartinfo->offer / 100));

                $total_price_with_offer += (($cartinfo->price * $cartinfo->qty) - $offer_price);
                // if($cartinfo->location){
                //     // $total_price_with_offer +=60;
                // }else{
                //     // $total_price_with_offer +=100;
  
                // }
                

            } else {
                $total_price_with_offer += ($cartinfo->price * $cartinfo->qty);
                // if($cartinfo->location){
                //     $total_price_with_offer +=60;
                // }else{
                //     $total_price_with_offer +=100;
  
                // }
            }

        }


        ?>
         <!-- store order Total in session -->

         <?php 
        Session::put('order_total', $total_price_with_offer);
        ?>
         <?php if (count($cartinfos) > 0) { ?>
    <h2 class="page-heading">
        <span class="page-heading-title2">Shopping Cart Summary</span>
    </h2>
   

    <div class="page-content page-order">
       

        <div class="heading-counter warning">Your shopping cart contains:
            <span>{{count($cartinfos)}} Product</span>
        </div>
        <div class="order-detail-content">
            <div class="table-responsive">
                <table class="table table-bordered  cart_summary">
                    <thead>
                        <tr>
                            <th style="width: 17%;">ID#</th>
                            <th style="width: 15%;" class="cart_product">Product Image</th>
                            <th>Description</th>
                            <th>Offer</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th class="action"><i class="fa fa-trash-o"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($cartinfos as $cartinfo) { ?>
                        
                        <tr>
                        <td class="price">
                                <span>{{$i++}}</span>
                            </td>
                            <td class="cart_product">
                                <a href="#"><img alt="Product Image" src="/images/{{$cartinfo->product_image}}"></a>
                            </td>
                          <?php 
                            $prod_id = $cartinfo->product_id;
                            $single_prod = DB::table('tproducts')->where('id', $prod_id)->first();

                            ?>
                            <td class="cart_description">
                                <p class="product-name"><a >Brand : {{$single_prod->brand_name}} </a></p>
                                <small class="cart_ref">Generic Name: {{$single_prod->generic_name}}</small><br>
                                <small><a >Strength : {{$single_prod->strength}}</a></small><br>   
                                <small><a>Use For: {{$single_prod->userfor}}</a></small>
                            </td>

                            <td class="cart_avail"><?php if ($cartinfo->offer > 1) {
                                                        echo $cartinfo->offer;
                                                    } else {
                                                        echo '1';
                                                    } ?> %</td>
                            <td class="price"><span>{{$cartinfo->price}} TK</span></td>
                            <td class="qty">
                         
                               <input type="text" readonly name="quantity" min="1" value="{{$cartinfo->qty}}" class="form-control input-sm">                               <br>
                             
                                
                                 
                            </td>
                            
                            <td class="action">
                                <a href="/cart/item/delete/{{$cartinfo->id}}" onclick="return confirm('Are You Sure To delete ?')">Delete item</a>
                            </td>
                        </tr>
                    <?php 
                 $location_store =    $cartinfo->location;
                 Session::put('location_store', $location_store);

                } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                           
                            <td colspan="3">Total Price (Without Offer)</td>
                            <td colspan="2">{{$total_price_with_all}} TK</td>
                            <?php  Session::put('total_price_with_all',$total_price_with_all);  ?>
                        </tr> 
                        <tr>
                            
                            <td colspan="3"><strong>Total Price with offer + Service Charge </strong></td>
                            <td colspan="2"><strong>
                            <?php   
                     if(Session::get('location_store') == 0){
                        $total_price_with_offer = $total_price_with_offer + 100;
                      } elseif(Session::get('location_store') == 1){
                        $total_price_with_offer = $total_price_with_offer + 60;

                      }elseif(Session::get('location_store') == 2){
                        $total_price_with_offer = $total_price_with_offer + 130;

                      }
                            

             Session::put('total_order_amount_total', $total_price_with_offer);

                            ?>
                            {{$total_price_with_offer}} TK</strong></td>
                             
                        </tr>
                    </tfoot>    
                </table>
            </div>
            <div class="cart_navigation">
                <a href="/" class="prev-btn">Continue shopping</a>
                <a href="/cart/view" class="next-btn">Back To Card</a>
            </div>
        </div>
    </div>
            <?php 
        } else {
            echo '<h3 class="text text-center text-info">No Item Add Yet !</h3><br>';
        } ?>
    <br>
</div>



<!-- Display Shipping Method -->

 <h2 class="page-heading text text-center text-info">
        <span class="text text-center text-info">{{Session::get('total_offer_total')}} Shipping Check Out Method</span>
    </h2>
   <hr>
   <br>

                   <!-- /top tiles -->
         <div class="container" style="margin-left: 37%;">
         <form class="form-horizontal" method="POST" action="{{ route('place_order') }}">
                        {{ csrf_field() }}        
                        <ul class="shipping_method">
                            <li>
                                <p class="subcaption bold">Cash On Delivery</p>
                                <label for="payment_method"><input checked="" name="payment_method" value="HandDelivery" type="radio">Cash On Delivery</label>
                            </li>

                            <li>
                                <p class="subcaption bold">Check Out With Card</p>
                                <label for="radio_button_4"><input name="payment_method" value="MasterCard" type="radio"> Checkout With Card </label>
                            </li>
                            <li>
                                <input type="checkbox" required checked  name="checked">&nbsp; <a href="/terms-and-condition">agree terms & condition</a>
                            </li>
                        </ul>
                        <button type="submit" class="button btn-primary">Continue</button>
        </form>
                    </div>


   <!-- Display Shipping Details -->
   <br>
   <hr>
   <h2 class="page-heading text text-center text-info">
        <span class="text text-center text-info">{{Auth::user()->name}} Your Shipping Address</span>
    </h2>
   <hr>
   <br>

                   <!-- /top tiles -->
         <div class="container">
                       <form >
                       <ul>
                            <li class="row">
                                <div class="col-sm-6">
                                    <label for="name" class="required">House</label>
                                    <input class="input form-control" name="house" value="{{$shipping_info->house}}" readonly id="house" type="text">
                                </div>
                                <div class="col-sm-6">
                                    <label for="road" class="required">Road</label>
                                    <input name="road" class="input form-control" value="{{$shipping_info->road}}" readonly id="road" type="text">
                                </div>
                            </li>
                            <li class="row">
                                
                            <div class="col-sm-6">
                                    <label for="area" class="required">area</label>
                                    <input class="input form-control" name="area"value="{{$shipping_info->area}}" readonly id="area" type="text">
                                </div> 
                                <div class="col-sm-6">
                                    <label for="city" class="required">city</label>
                                    <input class="input form-control" name="city" value="{{$shipping_info->city}}" readonly id="city" type="text">
                                </div>
                            </li>
                            <li class="row"> 
           
                             <div class="col-sm-6">

                            <label for="zip" class="required">Zip Code </label>
                            <input class="input form-control" name="zip" value="{{$shipping_info->zip}}" readonly id="zip" type="text">

                            </div>
                            <div class="col-sm-6">
                                    <label for="phone" class="required">Phone</label>
                                    <input class="input form-control" name="phone" value="{{$shipping_info->phone}}" readonly  id="phone" type="text">
                                </div>

                            </li>
       
                           

                          <br>
                            <li>
                                <a href="/customer/shipping/view"  class="button">Edit</a>
                            </li>
                        </ul>
                       </form>
                   </div>
                  </div>
         
         </div>

         <br>
         <?php 
        } else {
            echo '<h3 class="text text-center text-info">No Item Add Yet !</h3><br>';
        } ?>
    <br>
</div>
         <hr>
         <br>


</main>
         <!-- /page content -->
         @stop