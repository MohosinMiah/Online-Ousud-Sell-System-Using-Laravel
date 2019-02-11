@extends('fornt/master/master')
@section('content')
            <!-- banner -->
            <div class="block-banner-main-opt4">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="row">

                                <div class="col-sm-5">
                                    <div class="description description1">
                                        <span class="title">How to Order</span>
                                        <span class="des">FB/SMS/Email | Full Instructions</span>
                                        <a href="/how_to_pace_order" class="btn btn-shop-now">Click here</a>
                                    </div>

                                </div>

                                <div class="col-sm-7">
                                    <a href="#" class="box-img"><img src="images/media/index4/banner-main1.jpg" alt="banner-main"></a>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">

                                <div class="col-sm-5">
                                    <div class="description description2">
                                        <span class="title">Order on Facebook</span>
                                        
                                        <a href="https://www.facebook.com/" class="btn btn-shop-now">Click here</a>
                                    </div>

                                </div>

                                <div class="col-sm-7">
                                    <a href="#" class="box-img"><img src="images/media/index4/banner-main2.jpg" alt="banner-main"></a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div><!-- banner -->


     <!--  ********************  HOT OFFER *********************************** -->
                <!--  ********************  HOT OFFER *********************************** -->
               
                <div class="block-floor-products block-floor-products-opt3 floor-products2" >
                    <div class="container">
                        <!-- title -->
                        <div class="block-title ">
                            <span class="title">HOT OFFER</span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                               
                            </div>
                        </div>

                        <div class="block-content">

                            <!-- banner -->
                            <div class="col-banner">
                                <a href="#" class="box-img">
                                    <img src="images/media/index3/baner-floor2.png" alt="baner-floor">
                                    <div class="des"><span>TOP SELLING MEDICINE</span></div>
                                </a>
                                
                            </div>

                            <!-- tab product -->
                            <div class="col-products tab-content">

                             

                                <!-- tab 2--> 
                                <div class="tab-pane active in  fade" id="floor2-2" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="8" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                     <?php 


                                    $hot_products = DB::table('tproducts')->where('tproducts.offer', '>', 1)->get();
                                    foreach ($hot_products as $hot_product) {
                                        ?>
                                        
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="/display/product/details/{{$hot_product->id}}"><img alt="product name" src="/images/{{$hot_product->img_one}}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="/addTowishlist/{{$hot_product->id}}" title="Wish List"><span>wishlist</span></a>
                                                        <a class="btn btn-quickview" href="/display/product/details/{{$hot_product->id}}" title="Product Details"><span>quickview</span></a>
                                                    </div>
                                                    <a  href="/addTocart/{{$hot_product->id}}" class="btn btn-cart"><span>Add to Cart</span></a>
                                                    
                                                </div>

                                                 <!-- Check Offer is available or not -->
                                                 <?php if ($hot_product->offer > 1) { ?>
                                                <span class="product-item-label label-sale-off">{{ $hot_product->offer}} % <span>off</span></span>
                                                <?php 
                                            } ?>
                                               
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="/display/product/details/{{$hot_product->id}}">{{$hot_product->brand_name}}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">{{$hot_product->price}} TK</span>
                                                            <!-- <span class="old-price">$52.00</span> -->
                                                     
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <!-- <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
                                    } ?>

                                      
                                    </div>
                                </div> 

                               
                            </div>

                        </div>

                    </div>
                </div>
                <!--  ********************  NEW ARRIVALS IN  *********************************** -->
                <!--  ********************  NEW ARRIVALS IN *********************************** -->

                <!-- block -floor -products / floor 1 -->
                <div class="block-floor-products block-floor-products-opt3 floor-products1" >
                    <div class="container">
                        <!-- title -->
                        <div class="block-title ">
                            <span class="title">NEW ARRIVALS IN</span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" >
                                    <ul  >
                                        <li role="presentation" class="active"><a href="#floor1-1"  role="tab" data-toggle="tab">All   </a></li>
                                         <!-- Load Latest Top Category  -->
                                          <?php 
                                            $newarrivalcategorys = DB::table('categories')->limit(5)->get();
                                            foreach ($newarrivalcategorys as $newarrivalcategory) {
                                                ?>
                                        <li role="presentation"><a href="#floor1-{{$newarrivalcategory->id+1}}"  role="tab" data-toggle="tab">{{$newarrivalcategory->title }}  </a></li> 
                                    <?php 
                                } ?>
                                        <!-- <li role="presentation"><a href="#floor1-3"  role="tab" data-toggle="tab"> Bags </a></li>
                                        <li role="presentation"><a href="#floor1-4"  role="tab" data-toggle="tab">SHOES </a></li>
                                        <li role="presentation"><a href="#floor1-5"  role="tab" data-toggle="tab">GLASSES</a></li>  -->
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="block-content">

                            <!-- banner -->
                            <div class="col-banner">
                                <a href="#" class="box-img">
                                    <img src="images/media/index3/baner-floor3.jpg" alt="baner-floor">
                                    <div class="des"><span>TOP SELLING MEDICINE</span></div>
                                </a>
                                
                            </div>

                            <!-- tab product -->
                            <div class="col-products tab-content">

                                <!-- tab 1 -->
                                <div class="tab-pane active in  fade " id="floor1-1" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="8" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                    <?php  
                        //********** New Arrival 15 Products ***********************************
                                    $newarrivalallProducts = DB::table('tproducts')->limit(15)->get();
                                    foreach ($newarrivalallProducts as $newarrivalallProduct) {

                                        ?>
                                    
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="/display/product/details/{{$newarrivalallProduct->id}}"><img alt="product name" src="/images/{{$newarrivalallProduct->img_one}}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="/addTowishlist/{{$newarrivalallProduct->id}}" title="Wish List"><span>wishlist</span></a>
                                                     <!-- <a class="btn btn-compare" href="/addTocompare/{{$newarrivalallProduct->id}}" title="Compare List"><span>compare</span></a>                             <a class="btn btn-compare" href="#"><span>compare</span></a> -->
                                                        <a class="btn btn-quickview" href="/display/product/details/{{$newarrivalallProduct->id}}" title="Product Details"><span>quickview</span></a>
                                                    </div>
                                                    <a  href="/addTocart/{{$newarrivalallProduct->id}}" class="btn btn-cart"><span>Add to Cart</span></a>
                                                    
                                                </div>
                                                <!-- Check Offer is available or not -->
                                                <?php if ($newarrivalallProduct->offer > 1) { ?>
                                                <span class="product-item-label label-sale-off">{{$newarrivalallProduct->offer}}% <span>off</span></span>
                                                <?php 
                                            } ?>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="/display/product/details/{{$newarrivalallProduct->id}}">{{$newarrivalallProduct->generic_name}}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">{{$newarrivalallProduct->price}} TK</span>
                                                            <!-- <span class="old-price">$52.00</span> -->
                                                        </div>
                                                        <!-- Check Offer is available or not -->
                                                        <?php if ($newarrivalallProduct->offer > 1) { ?>
                                                        <!-- <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        <?php 
                                                    } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                               <?php 
                            } ?>
                                       
                                    </div>
                                </div>
  <?php $newarrivalcategorys = DB::table('categories')->limit(5)->get();
    foreach ($newarrivalcategorys as $newarrivalcategory) {
        ?>
                                <!-- tab 2-->
                                <div class="tab-pane  fade" id="floor1-{{$newarrivalcategory->id+1}}" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="8" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                    <?php  
                        //********** New Arrival From First Category Products ***********************************
                                    $newarrivalallProductOnes = DB::table('tproducts')->limit(10)->where('cat_id', $newarrivalcategory->id)->get();
                                    foreach ($newarrivalallProductOnes as $newarrivalallProductOne) {

                                        ?>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="/display/product/details/{{$newarrivalallProduct->id}}"><img alt="product name" src="/images/{{$newarrivalallProductOne->img_one}}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="/addTowishlist/{{$newarrivalallProduct->id}}" title="Wish List"><span>wishlist</span></a>
                                                     <!-- <a class="btn btn-compare" href="/addTocompare/{{$newarrivalallProduct->id}}" title="Compare List"><span>compare</span></a>                             <a class="btn btn-compare" href="#"><span>compare</span></a> -->
                                                        <a class="btn btn-quickview" href="/display/product/details/{{$newarrivalallProduct->id}}" title="Product Details"><span>quickview</span></a>
                                                    </div>
                                                    <a  href="/addTocart/{{$newarrivalallProduct->id}}" class="btn btn-cart"><span>Add to Cart</span></a>
                                                    
                                                </div>

                                                 <!-- Check Offer is available or not -->
                                                 <?php if ($newarrivalallProductOne->offer > 1) { ?>
                                                <span class="product-item-label label-sale-off">{{$newarrivalallProductOne->offer}}% <span>off</span></span>
                                                <?php 
                                            } ?>
                                               
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="/display/product/details/{{$newarrivalallProduct->id}}">{{$newarrivalallProductOne->brand_name}}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">{{$newarrivalallProductOne->price}} TK</span>
                                                            <!-- <span class="old-price">$52.00</span> -->
                                                        </div>
                                                        <!-- <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                               <?php 
                            } ?>
                                      
                                    </div>
                                </div>
                               <?php 
                            } ?>
                              
                               
                            </div>

                        </div>

                    </div>
                </div><!-- block -floor -products / floor 1-->


