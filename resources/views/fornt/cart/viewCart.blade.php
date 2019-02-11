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
                               <form action="{{route('update_card_by_user')}}" method="post">
                               {{ csrf_field() }}
                               <input type="hidden" name="id" value="{{$cartinfo->id}}">                               <br>

                               <input type="number" name="quantity" min="1" value="{{$cartinfo->qty}}" class="form-control input-sm">                               <br>
                               <input type="submit" value="Update" class="button btn-primary">
                               </form>
                                
                                 
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
                            <td rowspan="2" colspan="2">
                             <form action="{{route('update_card_location')}}" method="POST">
                               {{ csrf_field() }}
                               <input type="hidden" name="id" value="{{$cartinfo->id}}">                              
                               <input type="radio" <?php if(Session::get('location_store') == 1){echo 'checked'; } ?>  name="location" value="inside" > Inside  Dhaka                           
                               <input type="radio" name="location" <?php if(Session::get('location_store') == 0){echo 'checked'; } ?> value="outside" >   Outside Dhaka 
                               <input type="radio" name="location" <?php if(Session::get('location_store') == 2){echo 'checked'; } ?> value="emergency" >   Emergency <br>
                               <small class="text text-bold text-danger">service Inside Dhaka  60 Tk , Outside 100 Tk , Emergency 130 TK</small>                          
                               <input type="submit" value="Update" class="button btn-primary">
                               </form></td>
                            <td colspan="3">Total Price (Without Offer)</td>
                            <td colspan="2">{{$total_price_with_all}} TK</td>
                            <?php  Session::put('total_price_with_all',$total_price_with_all);  ?>
                        </tr>
                        <tr>
                            
                            <td colspan="3"><strong>Total Price with offer + Service Charge </strong></td>
                            <td colspan="2"><strong>
                           <?php   
                      if(Session::get('location_store') == 0){
                        $total_price_with_offer = $total_price_with_offer+100;
                      } elseif(Session::get('location_store') == 1){
                        $total_price_with_offer = $total_price_with_offer+60;

                      }elseif(Session::get('location_store') == 2){
                        $total_price_with_offer = $total_price_with_offer+130;

                      }
                            
                            ?>
                            {{$total_price_with_offer}} TK</strong></td>
                            <?php  Session::put('total_price_with_offer',$total_price_with_offer);  ?>
                        </tr>
                    </tfoot>    
                </table>
            </div>
            <div class="cart_navigation">
                <a href="/" class="prev-btn">Continue shopping</a>
                <a href="/process/cart" class="next-btn">Proceed to checkout</a>
            </div>
        </div>
    </div>
            <?php 
        } else {
            echo '<h3 class="text text-center text-info">No Item Add Yet !</h3><br>';
        } ?>
    <br>
</div>


</main>
         <!-- /page content -->
         @stop