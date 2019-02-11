@extends('fornt/master/allmaster')
@section('content')
            <!-- banner -->
            <main class="site-main">

<div class="columns container">
   
        <?php $i = 1;
       
        $session_id = Session::getId();
        $whishlists = DB::table('wishlists')->where('session_id', $session_id)->get();

       
        ?>
         <?php if (count($whishlists) > 0) { ?>
    <h2 class="page-heading">
        <span class="page-heading-title2">Shopping Cart Summary</span>
    </h2>
   

    <div class="page-content page-order">
       

        <div class="heading-counter warning">Your Compare List contains:
            <span>{{count($whishlists)}} Product</span>
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
                    <?php foreach ($whishlists as $whishlist) { 
         $productinfo = DB::table('tproducts')->where('id', $whishlist->product_id)->first();
                        
                        ?>
                        
                        <tr>
                        <td class="price">
                                <span>{{$i++}}</span>
                            </td>
                            <td class="cart_product">
                                <img alt="Product Image" src="/images/{{$productinfo->img_one}}">
                            </td>
                          
                            <td class="cart_description">
                                <p class="product-name"><a >Brand : {{$productinfo->brand_name}} </a></p>
                                <small class="cart_ref">Generic Name: {{$productinfo->generic_name}}</small><br>
                                <small><a >Strength : {{$productinfo->strength}}</a></small><br>   
                                <small><a>Use For: {{$productinfo->userfor}}</a></small>
                            </td>

                            <td class="cart_avail"><?php if ($productinfo->offer > 1) {
                                                        echo $productinfo->offer;
                                                    } else {
                                                        echo '1';
                                                    } ?> %</td>
                            <td class="price"><span>{{$productinfo->price}} TK</span></td>
                            <td class="qty">
                               <form >
                               {{ csrf_field() }}

                               <input type="number" name="quantity" min="1" value="{{$productinfo->qty}}" class="form-control input-sm">                               <br>
                               </form>
                                
                                 
                            </td>
                            
                            <td class="action">
                                <a href="/compare/item/delete/{{$whishlist->id}}" onclick="return confirm('Are You Sure To delete ?')">Delete item</a>
                            </td>
                        </tr>
                    <?php 
                

                } ?>
                    </tbody>
                    <tfoot>
                       
                       
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