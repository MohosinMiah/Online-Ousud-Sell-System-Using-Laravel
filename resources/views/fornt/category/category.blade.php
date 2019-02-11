@extends('fornt/master/allmaster')
@section('content')
            <!-- banner -->
            <main class="site-main">
<div class="columns container">
    <div class="row">

        <!-- Main Content -->
        <div class="col-md-9 col-md-push-3  col-main">

                        <!-- images categori -->
                   <div class="category-view">
                            <div class="owl-carousel " 
                                data-nav="true" 
                                data-dots="false" 
                                data-margin="0" 
                                data-items='1' 
                                data-autoplayTimeout="700" 
                                data-autoplay="true" 
                                data-loop="true">
                                <?php 
                                $allcategories = DB::table('categories')->orderby('categories.id', 'desc')->limit(3)->get();
                                foreach ($allcategories as $allcategorie) {
                                    ?>
                                <div class="item " >
                                <a href="/category/{{str_slug($allcategorie->title)}}"><img src="/images/{{$allcategorie->image}}" alt="category-images"></a>
                                </div>
                                   <?php 
                                } ?>
                            </div>
                        </div><!-- images categori -->

            <!-- link categori -->
            <ul class="category-links">
                <li class="current-cate"><a href="/category">All Products</a></li>
               <?php 
                $allcategories = DB::table('categories')->limit(8)->get();
                foreach ($allcategories as $allcategorie) {
                    ?>
                <li><a href="/category/{{str_slug($allcategorie->title)}}">{{$allcategorie->title}}</a></li>
               
         <?php 
    } ?>
            </ul><!-- link categori -->
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

 
<!-- Search By Alphabet ******************************************** -->
           
            <!-- List Products -->
            <div class="products  products-grid">
                <ol class="product-items row">
                  
                    <?php 
                    $allproducs = DB::table('tproducts')->orderby('tproducts.id', 'desc')->paginate(20);
                    foreach ($allproducs as $allproduc) {
                        ?>
                    <li class="col-sm-4 product-item ">
                        <div class="product-item-opt-1">
                            <div class="product-item-info">
                                <div class="product-item-photo">
                                    <a href="/display/product/details/{{$allproduc->id}}" class="product-item-img"><img src="/images/{{$allproduc->img_one}}" alt="product name"></a>
                                    <div class="product-item-actions">
                                        <a href="/addTowishlist/{{$allproduc->id}}" class="btn btn-wishlist"><span>wishlist</span></a>
                                        <a href="/display/product/details/{{$allproduc->id}}" class="btn btn-quickview"><span>quickview</span></a>
                                    </div>
                                    <a  href="/addTocart/{{$allproduc->id}}" class="btn btn-cart" ><span>Add to Cart</span></a>
                                </div>
                                 <!-- Check Offer is available or not -->
                                 <?php if ($allproduc->offer > 1) { ?>
                                                <span class="product-item-label label-sale-off">{{ $allproduc->offer}} % <span>off</span></span>
                                                <?php 
                                            } ?>
                                <div class="product-item-detail">
                                    <strong class="product-item-name"><a href="/display/product/details/{{$allproduc->id}}">{{$special_product->brand_name}}</a></strong>
                                    <div class="clearfix">
                                        <div class="product-item-price">
                                            <span class="price">{{$allproduc->price}} TK</span>
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

           
           {{ $allproducs->links() }}
        </div><!-- Main Content -->
        
        <!-- Sidebar -->
        <div class="col-md-3 col-md-pull-9  col-sidebar">

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
                            $allcategories = DB::table('categories')->orderby('categories.id', 'desc')->get();
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

           

           <!-- POPULAR PRODUCTS ******************** -->

            <!-- Block  tags-->
            <div class="block-sidebar block-sidebar-tags">
                <div class="block-title">
                    <strong>SPECIAL PRODUCTS</strong>
                </div>
                <div class="block-content">
                    
                <?php 
                    $allproducs = DB::table('tproducts')->orderby('id', 'desc')->where('status','public')->limit(6)->get();
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