@extends('fornt/master/allmaster')
@section('content')
            <!-- banner -->
            <main class="site-main">

<div class="columns container">
       
         <!-- store order Total in session -->
        
        <div class="container">
	<div class="row text-center">
        <div class="col-sm-6 col-sm-offset-3">
        <br><br> <h2 style="color:#0fad00">Success</h2>
        <h3>Dear,{{Auth::user()->name}}
        
        </h3>
        <p style="font-size:20px;color:#5C5C5C;">Thank you for your Order</p>
<p>Your Order Total =  <?php 
       echo  Session::get('total_price_with_offer');
        ?> TK</p>
        <p>We will Delivery your products . As soon as possible.</p>
        <a href="/" class="btn btn-success">     Go Home     </a>
    <br><br>
        </div>
        
	</div>
</div>
      
    <br>
</div>


</main>
         <!-- /page content -->
         @stop