<!-- TOP SELLERS IN *************************************************** -->


<!-- TOP SELLERS IN ********************************* -->
                <!-- block -floor -products / floor 2 -->
                <div class="block-floor-products block-floor-products-opt3 floor-products2" >
                    <div class="container">
                        <!-- title -->
                        <div class="block-title ">
                            <span class="title">TOP SELLING IN</span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                             
                            </div>
                        </div>

                        <div class="block-content">

                            <!-- banner -->
                            <div class="col-banner">
                                <a href="#" class="box-img">
                                    <img src="images/media/index3/baner-floor2.jpg" alt="baner-floor">
                                    <div class="des"><span>TOP SELLING MEDICINE</span></div>
                                </a>
                                
                            </div>

                            <!-- tab product -->
                            <div class="col-products tab-content">

                             

                                <!-- tab 2--> 
                                <div class="tab-pane active in  fade" id="floor2-2" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="8" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                     <?php 

                                    $top_seller_product_ids = DB::table('order_details')->select('order_details.product_id')->distinct()->get();

                                    foreach ($top_seller_product_ids as $top_seller_product_id) {
                                        $top_seller_product = DB::table('tproducts')->where('id', $top_seller_product_id->product_id)->first();

                                        ?>
                                        
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="/display/product/details/{{$top_seller_product->id}}"><img alt="product name" src="/images/{{$top_seller_product->img_one}}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="/addTowishlist/{{$top_seller_product->id}}" title="Wish List"><span>wishlist</span></a>
                                                     <!-- <a class="btn btn-compare" href="/addTocompare/{{$newarrivalallProduct->id}}" title="Compare List"><span>compare</span></a>                             <a class="btn btn-compare" href="#"><span>compare</span></a> -->
                                                        <a class="btn btn-quickview" href="/display/product/details/{{$top_seller_product->id}}" title="Product Details"><span>quickview</span></a>
                                                    </div>
                                                    <a  href="/addTocart/{{$top_seller_product->id}}" class="btn btn-cart"><span>Add to Cart</span></a>
                                                    
                                                </div>

                                                 <!-- Check Offer is available or not -->
                                                 <?php if ($top_seller_product->offer > 1) { ?>
                                                <span class="product-item-label label-sale-off">{{ $top_seller_product->offer}} % <span>off</span></span>
                                                <?php 
                                            } ?>
                                               
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="/display/product/details/{{$top_seller_product->id}}">{{$top_seller_product->brand_name}}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">{{$top_seller_product->price}} TK</span>
                                                            <!-- <span class="old-price">$52.00</span> -->
                                                     
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <!-- <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
                                    } ?>

                                      
                                    </div>
                                </div> 

                               
                            </div>

                        </div>

                    </div>
                </div><!-- block -floor -products / floor 2-->

                <!-- banner -->
                <div class="block-banner-lag-opt3  effect-banner1">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <a class="box-img" href="#"><img alt="banner" src="images/media/index4/banner1-1.png"></a>
                            </div>
                            <div class="col-sm-6">
                                <a class="box-img" href="#"><img alt="banner" src="images/media/index4/banner1-2.jpg"></a>
                            </div>
                        </div>
                    </div>
                </div><!-- banner -->

