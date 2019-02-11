@extends('fornt/master/allmaster')
@section('content')
            <!-- banner -->
            <main class="site-main">
<div class="columns container">
    <div class="row">

        <!-- Main Content -->
        <div class="col-md-9 col-md-push-3  col-main">

                      

            
  <!-- Search by alphabet **************************************** -->
 
  <span class="text text-info">Product Seach By Alphabet .... </span> 
  <div class="btn-toolbar">
    <div class="btn-group btn-group-sm">
      <a href="/search/?alp=a"  class="btn btn-default">A</a>
      <a href="/search/?alp=b"  class="btn btn-default">B</a>
      <a href="/search/?alp=c"  class="btn btn-default">C</a>
      <a href="/search/?alp=d"  class="btn btn-default">D</a>
      <a href="/search/?alp=e"  class="btn btn-default">E</a>
      <a href="/search/?alp=f"  class="btn btn-default">F</a>
      <a href="/search/?alp=g"  class="btn btn-default">G</a>
      <a href="/search/?alp=h"  class="btn btn-default">H</a>
      <a href="/search/?alp=i"  class="btn btn-default">I</a>
      <a href="/search/?alp=j"  class="btn btn-default">J</a>
      <a href="/search/?alp=k"  class="btn btn-default">K</a>
      <a href="/search/?alp=l"  class="btn btn-default">L</a>
      <a href="/search/?alp=m"  class="btn btn-default">M</a>
      <a href="/search/?alp=n"  class="btn btn-default">N</a>
      <a href="/search/?alp=o"  class="btn btn-default">O</a>
      <a href="/search/?alp=p"  class="btn btn-default">P</a>
      <a href="/search/?alp=q"  class="btn btn-default">Q</a>
      <a href="/search/?alp=r"  class="btn btn-default">R</a>
      <a href="/search/?alp=s"  class="btn btn-default">S</a>
      <a href="/search/?alp=t"  class="btn btn-default">T</a>
      <a href="/search/?alp=u"  class="btn btn-default">U</a>
      <a href="/search/?alp=v"  class="btn btn-default">V</a>
      <a href="/search/?alp=w"  class="btn btn-default">W</a>
      <a href="/search/?alp=x"  class="btn btn-default">X</a>
      <a href="/search/?alp=y"  class="btn btn-default">Y</a>
      <a href="/search/?alp=z"  class="btn btn-default">Z</a>
    </div>
  </div>
  <hr>
  <span class="text text-success ">Your Search Result Match  ({{count($searchs)}}) Items.... </span> 
   <?php   if (count($searchs) < 1){?>
    <center style="text-center text-info">
   <div class="col-md-offset-3 col-md-6 margin-vertical">
      <div class="padding white-bg sm-shadow">
        <h3>Oops, we don't have that information right now. </h3>
        <hr>
        <h4><b>Don't worry! There are other ways to order</b></h4>
        <h4>
          Send us a <a href="#" class="visible-xs">Facebook Message</a>
          <a href="#" class="hidden-xs">Facebook Message</a>
        </h4>
        <h4>
          Or send us an <b>email</b> at <a href="mailto:healthpharma@gmail.com?Subject=Order">order@healthpharma.com.bd</a>
        </h4>
        <h4>
          Or feel free to call us at <b> <a href="tel:01648462005"> 01304419901 , 01648462005</a></b>
        </h4>
        <h4>We apologize for the inconvenience</h4>
      </div>
    </div>
</center>            

  <?php } ?>
  <hr>
 
<!-- Search By Alphabet ******************************************** -->
                 <?php if(count($searchs)>0){?>
            <!-- List Products -->
            <div class="products  products-grid">
                <ol class="product-items row">
                  
                    <?php 
                    // $allproducs = DB::table('tproducts')->orderby('tproducts.id', 'desc')->paginate(20);
                    foreach ($searchs as $search) {
                        ?>
                    <li class="col-sm-4 product-item ">
                        <div class="product-item-opt-1">
                            <div class="product-item-info">
                                <div class="product-item-photo">
                                    <a href="/display/product/details/{{$search->id}}" class="product-item-img"><img src="/images/{{$search->img_one}}" alt="product name"></a>
                                    <div class="product-item-actions">
                                        <a href="/addTowishlist/{{$search->id}}" class="btn btn-wishlist"><span>wishlist</span></a>
                                        <a href="/display/product/details/{{$search->id}}" class="btn btn-quickview"><span>quickview</span></a>
                                    </div>
                                    <a  href="/addTocart/{{$search->id}}" class="btn btn-cart" ><span>Add to Cart</span></a>
                                </div>
                                 <!-- Check Offer is available or not -->
                                 <?php if ($search->offer > 1) { ?>
                                                <span class="product-item-label label-sale-off">{{ $search->offer}} % <span>off</span></span>
                                                <?php 
                                            } ?>
                                <div class="product-item-detail">
                                    <strong class="product-item-name"><a href="/display/product/details/{{$search->id}}">{{$search->brand_name}}</a></strong>
                                    <div class="clearfix">
                                        <div class="product-item-price">
                                            <span class="price">{{$search->price}} TK</span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                  </li>
<?php 
} ?>
                    
                   

                </ol><!-- list product -->

            </div> <!-- List Products -->
            {{ $searchs->links() }}
<?php } ?>
           
        </div><!-- Main Content -->
        
        <!-- Sidebar -->
        <div class="col-md-3 col-md-pull-9  col-sidebar">
