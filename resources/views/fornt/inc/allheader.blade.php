<!DOCTYPE html>
<html lang="en">

<head>
    <title>Health Pharma</title>
    <link rel="shortcut icon" type="image/png" href="/images/media/index3/favicon.png">

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    <!-- Style CSS -->

    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css')}}">

</head>
<body class="cms-index-index index-opt-4">

    <div class="wrapper">

        <!-- HEADER -->
        <header class="site-header header-opt-4 cate-show">

            <div class="header-top">
                <div class="container">

                    <ul class="nav-left" >
                        <li><span>Welcome to Healthpharma</span></li>
                        <li><span>Call Us: 01648462005</span></li>
                        <!-- <li><a href="#"><img src="/images/media/index3/log-face.png" alt="log-face"></a></li> -->
						<li><a href="#"><img src="/images/media/index3/viber.png" ></a></li>
						<li><a href="#"><img src="/images/media/index3/whatsapp.png" ></a></li>
						<li><a href="#"><img src="/images/media/index3/imo.png"> </a></li>
                    </ul>

                    <ul class="nav-right">

                               <li><a href="/contact-us">Contact Us</a></li>

                     <li><a href="/corporate/order">Corporate order</a></li>
                    <?php    
                   if (Auth::check()) {
                    ?>
                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                        <li class="dropdown setting">
                            <a data-toggle="dropdown" role="button" href="#" class="dropdown-toggle "><span>My Account</span> <i aria-hidden="true" class="fa fa-angle-down"></i></a>
                            
                            <div class="dropdown-menu  ">
                          
                                <ul class="account">
                                    <li><a href="/customer/order/list">Order List</a></li>
                                    <li><a href="/customer/shipping/view">Shipping Info</a></li>
                                    <li><a href="/view/wishlist">Wishlist</a></li>
                                    
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    <?php   } else{ ?>
                        <li><a href="/register/customer">Registar</a></li>
                        <li><a href="/login/customer">Login  </a></li>
                    <?php } ?>
                        <li><a href="#" >Support</a></li>
                    </ul>

                </div>
            </div>

            <!-- header-content -->
            <div class="header-content">
                <div class="container">

                    <div class="clearfix">

                        <div class="nav-left">
                        <?php    
  
  $logo = DB::table('logos')->where('id',1)->first();
   
  ?>

                            <!-- logo -->
                            
                            <strong class="logo">
                                
                                <a href="www.healthpharma.com.bd"><img src="/images/1547736055_logo241.png" ></a>
                            </strong><!-- logo -->
                        </div>
                        
                        <div class="nav-right">