<!-- special *************************************************** -->


<!-- special ********************************* -->

                <!-- Sesion 3333 -->
                <div class="block-floor-products block-floor-products-opt3 floor-products3" >
                    <div class="container">
                        <!-- title -->
                        <div class="block-title ">
                            <span class="title">SPECIAL PRODUCTS</span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" >
                                    <ul  >

                                        <li role="presentation" ><a href="#floor3-1"  role="tab" data-toggle="tab">All   </a></li>
                                        <!-- Load Latest Top Category  -->
                                        <?php 
                                        $newarrivalcategorys = DB::table('categories')->limit(5)->get();
                                        foreach ($newarrivalcategorys as $newarrivalcategory) {
                                            ?>
                                     <li role="presentation"><a href="#floor3-{{$newarrivalcategory->id+1}}"  role="tab" data-toggle="tab"> {{$newarrivalcategory->title}}   </a></li>

                                    <?php 
                                } ?>
                                       
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="block-content">

                            <!-- banner -->
                            <div class="col-banner">
                                <a href="#" class="box-img">
                                    <img src="images/media/index3/baner-floor2.jpg" alt="baner-floor">
                                    <div class="des"><span>TOP SELLING MEDICINE</span></div>
                                </a>
                                
                            </div>

                            <!-- tab product -->
                            <div class="col-products tab-content">
                             <?php



                            ?>
                                
                                <div class="tab-pane active in  fade " id="floor3-1" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="8" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                      <?php 
                                        foreach ($newarrivalcategorys as $newarrivalcategory) {
                                    
                                        //********** Special New Arrival 15 Products ***********************************
                                            $newarrivalallProducts = DB::table('tproducts')->limit(15)->get();
                                            foreach ($newarrivalallProducts as $newarrivalallProduct) {


                                                ?>
                                          <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="/display/product/details/{{$newarrivalallProduct->id}}"><img alt="product name" src="/images/{{$newarrivalallProduct->img_one}}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="/addTowishlist/{{$newarrivalallProduct->id}}" title="Wish List"><span>wishlist</span></a>
                                                     <!-- <a class="btn btn-compare" href="/addTocompare/{{$newarrivalallProduct->id}}" title="Compare List"><span>compare</span></a>                             <a class="btn btn-compare" href="#"><span>compare</span></a> -->
                                                        <a class="btn btn-quickview" href="/display/product/details/{{$newarrivalallProduct->id}}" title="Product Details"><span>quickview</span></a>
                                                    </div>
                                                    <a  href="/addTocart/{{$newarrivalallProduct->id}}" class="btn btn-cart"><span>Add to Cart</span></a>
                                                    
                                                </div>
                                                <!-- Check Offer is available or not -->
                                                <?php if ($newarrivalallProduct->offer > 1) { ?>
                                                <span class="product-item-label label-sale-off">{{$newarrivalallProduct->offer}}% <span>off</span></span>
                                                <?php 
                                            } ?>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="/display/product/details/{{$newarrivalallProduct->id}}">{{$newarrivalallProduct->brand_name}}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">{{$newarrivalallProduct->price}} TK</span>
                                                            <!-- <span class="old-price">$52.00</span> -->
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <!-- <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                    <?php 
                                                }
                                            } ?>
                                       
                                    </div>
                                </div>
                                <?php 
                                foreach ($newarrivalcategorys as $newarrivalcategory) {
                                    
                                        //********** Special New Arrival rest if category  Products ***********************************
                                    $newarrivalallProducts = DB::table('tproducts')->where('cat_id', $newarrivalcategory->id)->limit(15)->get();


                                    ?>
                                <!-- tab 2-->
                                <div class="tab-pane   fade" id="floor3-{{$newarrivalcategory->id+1}}" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="8" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
<?php 

foreach ($newarrivalallProducts as $newarrivalallProduct) {

    ?>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="/images/{{$newarrivalallProduct->img_one}}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="/addTowishlist/{{$newarrivalallProduct->id}}" title="Wish List"><span>wishlist</span></a>
                                                     <!-- <a class="btn btn-compare" href="/addTocompare/{{$newarrivalallProduct->id}}" title="Compare List"><span>compare</span></a>                             <a class="btn btn-compare" href="#"><span>compare</span></a> -->
                                                        <a class="btn btn-quickview" href="/display/product/details/{{$newarrivalallProduct->id}}" title="Product Details"><span>quickview</span></a>
                                                    </div>
                                                    <a  href="/addTocart/{{$newarrivalallProduct->id}}" class="btn btn-cart"><span>Add to Cart</span></a>
                                                    
                                                </div>
                                                <!-- Check Offer is available or not -->
                                                <?php if ($newarrivalallProduct->offer > 1) { ?>
                                                <span class="product-item-label label-sale-off">{{$newarrivalallProduct->offer}}% <span>off</span></span>
                                                <?php 
                                            } ?>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="/display/product/details/{{$newarrivalallProduct->id}}">{{$newarrivalallProduct->brand_name}}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">{{$newarrivalallProduct->price}}</span>
                                                            <!-- <span class="old-price">$52.00</span> -->
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <!-- <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php 
                            } ?>
                                    </div>
                                </div>
                                <?php 
                            } ?>
                                
                               
                                </div>
                </div>   

                    </div>
                </div><!-- block -floor -products / floor 3-->

              

                <div class="clearfix"></div>

            </div>



