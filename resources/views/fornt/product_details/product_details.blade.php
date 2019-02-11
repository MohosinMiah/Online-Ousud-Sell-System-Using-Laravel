@extends('fornt/master/allmaster')
@section('content')
            <!-- banner -->
            <br>  <br>
            <main class="site-main">

<div class="columns container">
    <!-- Block  Breadcrumb-->
            
   
    <div class="row">
        <!-- Main Content -->
        <div class="col-md-12  col-main">

             <div class="row">
                    
                    <div class="col-sm-6 col-md-5 col-lg-5">

                        <div class="product-media media-horizontal">

                            <div class="image_preview_container images-large">
                            <i class="icon-zoom-in"></i>

                                <img id="img_zoom" data-zoom-image="/images/{{$single_product_detail->img_one}}" src="/images/{{$single_product_detail->img_one}}" alt="">

 
                            </div>
                            
                            <div class="product_preview images-small">

                                <div class="owl-carousel thumbnails_carousel" id="thumbnails"  data-nav="true" data-dots="false" data-margin="10" data-responsive='{"0":{"items":3},"480":{"items":4},"600":{"items":5},"768":{"items":3}}'>
                                    
                                    <a href="#" data-image="/images/{{$single_product_detail->img_one}}" data-zoom-image="/images/{{$single_product_detail->img_one}}">

                                        <img src="/images/{{$single_product_detail->img_one}}" data-large-image="/images/{{$single_product_detail->img_one}}" alt="">

                                    </a>

                                    <a href="#" data-image="images/{{$single_product_detail->img_one}}" data-zoom-image="/images/{{$single_product_detail->img_one}}">

                                        <img src="/images/{{$single_product_detail->img_one}}" data-large-image="/images/{{$single_product_detail->img_one}}" alt="">

                                    </a>
                                   

                                </div><!--/ .owl-carousel-->

                            </div><!--/ .product_preview-->

                        </div><!-- image product -->
                    </div>

                <div class="col-sm-6 col-md-7 col-lg-7"> 

                    <div class="product-info-main">

                        <h1 class="page-title ">
                            {{$single_product_detail->brand_name}}
                            <hr>
                        </h1>

                        <div class="product-code ">
                        Generic Name : <span class="text-info">{{$single_product_detail->generic_name}}</span>
                        </div> 
                        <br>
                        <div class="product-code ">
                        Brand Name : <span class="text-info">{{$single_product_detail->brand_name}}</span>
                        </div> 
                        <br>
                        <div class="product-code ">
                        Strength : <span class="text-info">{{$single_product_detail->strength}}</span>
                        </div> 
                        <br>
                        <div class="product-code ">
                        Price: <span class="text-info">{{$single_product_detail->price}} TK</span>
                        </div> 
                        <br>
                        <?php if ($single_product_detail->offer > 1) { ?>
                        <div class="product-code ">
                        Offer: <span class="text-info">{{$single_product_detail->offer }} %</span>
                        </div> 
                        <br>
                        <?php 
                    } ?>
                        <div class="product-code ">
                        User for : <span class="text-info">{{$single_product_detail->userfor}}</span>
                        </div> 
                        <br>
                        <div class="product-code ">
                        <strong class="text-danger">Note</strong> : <span class="text-primary">Quentity Add as an One(1) Pata</span>
                        </div> 
                        <br>
                        
                                <div class="product-options-bottom clearfix">
                                    
                                    <div class="actions">
                                    <form action="{{route('add_tocard_details_page')}}" method="POST">
                                             {{ csrf_field() }}   

                                             <input type="hidden" name="ID" value="{{$single_product_detail->id}}" >
                                             <input min="1" name="qty" value="1" type="number">

                                        <input class="btn btn-cart" type="submit" value="Add To Cart">             
                                     </form>   
                                     <!-- <a  href="/addTocart/{{$single_product_detail->id}}" class="btn btn-cart"><span>Add to Cart</span></a> -->

                                    <a class="btn btn-wishlist" href="/addTowishlist/{{$single_product_detail->id}}" title="Wish List"><span>Add to List</span></a>
                                        
                                       
                                    </div>
                                   
                                </div>
                                
                            </form>
                        </div>
                       <style>