<!-- block filter products -->
<div id="layered-filter-block" class="block-sidebar block-filter no-hide">
                <div class="close-filter-products"><i class="fa fa-times" aria-hidden="true"></i></div>
                
                <div class="block-content">

                    <!-- Filter Item  categori-->
                    <div class="filter-options-item filter-options-categori">
                        <div class="filter-options-title">Categories</div>
                        <div class="filter-options-content">
                            <ol class="items">
                            <?php 
                            $allcategories = DB::table('categories')->orderby('categories.id', 'desc')->limit(10)->get();
                            foreach ($allcategories as $allcategorie) {
                                $count_products = DB::table('tproducts')->where('cat_id', $allcategorie->id)->get();

                                ?>
                            <li class="item ">
                                   
                                   <a href="/category/{{str_slug($allcategorie->title)}}"><span>{{$allcategorie->title}} <span class="count">({{count($count_products)}})</span></span></a>
                               
                            </li> 
                            <?php 
                        } ?>
                                
                            </ol>
                        </div>
                    </div><!-- Filter Item  categori-->

                  
<br>
                    <!--************* Best Selling Product ***************-->
                    <div class="filter-options-item filter-options-brand">
                        <div class="filter-options-title">BEST SELLING PRODUCT</div>
                        <div class="filter-options-content">
                            <ol class="items">
                            <?php 

                            $top_seller_product_ids = DB::table('order_details')->select('order_details.product_id')->distinct()->get();

                            foreach ($top_seller_product_ids as $top_seller_product_id) {
                                $top_seller_product = DB::table('tproducts')->where('id', $top_seller_product_id->product_id)->first();

                                ?>
                            <li class="item ">
                                   
                                   <a href="/display/product/details/{{$top_seller_product->id}}"><span>{{$top_seller_product->brand_name}} </span></a>
                               
                            </li> 
                            <?php 
                            
                        } ?>
                            </ol>
                        </div>
                    </div><!-- Filter Item -->


                 
                </div>
            </div><!-- Filter -->

            <!-- Block  bestseller products-->
            <div class="block-sidebar block-sidebar-categorie">
                <div class="block-title">
                    <strong>POPULAR PRODUCT</strong>
                </div>
                <div class="block-content">
                    <ul class="items">
                        <?php 
                        $special_products = DB::table('tproducts')->where('tproducts.status', 'public')->limit(8)->orderby('tproducts.id', 'desc')->get();
                        foreach ($special_products as $special_product) {
                            ?>
                        <li>
                            <a href="/display/product/details/{{$special_product->id}}">{{$special_product->brand_name}}</a>
                        </li>
                        <?php 
                    } ?>
                    </ul>
                </div>
            </div><!-- Block  bestseller products-->

            
           

           <!-- POPULAR PRODUCTS ******************** -->

            <!-- Block  tags-->
            <div class="block-sidebar block-sidebar-tags">
                <div class="block-title">
                    <strong>SPECIAL PRODUCTS</strong>
                </div>
                <div class="block-content">
                    
                <?php 
                    $allproducs = DB::table('tproducts')->orderby('id', 'desc')->where('status','public')->limit(4)->get();
                    foreach ($allproducs as $allproduc) {
                        ?>
                        <div class="product-item-opt-1">
                            <div class="product-item-info">
                                <div class="product-item-photo">
                                    <a href="/display/product/details/{{$allproduc->id}}" class="product-item-img"><img src="/images/{{$allproduc->img_one}}" alt="product name"></a>
                                    <div class="product-item-actions">
                                    </div>
                                </div>
                                <!-- Check Offer is available or not -->
                                <?php if ($allproduc->offer > 1) { ?>
                                                <span class="product-item-label label-sale-off">{{ $allproduc->offer}} % <span>off</span></span>
                                                <?php 
                                            } ?>
                                <div class="product-item-detail">
                                <a  href="/addTocart/{{$allproduc->id}}" class="btn " ><span>Add to Cart</span></a>

                                    <strong class="product-item-name"><a href="/display/product/details/{{$allproduc->id}}">{{$allproduc->brand_name}}</a></strong>
                                    <div class="clearfix">
                                        <div class="product-item-price">
                                           
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                  
<?php 
} ?>
                </div>
            </div><!-- Block  tags-->

         


        </div><!-- Sidebar -->

        
        
    </div>
</div>


</main>
         <!-- /page content -->
         @stop