<!--  ********************  NEW ARRIVALS IN Surgical Item*********************************** -->

                <!-- block -floor -products / floor 1 -->
                <div class="block-floor-products block-floor-products-opt3 floor-products1" >
                    <div class="container">
                        <!-- title -->
                        <div class="block-title ">
                            <span class="title">SERGICAL ITEM</span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" >
                                  
                                </div>
                            </div>
                        </div>

                        <div class="block-content">

                            <!-- banner -->
                            <div class="col-banner">
                                <a href="#" class="box-img">
                                    <img src="images/media/index3/baner-floor3.jpg" alt="baner-floor">
                                    <div class="des"><span>TOP SELLING MEDICINE</span></div>
                                </a>
                                
                            </div>

                            <!-- tab product -->
                            <div class="col-products tab-content">

                                <!-- tab 1 -->
                                <div class="tab-pane active in  fade " id="floor1-1" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="8" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                    <?php
                        //********** New Arrival 15 Products ***********************************
                                    $newarrivalallProducts = DB::table('tproducts')->limit(10)->where('cat_id', '=', 15)->get();
                                    foreach ($newarrivalallProducts as $newarrivalallProduct) {

                                        ?>
                                    
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="/display/product/details/{{$newarrivalallProduct->id}}"><img alt="product name" src="/images/{{$newarrivalallProduct->img_one}}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="/addTowishlist/{{$newarrivalallProduct->id}}" title="Wish List"><span>wishlist</span></a>
                                                     <!-- <a class="btn btn-compare" href="/addTocompare/{{$newarrivalallProduct->id}}" title="Compare List"><span>compare</span></a>                             <a class="btn btn-compare" href="#"><span>compare</span></a> -->
                                                        <a class="btn btn-quickview" href="/display/product/details/{{$newarrivalallProduct->id}}" title="Product Details"><span>quickview</span></a>
                                                    </div>
                                                    <a  href="/addTocart/{{$newarrivalallProduct->id}}" class="btn btn-cart"><span>Add to Cart</span></a>
                                                    
                                                </div>
                                                <!-- Check Offer is available or not -->
                                                <?php if ($newarrivalallProduct->offer > 1) { ?>
                                                <span class="product-item-label label-sale-off">{{$newarrivalallProduct->offer}}% <span>off</span></span>
                                                <?php 
                                            } ?>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="/display/product/details/{{$newarrivalallProduct->id}}">{{$newarrivalallProduct->generic_name}}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">{{$newarrivalallProduct->price}} TK</span>
                                                            <!-- <span class="old-price">$52.00</span> -->
                                                        </div>
                                                        <!-- Check Offer is available or not -->
                                                        <?php if ($newarrivalallProduct->offer > 1) { ?>
                                                        <!-- <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        <?php 
                                                    } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                               <?php 
                            } ?>
                                       
                                    </div>
                                </div>
                              
                               
                            </div>

                        </div>

                    </div>
                </div><!-- block -floor -products / floor 1-->


<!-- New Arrival of Sergical Item*************************************************** -->



<!--  ********************  NEW ARRIVALS IN Imported Medicine*********************************** -->

                <!-- block -floor -products / floor 1 -->
                <div class="block-floor-products block-floor-products-opt3 floor-products1" >
                    <div class="container">
                        <!-- title -->
                        <div class="block-title ">
                            <span class="title">IMPORTED MEDICINE</span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" >
                                  
                                </div>
                            </div>
                        </div>

                        <div class="block-content">

                            <!-- banner -->
                            <div class="col-banner">
                                <a href="#" class="box-img">
                                    <img src="images/media/index3/baner-floor3.jpg" alt="baner-floor">
                                    <div class="des"><span>TOP SELLING MEDICINE</span></div>
                                </a>
                                
                            </div>

                            <!-- tab product -->
                            <div class="col-products tab-content">

                                <!-- tab 1 -->
                                <div class="tab-pane active in  fade " id="floor1-1" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="8" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                    <?php
                        //********** New Arrival 15 Products ***********************************
                                    $newarrivalallProducts = DB::table('tproducts')->limit(10)->where('cat_id', '=', 18)->get();
                                    foreach ($newarrivalallProducts as $newarrivalallProduct) {

                                        ?>
                                    
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="/display/product/details/{{$newarrivalallProduct->id}}"><img alt="product name" src="/images/{{$newarrivalallProduct->img_one}}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="/addTowishlist/{{$newarrivalallProduct->id}}" title="Wish List"><span>wishlist</span></a>
                                                     <!-- <a class="btn btn-compare" href="/addTocompare/{{$newarrivalallProduct->id}}" title="Compare List"><span>compare</span></a>                             <a class="btn btn-compare" href="#"><span>compare</span></a> -->
                                                        <a class="btn btn-quickview" href="/display/product/details/{{$newarrivalallProduct->id}}" title="Product Details"><span>quickview</span></a>
                                                    </div>
                                                    <a  href="/addTocart/{{$newarrivalallProduct->id}}" class="btn btn-cart"><span>Add to Cart</span></a>
                                                    
                                                </div>
                                                <!-- Check Offer is available or not -->
                                                <?php if ($newarrivalallProduct->offer > 1) { ?>
                                                <span class="product-item-label label-sale-off">{{$newarrivalallProduct->offer}}% <span>off</span></span>
                                                <?php 
                                            } ?>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="/display/product/details/{{$newarrivalallProduct->id}}">{{$newarrivalallProduct->generic_name}}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">{{$newarrivalallProduct->price}} TK</span>
                                                            <!-- <span class="old-price">$52.00</span> -->
                                                        </div>
                                                        <!-- Check Offer is available or not -->
                                                        <?php if ($newarrivalallProduct->offer > 1) { ?>
                                                        <!-- <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        <?php 
                                                    } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                               <?php 
                            } ?>
                                       
                                    </div>
                                </div>
                              
                               
                            </div>

                        </div>

                    </div>
                </div><!-- block -floor -products / floor 1-->


<!-- New Arrival of Imported Medicine*************************************************** -->