<!-- ***************************  Cart Information ********************************  -->
                            <!-- block mini cart -->
                       <?php 
                        $total_price = 0;
                        $total_qty = 0;
                        $session_id = Session::getId();
                        $cartinfos = DB::table('carts')->where('session_id', $session_id)->get();
                        ?>
                            <div class="block-minicart dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <span class="cart-icon"></span>
                                    <span class="counter qty">
                                        <span class="cart-text">My Cart</span>
                                        <span class="counter-number">{{count($cartinfos)}}</span>
                                        <span class="counter-label">{{count($cartinfos)}} <span>Item(s)</span></span>
                                        <!-- <span class="counter-price">$75.00</span> -->
                                    </span>
                                </a>
                                <div class="dropdown-menu">
                                    <form>
                                        <div  class="minicart-content-wrapper" >
                                            <div class="subtitle">
                                                You have {{count($cartinfos)}} item(s) in your cart
                                            </div>
                                            <div class="minicart-items-wrapper">
                                                <ol class="minicart-items">
                                                   <?php foreach ($cartinfos as $cartinfo) { ?>
                                                    <li class="product-item">
                                                        <a class="product-item-photo" href="#" title="The Name Product">
                                                            <img class="product-image-photo" src="/images/{{$cartinfo->product_image}}" alt="{{$cartinfo->product_name}}">
                                                        </a>
                                                        <div class="product-item-details">
                                                            <strong class="product-item-name">
                                                                 <?php 
                                                                $prod_id = $cartinfo->product_id;
                                                                $single_prod = DB::table('tproducts')->where('id', $prod_id)->first();
                                                                ?>
                                                                <a href="#">{{$single_prod->brand_name}}</a>
                                                                
                                                            </strong>
                                                            <div class="product-item-price">
                                                                <span class="price">{{$cartinfo->price}} TK</span>
                                                            </div>
                                                            <div class="product-item-qty">
                                                                <span class="label">Qty: </span ><span class="number">{{$cartinfo->qty}}</span>
                                                            </div>
                                                            <div class="product-item-actions">
                                                                <a class="action delete"href="/cart/item/delete/{{$cartinfo->id}}" onclick="return confirm('Are You Sure To delete ?')" title="Remove item">
                                                                    <span>Remove</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                         <?php 


                                                        if ($cartinfo->qty > 1) {
                                                            $total_qty = $cartinfo->qty;
                                                        } else {
                                                            $total_qty = 1;

                                                        }

                                                        $total_price += ($total_qty * $cartinfo->price);
                                                    
                                                        // var_dump($total_qty*$total_price );


                                                    } ?>

                                                    <!-- <li class="product-item">
                                                        <a class="product-item-photo" href="#" title="The Name Product">
                                                            <img class="product-image-photo" src="/images/media/index1/minicart2.jpg" alt="The Name Product">
                                                        </a>
                                                        <div class="product-item-details">
                                                            <strong class="product-item-name">
                                                                <a href="#">Donec Ac Tempus</a>
                                                            </strong>
                                                            <div class="product-item-price">
                                                                <span class="price">61,19 €</span>
                                                            </div>
                                                            <div class="product-item-qty">
                                                                <span class="label">Qty: </span ><span class="number">1</span>
                                                            </div>
                                                            <div class="product-item-actions">
                                                                <a class="action delete" href="#" title="Remove item">
                                                                    <span>Remove</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li> -->
                                                </ol>
                                            </div>
                                            <div class="subtotal">
                                                <span class="label">Total</span>
                                                <span class="price">{{$total_price}} TK</span>
                                            </div>
                                            <div class="actions">
                                                <!-- <a class="btn btn-viewcart" href="">
                                                    <span>Shopping bag</span>
                                                </a> -->
                                                <a class="btn btn-checkout" href="/cart/view" title="Check Out">
                                                    <span>View Cart</span>
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- block mini cart -->

                        </div>

                        <div class="nav-mind">

                            <!-- menu -->
                            <div class="block-nav-menu">
                                <div class="actions-close-nav"><span data-action="close-nav" class="close-nav"><span>close</span></span></div>
                                <ul class="ui-menu">
                                    <li class="parent parent-megamenu active">
                                        <a href="/">Home</a>
                                        <span class="toggle-submenu"></span>
                                        
                                    </li>
                                    <?php 
                                    $cat_lists = DB::table('categories')->limit(5)->get();
                                    foreach ($cat_lists as $cat_list) {
                                        ?>
                                      <li>  
                                      <a href="/category/{{str_slug($cat_list->title)}}">
                                            {{$cat_list->title}}
                                        </a>
                                        </li>
                                        <?php 
                                    } ?>
                                </ul>

                            </div> <!--  menu -->
                           

                        </div>

                    </div>                    

                </div>
            </div><!-- header-content -->

            <div class=" header-nav mid-header">
                <div class="container">
                    <div class="box-header-nav">

                        <span data-action="toggle-nav-cat" class="nav-toggle-menu nav-toggle-cat"><span>Categories</span><i aria-hidden="true" class="fa fa-bars"></i></span>

                        <span data-action="toggle-nav" class="nav-toggle-menu"><span>Menu</span><i aria-hidden="true" class="fa fa-bars"></i></span>
                        
                        <!-- categori -->
                        <div class="block-nav-categori">

                            <div class="block-title">
                                <span>Categories</span>
                            </div>

                           <div class="block-content">
                                <div class="clearfix"><span data-action="close-cat" class="close-cate"><span>Categories</span></span></div>
                                <ul class="ui-categori">
                                <?php 
                                        $cat_lists = DB::table('categories')->limit(18)->get();
                                        foreach ($cat_lists as $cat_list) {
                                        ?>
                                    <li>
                                        <a href="/category/{{str_slug($cat_list->title)}}">
                                            {{$cat_list->title}}
                                        </a>
                                       
                                    </li>
                                        <?php } ?>
                                   
                                    
                                    
                                </ul>

                               
                            </div>
                        </div>
                        <!-- categori -->

                         <!-- search -->
                         <div class="block-search">
                            <div class="block-title">
                                <span>Search</span>
                            </div>
                            <form action="{{ route('search_result') }}"  method="GET" role="search">
                            <div class="block-content">
                                <div class="categori-search  ">
                                    <select name="s" data-placeholder="All Categories" class="categori-search-option">
                                        <option value="all">All Categories</option>
                                        <?php 
                                        $cat_lists = DB::table('categories')->limit(18)->get();
                                        foreach ($cat_lists as $cat_list) {
                                        ?>
                                        <option value="{{str_slug($cat_list->id)}}"> {{$cat_list->title}}</option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-search">
                                 
                                        <div class="box-group">
                                            <input type="text" name="p" class="form-control" placeholder="Type Your Keyword...">
                                            <button class="btn btn-search" type="submit"><span>search</span></button>
                                        </div>
                                    
                                </div>
                                </form>
                            </div>
                        </div>
                        
                        <!-- menu -->
                        <div class="block-nav-menu">
                                <div class="actions-close-nav"><span data-action="close-nav" class="close-nav"><span>close</span></span></div>
                                <ul class="ui-menu">
                                    <li class="parent parent-megamenu active">
                                        <a href="/">Home</a>
                                        <span class="toggle-submenu"></span>
                                        
                                    </li>
                                    <?php 
                                    $cat_lists = DB::table('categories')->limit(5)->get();
                                    foreach ($cat_lists as $cat_list) {
                                        ?>
                                      <li>  
                                      <a href="/category/{{str_slug($cat_list->title)}}">
                                            {{$cat_list->title}}
                                        </a>
                                        </li>
                                        <?php 
                                    } ?>
                                </ul>

                            </div> <!--  menu -->
                            
                        <!--language  -->
                        <div class="dropdown switcher  switcher-language">
                            <a role="button" href="http://www.healthpharma.com.bd/contact-us" class="dropdown-toggle switcher-trigger" aria-expanded="false" style="font-size: 17px; color: #144a1c; font-weight: 600;
">Upload Prescription</a>
                            <!-- <ul class="dropdown-menu switcher-options ">
                                <li class="switcher-option">
                                    <a href="#">
                                        <img class="switcher-flag" alt="flag" src="/images/flags/flag_english.png">English
                                    </a>
                                </li>
                                <li class="switcher-option">
                                    <a href="#">
                                        <img class="switcher-flag" alt="flag" src="/images/flags/flag_french.png">French
                                    </a>
                                </li>
                                <li class="switcher-option">
                                    <a href="#">
                                        <img class="switcher-flag" alt="flag" src="/images/flags/flag_germany.png">Germany
                                    </a>
                                </li>
                            </ul> -->
                        </div>

                       
                        
                    </div>
                </div>
            </div>

        </header><!-- end HEADER -->        