#social-links ul li, ol li {
	list-style: none;
	display: inline;
}
#social-links .fa {
	display: inline-block;
	font: normal normal normal 14px/1 FontAwesome;
	font-size: 31px;
	text-rendering: auto;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	margin: 4px;
    display: inline;

}
.btn{
    color:#ffffff;
}
 a.btn {
	height: auto;
	line-height: 37px;
	background-color: #006b36;
	color: white;
}

                       </style><h4>Share in Social Media </h4>
                                {!! Share::page(url()->full(), 'Share title')
	->facebook()
	->twitter()
	->googlePlus()
	->linkedin('Extra linkedin summary can be passed here'); !!}
                </div><!-- Main detail -->

            </div>

            <!-- product tab info -->
             <br>
            <div class="product-info-detailed ">

                <!-- Nav tabs -->
                <ul class="nav nav-pills" role="tablist">
                    <li role="presentation" class="active"><a href="#description" role="tab" data-toggle="tab">Product Details   </a></li>
                    <!--<li role="presentation"><a href="#reviews" role="tab" data-toggle="tab">reviews</a></li>-->
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="description">
                        <div class="block-content">
                        <?php if ($single_product_detail->generic_name) { ?>
                        <div class="product-code ">
                        Generic Name : <span class="text-info">{{$single_product_detail->generic_name}}</span>
                        </div>  
                        <hr>
                        <?php 
                    } ?>

                        <?php if ($single_product_detail->description) { ?>
                        <div class="product-code ">
                        Descrition  : <span class="text-info">{!! $single_product_detail->description !!}</span>
                        </div>  
                        <hr>
                        <?php 
                    } ?>

                        <?php if ($single_product_detail->expair_date_ousud) { ?>
                        <div class="product-code ">
                        Ousud Expair Date  : <span class="text-info">{{$single_product_detail->expair_date_ousud}}</span>
                        </div>  
                        <hr>
                        <?php 
                    } ?>
                        <?php if ($single_product_detail->expair_date) { ?>
                        <div class="product-code ">
                        Offer Expair Date  : <span class="text-info">{{$single_product_detail->expair_date}}</span>
                        </div>  
                        <hr>
                        <?php 
                    } ?>
                         <?php if ($single_product_detail->brand_name) { ?>
                        <div class="product-code ">
                        Brand Name : <span class="text-info">{{$single_product_detail->brand_name}}</span>
                        </div>  
                        <hr>
                        <?php 
                    } ?>
                    
                    <?php if ($single_product_detail->strength) { ?>                        <div class="product-code ">
                        strength : <span class="text-info">{{$single_product_detail->strength}}</span>
                        </div>  
                        <hr>
                        <?php 
                    } ?>
                    
                        <?php if ($single_product_detail->strength) { ?>  
                        <div class="product-code ">
                        Price: <span class="text-info">{{$single_product_detail->price}} TK</span>
                        <hr>
                        </div> 
                        <?php 
                    } ?>
                      
                        <hr>
                        <?php if ($single_product_detail->offer > 1) { ?>
                        <div class="product-code ">
                        Offer: <span class="text-info">{{$single_product_detail->offer }} %</span>
                        </div> 
                     
                        <hr>
                        <?php 
                    } ?>

                        <div class="product-code ">
                        <?php if ($single_product_detail->userfor) { ?>
                        User for : <span class="text-info">{{$single_product_detail->userfor}}</span>
                        <?php 
                    } ?>
                        </div> 
                      <br>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tags">
                        <div class="block-title">information</div>
                        <div class="block-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                           
                        
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="reviews">
<!--                        <div class="block-title">reviews</div>-->
<!--                        <div id="disqus_thread"></div>-->
<!--<script>-->

<!--/**-->
<!--*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.-->
<!--*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/-->

<!--var disqus_config = function () {-->
<!--this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable-->
<!--this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable-->
<!--};-->

<!--(function() { // DON'T EDIT BELOW THIS LINE-->
<!--var d = document, s = d.createElement('script');-->
<!--s.src = 'https://bdappsmaker.disqus.com/embed.js';-->
<!--s.setAttribute('data-timestamp', +new Date());-->
<!--(d.head || d.body).appendChild(s);-->
<!--})();-->
<!--</script>-->
<!--<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>-->
                            
                    </div>
                </div>
            </div>  
            <!-- product tab info -->



        </div><!-- Main Content -->
        
       

    </div>
</div>


</main>
         <!-- /page content -->
         @stop