<!--  ********************  NEW ARRIVALS IN DIABETICS*********************************** -->

                <!-- block -floor -products / floor 1 -->
                <div class="block-floor-products block-floor-products-opt3 floor-products1" >
                    <div class="container">
                        <!-- title -->
                        <div class="block-title ">
                            <span class="title">DIABETICS</span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" >
                                  
                                </div>
                            </div>
                        </div>

                        <div class="block-content">

                            <!-- banner -->
                            <div class="col-banner">
                                <a href="#" class="box-img">
                                    <img src="images/media/index3/baner-floor3.jpg" alt="baner-floor">
                                    <div class="des"><span>TOP SELLING MEDICINE</span></div>
                                </a>
                                
                            </div>

                            <!-- tab product -->
                            <div class="col-products tab-content">

                                <!-- tab 1 -->
                                <div class="tab-pane active in  fade " id="floor1-1" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="8" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                    <?php
                        //********** New Arrival 15 Products ***********************************
                                    $newarrivalallProducts = DB::table('tproducts')->limit(10)->where('cat_id', '=', 8)->get();
                                    foreach ($newarrivalallProducts as $newarrivalallProduct) {

                                        ?>
                                    
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="/display/product/details/{{$newarrivalallProduct->id}}"><img alt="product name" src="/images/{{$newarrivalallProduct->img_one}}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="/addTowishlist/{{$newarrivalallProduct->id}}" title="Wish List"><span>wishlist</span></a>
                                                     <!-- <a class="btn btn-compare" href="/addTocompare/{{$newarrivalallProduct->id}}" title="Compare List"><span>compare</span></a>                             <a class="btn btn-compare" href="#"><span>compare</span></a> -->
                                                        <a class="btn btn-quickview" href="/display/product/details/{{$newarrivalallProduct->id}}" title="Product Details"><span>quickview</span></a>
                                                    </div>
                                                    <a  href="/addTocart/{{$newarrivalallProduct->id}}" class="btn btn-cart"><span>Add to Cart</span></a>
                                                    
                                                </div>
                                                <!-- Check Offer is available or not -->
                                                <?php if ($newarrivalallProduct->offer > 1) { ?>
                                                <span class="product-item-label label-sale-off">{{$newarrivalallProduct->offer}}% <span>off</span></span>
                                                <?php 
                                            } ?>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="/display/product/details/{{$newarrivalallProduct->id}}">{{$newarrivalallProduct->generic_name}}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">{{$newarrivalallProduct->price}} TK</span>
                                                            <!-- <span class="old-price">$52.00</span> -->
                                                        </div>
                                                        <!-- Check Offer is available or not -->
                                                        <?php if ($newarrivalallProduct->offer > 1) { ?>
                                                        <!-- <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        <?php 
                                                    } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                               <?php 
                            } ?>
                                       
                                    </div>
                                </div>
                              
                               
                            </div>

                        </div>

                    </div>
                </div><!-- block -floor -products / floor 1-->


<!-- New Arrival of DIABETICS*************************************************** -->




<!--  ********************  NEW ARRIVALS IN DIAPERS*********************************** -->

                <!-- block -floor -products / floor 1 -->
                <div class="block-floor-products block-floor-products-opt3 floor-products1" >
                    <div class="container">
                        <!-- title -->
                        <div class="block-title ">
                            <span class="title">DIAPERS</span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" >
                                  
                                </div>
                            </div>
                        </div>

                        <div class="block-content">

                            <!-- banner -->
                            <div class="col-banner">
                                <a href="#" class="box-img">
                                    <img src="images/media/index3/baner-floor3.jpg" alt="baner-floor">
                                    <div class="des"><span>TOP SELLING MEDICINE</span></div>
                                </a>
                                
                            </div>

                            <!-- tab product -->
                            <div class="col-products tab-content">

                                <!-- tab 1 -->
                                <div class="tab-pane active in  fade " id="floor1-1" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="8" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                    <?php
                        //********** New Arrival 15 Products ***********************************
                                    $newarrivalallProducts = DB::table('tproducts')->limit(10)->where('cat_id', '=', 22)->get();
                                    foreach ($newarrivalallProducts as $newarrivalallProduct) {

                                        ?>
                                    
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="/display/product/details/{{$newarrivalallProduct->id}}"><img alt="product name" src="/images/{{$newarrivalallProduct->img_one}}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="/addTowishlist/{{$newarrivalallProduct->id}}" title="Wish List"><span>wishlist</span></a>
                                                     <!-- <a class="btn btn-compare" href="/addTocompare/{{$newarrivalallProduct->id}}" title="Compare List"><span>compare</span></a>                             <a class="btn btn-compare" href="#"><span>compare</span></a> -->
                                                        <a class="btn btn-quickview" href="/display/product/details/{{$newarrivalallProduct->id}}" title="Product Details"><span>quickview</span></a>
                                                    </div>
                                                    <a  href="/addTocart/{{$newarrivalallProduct->id}}" class="btn btn-cart"><span>Add to Cart</span></a>
                                                    
                                                </div>
                                                <!-- Check Offer is available or not -->
                                                <?php if ($newarrivalallProduct->offer > 1) { ?>
                                                <span class="product-item-label label-sale-off">{{$newarrivalallProduct->offer}}% <span>off</span></span>
                                                <?php 
                                            } ?>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="/display/product/details/{{$newarrivalallProduct->id}}">{{$newarrivalallProduct->generic_name}}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">{{$newarrivalallProduct->price}} TK</span>
                                                            <!-- <span class="old-price">$52.00</span> -->
                                                        </div>
                                                        <!-- Check Offer is available or not -->
                                                        <?php if ($newarrivalallProduct->offer > 1) { ?>
                                                        <!-- <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        <?php 
                                                    } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                               <?php 
                            } ?>
                                       
                                    </div>
                                </div>
                              
                               
                            </div>

                        </div>

                    </div>
                </div><!-- block -floor -products / floor 1-->


<!-- New Arrival of DIAPERS*************************************************** -->




<!--  ********************  NEW ARRIVALS IN WOMEN CARE*********************************** -->

                <!-- block -floor -products / floor 1 -->
                <div class="block-floor-products block-floor-products-opt3 floor-products1" >
                    <div class="container">
                        <!-- title -->
                        <div class="block-title ">
                            <span class="title">WOMEN CARE</span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" >
                                  
                                </div>
                            </div>
                        </div>

                        <div class="block-content">

                            <!-- banner -->
                            <div class="col-banner">
                                <a href="#" class="box-img">
                                    <img src="images/media/index3/baner-floor3.jpg" alt="baner-floor">
                                    <div class="des"><span>TOP SELLING MEDICINE</span></div>
                                </a>
                                
                            </div>

                            <!-- tab product -->
                            <div class="col-products tab-content">

                                <!-- tab 1 -->
                                <div class="tab-pane active in  fade " id="floor1-1" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="8" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                    <?php
                        //********** New Arrival 15 Products ***********************************
                                    $newarrivalallProducts = DB::table('tproducts')->limit(10)->where('cat_id', '=', 11)->get();
                                    foreach ($newarrivalallProducts as $newarrivalallProduct) {

                                        ?>
                                    
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="/display/product/details/{{$newarrivalallProduct->id}}"><img alt="product name" src="/images/{{$newarrivalallProduct->img_one}}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="/addTowishlist/{{$newarrivalallProduct->id}}" title="Wish List"><span>wishlist</span></a>
                                                     <!-- <a class="btn btn-compare" href="/addTocompare/{{$newarrivalallProduct->id}}" title="Compare List"><span>compare</span></a>                             <a class="btn btn-compare" href="#"><span>compare</span></a> -->
                                                        <a class="btn btn-quickview" href="/display/product/details/{{$newarrivalallProduct->id}}" title="Product Details"><span>quickview</span></a>
                                                    </div>
                                                    <a  href="/addTocart/{{$newarrivalallProduct->id}}" class="btn btn-cart"><span>Add to Cart</span></a>
                                                    
                                                </div>
                                                <!-- Check Offer is available or not -->
                                                <?php if ($newarrivalallProduct->offer > 1) { ?>
                                                <span class="product-item-label label-sale-off">{{$newarrivalallProduct->offer}}% <span>off</span></span>
                                                <?php 
                                            } ?>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="/display/product/details/{{$newarrivalallProduct->id}}">{{$newarrivalallProduct->generic_name}}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">{{$newarrivalallProduct->price}} TK</span>
                                                            <!-- <span class="old-price">$52.00</span> -->
                                                        </div>
                                                        <!-- Check Offer is available or not -->
                                                        <?php if ($newarrivalallProduct->offer > 1) { ?>
                                                        <!-- <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        <?php 
                                                    } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                               <?php 
                            } ?>
                                       
                                    </div>
                                </div>
                              
                               
                            </div>

                        </div>

                    </div>
                </div><!-- block -floor -products / floor 1-->


<!-- New Arrival of WOMEN CARE*************************************************** -->





<!--  ********************  NEW ARRIVALS IN HERBAL*********************************** -->

                <!-- block -floor -products / floor 1 -->
                <div class="block-floor-products block-floor-products-opt3 floor-products1" >
                    <div class="container">
                        <!-- title -->
                        <div class="block-title ">
                            <span class="title">HERBAL</span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" >
                                  
                                </div>
                            </div>
                        </div>

                        <div class="block-content">

                            <!-- banner -->
                            <div class="col-banner">
                                <a href="#" class="box-img">
                                    <img src="images/media/index3/baner-floor3.jpg" alt="baner-floor">
                                    <div class="des"><span>TOP SELLING MEDICINE</span></div>
                                </a>
                                
                            </div>

                            <!-- tab product -->
                            <div class="col-products tab-content">

                                <!-- tab 1 -->
                                <div class="tab-pane active in  fade " id="floor1-1" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="8" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                    <?php
                        //********** New Arrival 15 Products ***********************************
                                    $newarrivalallProducts = DB::table('tproducts')->limit(10)->where('cat_id', '=', 23)->get();
                                    foreach ($newarrivalallProducts as $newarrivalallProduct) {

                                        ?>
                                    
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="/display/product/details/{{$newarrivalallProduct->id}}"><img alt="product name" src="/images/{{$newarrivalallProduct->img_one}}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="/addTowishlist/{{$newarrivalallProduct->id}}" title="Wish List"><span>wishlist</span></a>
                                                     <!-- <a class="btn btn-compare" href="/addTocompare/{{$newarrivalallProduct->id}}" title="Compare List"><span>compare</span></a>                             <a class="btn btn-compare" href="#"><span>compare</span></a> -->
                                                        <a class="btn btn-quickview" href="/display/product/details/{{$newarrivalallProduct->id}}" title="Product Details"><span>quickview</span></a>
                                                    </div>
                                                    <a  href="/addTocart/{{$newarrivalallProduct->id}}" class="btn btn-cart"><span>Add to Cart</span></a>
                                                    
                                                </div>
                                                <!-- Check Offer is available or not -->
                                                <?php if ($newarrivalallProduct->offer > 1) { ?>
                                                <span class="product-item-label label-sale-off">{{$newarrivalallProduct->offer}}% <span>off</span></span>
                                                <?php 
                                            } ?>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="/display/product/details/{{$newarrivalallProduct->id}}">{{$newarrivalallProduct->generic_name}}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">{{$newarrivalallProduct->price}} TK</span>
                                                            <!-- <span class="old-price">$52.00</span> -->
                                                        </div>
                                                        <!-- Check Offer is available or not -->
                                                        <?php if ($newarrivalallProduct->offer > 1) { ?>
                                                        <!-- <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        <?php 
                                                    } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                               <?php 
                            } ?>
                                       
                                    </div>
                                </div>
                              
                               
                            </div>

                        </div>

                    </div>
                </div><!-- block -floor -products / floor 1-->


<!-- New Arrival of HERBAL*************************************************** -->





<!--  ********************  NEW ARRIVALS IN SKIN CARE*********************************** -->

                <!-- block -floor -products / floor 1 -->
                <div class="block-floor-products block-floor-products-opt3 floor-products1" >
                    <div class="container">
                        <!-- title -->
                        <div class="block-title ">
                            <span class="title">SKIN CARE</span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" >
                                  
                                </div>
                            </div>
                        </div>

                        <div class="block-content">

                            <!-- banner -->
                            <div class="col-banner">
                                <a href="#" class="box-img">
                                    <img src="images/media/index3/baner-floor3.jpg" alt="baner-floor">
                                    <div class="des"><span>TOP SELLING MEDICINE</span></div>
                                </a>
                                
                            </div>

                            <!-- tab product -->
                            <div class="col-products tab-content">

                                <!-- tab 1 -->
                                <div class="tab-pane active in  fade " id="floor1-1" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="8" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                    <?php
                        //********** New Arrival 15 Products ***********************************
                                    $newarrivalallProducts = DB::table('tproducts')->limit(10)->where('cat_id', '=', 24)->get();
                                    foreach ($newarrivalallProducts as $newarrivalallProduct) {

                                        ?>
                                    
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="/display/product/details/{{$newarrivalallProduct->id}}"><img alt="product name" src="/images/{{$newarrivalallProduct->img_one}}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="/addTowishlist/{{$newarrivalallProduct->id}}" title="Wish List"><span>wishlist</span></a>
                                                     <!-- <a class="btn btn-compare" href="/addTocompare/{{$newarrivalallProduct->id}}" title="Compare List"><span>compare</span></a>                             <a class="btn btn-compare" href="#"><span>compare</span></a> -->
                                                        <a class="btn btn-quickview" href="/display/product/details/{{$newarrivalallProduct->id}}" title="Product Details"><span>quickview</span></a>
                                                    </div>
                                                    <a  href="/addTocart/{{$newarrivalallProduct->id}}" class="btn btn-cart"><span>Add to Cart</span></a>
                                                    
                                                </div>
                                                <!-- Check Offer is available or not -->
                                                <?php if ($newarrivalallProduct->offer > 1) { ?>
                                                <span class="product-item-label label-sale-off">{{$newarrivalallProduct->offer}}% <span>off</span></span>
                                                <?php 
                                            } ?>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="/display/product/details/{{$newarrivalallProduct->id}}">{{$newarrivalallProduct->generic_name}}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">{{$newarrivalallProduct->price}} TK</span>
                                                            <!-- <span class="old-price">$52.00</span> -->
                                                        </div>
                                                        <!-- Check Offer is available or not -->
                                                        <?php if ($newarrivalallProduct->offer > 1) { ?>
                                                        <!-- <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        <?php 
                                                    } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                               <?php 
                            } ?>
                                       
                                    </div>
                                </div>
                              
                               
                            </div>

                        </div>

                    </div>
                </div><!-- block -floor -products / floor 1-->


<!-- New Arrival of SKIN CARE*************************************************** -->





<!--  ********************  NEW ARRIVALS IN HEALTH NUTRITION*********************************** -->

                <!-- block -floor -products / floor 1 -->
                <div class="block-floor-products block-floor-products-opt3 floor-products1" >
                    <div class="container">
                        <!-- title -->
                        <div class="block-title ">
                            <span class="title">HEALTH NUTRITION</span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" >
                                  
                                </div>
                            </div>
                        </div>

                        <div class="block-content">

                            <!-- banner -->
                            <div class="col-banner">
                                <a href="#" class="box-img">
                                    <img src="images/media/index3/baner-floor3.jpg" alt="baner-floor">
                                    <div class="des"><span>TOP SELLING MEDICINE</span></div>
                                </a>
                                
                            </div>

                            <!-- tab product -->
                            <div class="col-products tab-content">

                                <!-- tab 1 -->
                                <div class="tab-pane active in  fade " id="floor1-1" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="8" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                    <?php
                        //********** New Arrival 15 Products ***********************************
                                    $newarrivalallProducts = DB::table('tproducts')->limit(10)->where('cat_id', '=', 21)->get();
                                    foreach ($newarrivalallProducts as $newarrivalallProduct) {

                                        ?>
                                    
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="/display/product/details/{{$newarrivalallProduct->id}}"><img alt="product name" src="/images/{{$newarrivalallProduct->img_one}}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="/addTowishlist/{{$newarrivalallProduct->id}}" title="Wish List"><span>wishlist</span></a>
                                                     <!-- <a class="btn btn-compare" href="/addTocompare/{{$newarrivalallProduct->id}}" title="Compare List"><span>compare</span></a>                             <a class="btn btn-compare" href="#"><span>compare</span></a> -->
                                                        <a class="btn btn-quickview" href="/display/product/details/{{$newarrivalallProduct->id}}" title="Product Details"><span>quickview</span></a>
                                                    </div>
                                                    <a  href="/addTocart/{{$newarrivalallProduct->id}}" class="btn btn-cart"><span>Add to Cart</span></a>
                                                    
                                                </div>
                                                <!-- Check Offer is available or not -->
                                                <?php if ($newarrivalallProduct->offer > 1) { ?>
                                                <span class="product-item-label label-sale-off">{{$newarrivalallProduct->offer}}% <span>off</span></span>
                                                <?php 
                                            } ?>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="/display/product/details/{{$newarrivalallProduct->id}}">{{$newarrivalallProduct->generic_name}}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">{{$newarrivalallProduct->price}} TK</span>
                                                            <!-- <span class="old-price">$52.00</span> -->
                                                        </div>
                                                        <!-- Check Offer is available or not -->
                                                        <?php if ($newarrivalallProduct->offer > 1) { ?>
                                                        <!-- <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        <?php 
                                                    } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                               <?php 
                            } ?>
                                       
                                    </div>
                                </div>
                              
                               
                            </div>

                        </div>

                    </div>
                </div><!-- block -floor -products / floor 1-->


<!-- New Arrival of HEALTH NUTRITION*************************************************** -->

<!-- ***********************  Recent View Product Start *********************************** -->


<!-- Recent Product Start  ********************************* -->
                <!-- block -floor -products / floor 2 -->
                <div class="block-floor-products block-floor-products-opt3 floor-products2" >
                    <div class="container">
                        <!-- title -->
                        <div class="block-title ">
                            <span class="title">Your Recent View Products</span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                             
                            </div>
                        </div>

                        <div class="block-content">

                            <!-- banner -->
                            <!-- <div class="col-banner">
                                <a href="#" class="box-img">
                                    <img src="images/media/index3/baner-floor2.jpg" alt="baner-floor">
                                    <div class="des"><span>TOP SELLING MEDICINE</span></div>
                                </a>
                                
                            </div> -->

                            <!-- tab product -->
                            <div class="col-products tab-content">

                             

                                <!-- tab 2--> 
                                <div class="tab-pane active in  fade" id="floor2-2" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="8" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                     <?php 
                                      $session_id = session()->getId();
                                    $recent_views = DB::table('recent_views')->select('*')->where('session_id',$session_id)->limit(12)->get();


                                    foreach ($recent_views as $recent_view) {
                          

                                        $your_recent_views_product= DB::table('tproducts')->where('id', $recent_view->product_id)->first();
                                      
                                        ?>
                                        
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="/display/product/details/{{$your_recent_views_product->id}}"><img alt="product name" src="/images/{{$top_seller_product->img_one}}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="/addTowishlist/{{$your_recent_views_product->id}}" title="Wish List"><span>wishlist</span></a>
                                                     <!-- <a class="btn btn-compare" href="/addTocompare/{{$newarrivalallProduct->id}}" title="Compare List"><span>compare</span></a>                             <a class="btn btn-compare" href="#"><span>compare</span></a> -->
                                                        <a class="btn btn-quickview" href="/display/product/details/{{$your_recent_views_product->id}}" title="Product Details"><span>quickview</span></a>
                                                    </div>
                                                    <a  href="/addTocart/{{$your_recent_views_product->id}}" class="btn btn-cart"><span>Add to Cart</span></a>
                                                    
                                                </div>

                                                 <!-- Check Offer is available or not -->
                                                 <?php if ($your_recent_views_product->offer > 1) { ?>
                                                <span class="product-item-label label-sale-off">{{ $your_recent_views_product->offer}} % <span>off</span></span>
                                                <?php 
                                            } ?>
                                               
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="/display/product/details/{{$your_recent_views_product->id}}">{{$your_recent_views_product->brand_name}}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">{{$your_recent_views_product->price}} TK</span>
                                                            <!-- <span class="old-price">$52.00</span> -->
                                                     
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <!-- <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
                                    } ?>

                                      
                                    </div>
                                </div> 

                               
                            </div>

                        </div>

                    </div>
                </div><!-- block -floor -products / floor 2-->

                <!-- banner -->
                <div class="block-banner-lag-opt3  effect-banner1">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <a class="box-img" href="#"><img alt="banner" src="images/media/index4/banner1-1.png"></a>
                            </div>
                            <div class="col-sm-6">
                                <a class="box-img" href="#"><img alt="banner" src="images/media/index4/banner1-2.jpg"></a>
                            </div>
                        </div>
                    </div>
                </div><!-- banner -->



<!-- *******************************  Recent View Product End ************************************************** -->




                <!--  ********************  Blog Section*********************************** -->
               
            <!-- Block Blog -->
            <div class="block-the-blog">
                <div class="container">
                    <div class="block-title">
                        <span class="title">From The  Blog</span>
                    </div>
                    <div class="block-content">
                        <div class="owl-carousel" 
                            data-nav="true" 
                            data-dots="false" 
                            data-margin="30" 
                            data-responsive='{
                            "0":{"items":1},
                            "480":{"items":2},
                            "768":{"items":2},
                            "992":{"items":3},
                            "1200":{"items":4}
                        }'>
                        <?php     
              $all_posts = DB::table('posts')->limit(15)->orderby('posts.id','desc')->get();
      foreach($all_posts as $all_post){
                        ?>
                            <div class="blog-item">
                                <div class="blog-photo">
                                    <a href="blog/details/{{$all_post->id}}"><img src="/images/{{$all_post->image}}" alt="blog"></a>
                                    
                                </div>
                                <div class="blog-detail">
                                    <strong class="blog-name"><a href="blog/details/{{$all_post->id}}">{{$all_post->title}} </a></strong>
                                    <div class="blog-info">
                                        <div class="blog-date"><span>{{date('D-M-y', strtotime($all_post->created_at))}}</span></div>
                                    </div>
                                    <div class="blog-actions">
                                        <a href="blog/details/{{$all_post->id}}" class="action">Read more</a>
                                    </div>
                                </div>
                            </div>
                       
                            <?php     
                        }
                        ?>
                           
                        </div>
                    </div>
                </div>
            </div><!-- Block Blog -->
            
            <div class="block-the-blog">
                <div class="container">
                    <div class="block-title">
                        <span class="title">doctor-profile</span>
                    </div>
                <div class="col-md-7">
                    <div class="block-content">
                        <div class="owl-carousel" 
                            data-nav="true" 
                            data-dots="false" 
                            data-margin="30" 
                            data-responsive='{
                            "0":{"items":1},
                            "480":{"items":2},
                            "768":{"items":2},
                            "992":{"items":2},
                            "1200":{"items":2}
                        }'>
                            <div class="blog-item1">
                                <div class="blog-photo">
                                    <a href="#"><img src="images/media/index4/blog1.jpg" alt="blog"></a>
                                    
                                </div>
                                <div class="blog-detail">
                                    <strong class="blog-name"><a href="#">Dr. Saiful Islam </a></strong>
                                    <div class="blog-info">
                                        
                                        <div class="blog-comment"><span>Registration no:A13991/18</span></div>
                                    </div>
                                   
                                   
                                </div>
                            </div>
                       
                            <div class="blog-item2">
                                <div class="blog-photo post-thumbnail">
                                    <a href="#"><img src="/images/dr_photo_one.jpg"  class="post-thumbnail image-responsive" alt="blog"></a>
                                    
                                </div>
                                <div class="blog-detail">
                                    <strong class="blog-name"><a href="#">Mohammad Rofiqul Islam</a></strong>
                                    <div class="blog-info">
                                        
                                        <div class="blog-comment"><span>Registration no:A13991/18</span></div>
                                    </div>
                                   
                                   
                                </div>
                            </div>
                            <div class="blog-item2">
                                <div class="blog-photo">
                                    <a href="#"><img src="images/media/index4/blog1.jpg" alt="blog"></a>
                                    
                                </div>
                                <div class="blog-detail">
                                    <strong class="blog-name"><a href="#">Dr. Saiful Islam </a></strong>
                                    <div class="blog-info">
                                        
                                        <div class="blog-comment"><span>Registration no:A13991/18</span></div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                            <div class="blog-item2">
                                <div class="blog-photo">
                                    <a href="#"><img src="images/media/index4/blog1.jpg" alt="blog"></a>
                                    
                                </div>
                                <div class="blog-detail">
                                    <strong class="blog-name"><a href="#">Dr. Saiful Islam </a></strong>
                                    <div class="blog-info">
                                        
                                        <div class="blog-comment"><span>Registration no:A13991/18</span></div>
                                    </div>
                                    
                                </div>
                            </div>
                           
                            
                        </div>
                    </div>
                    </div>
                <div class="col-md-4">
                     <div class="doctor-profile">
                      <iframe src="https://www.youtube.com/embed/EOjWDMoxf1U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                </div>
                            
            </div>
        </div>
                    
                
				
            </div>
            

        </main><!-- end MAIN -->
         <!-- /page content -->
         @stop