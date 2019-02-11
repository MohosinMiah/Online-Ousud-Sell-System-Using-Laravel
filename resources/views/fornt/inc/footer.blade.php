     <!-- FOOTER -->
     <footer class="site-footer footer-opt-3">

<div class="footer-top">
<div class="container">

<strong class="logo-footer">
 &nbsp; &nbsp;    <a href="#"><img src="/images/Govt_logo-daily-sun.jpg" style="width: 38%; " alt="logo"><p>Drug Licence : DC17093 (Online Pharmacy) </p>
 
 </a>
</strong>&nbsp; &nbsp; 
<strong class="logo-footer">
  &nbsp; &nbsp;  
  <br>  <br>  
  <p class="text-success "><strong>Before taking antibiotics, consult your doctor.</strong></p>
<p class="text-success ">Read the production company's <br> instructions for more precautions.</p>
  </a>
</strong>&nbsp; &nbsp; 
<strong class="logo-footer" style="margin-left: 44px;margin-top: 20px;>
  &nbsp; &nbsp;   <a href="#"><img src="/images/secure.jpg" alt="logo"><p>Secured By Norton And COMODO SSL Certificate </p>
</strong>&nbsp; &nbsp; 


</div>
<hr>
<br>
    <div class="container">

        <strong class="logo-footer">
            <a href="#"><img src="/images/media/index3/logo-footer.png" alt="logo"></a>
        </strong>

        

        <div class="block-social">
            <div class="block-title">Let’s Socialize </div>
            <div class="block-content">
                <a href="https://www.facebook.com/healthpharmabd/" class="sh-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://www.linkedin.com/in/healthpharma-bd-a0426a176?fbclid=IwAR0nl9YexvVWnQzGvgGIJ3Pf9JOePq3GF_3XDJtpwL07ps2kqmjFk30MPTA" class="sh-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <a style="    background-color: #e40000;" href="#" class="sh-youtube"><i class="fa fa-youtube"  aria-hidden="true"></i></a>
                <a href="https://twitter.com/HealthPharma111?s=07&fbclid=IwAR10Wi1fSTphyA0SoSmJ20mWFatkdt5dzgeNFP2w0gc1o1d2R7Iq1OBQrU0" class="sh-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="https://plus.google.com/117150359097048756677?fbclid=IwAR2wFsScZVbw9oV1mqaVyyYm5CJj16Th1usESpin8gY2ge3vc9waLc1LsEA" class="sh-google"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                <a style="    background-color: #a32300;" href="https://bn.quora.com/profile/Health-Pharma?ch=99&share=667bc36b&srid=4pf02&fbclid=IwAR2a8WI1nGoQxE-eMHHM74NCyJ75RIiEJpdig0qeo1ZiNVPdAkZ0x8lvZ1c" class="sh-quora"><i class="fa fa-quora" aria-hidden="true"></i></a>
                <a style="    background-color: #7d3aae;" href="https://www.instagram.com/healthpharma.com.bd/?fbclid=IwAR1PxhKLp9FiCAiUDi5i5-L9F3ZuVSLSiYG0riQ3c8pWheU7id8DF-k01KY" class="sh-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                
            </div>
        </div>
        <ul class="nav-link">
            <li><a href="/about-us">About Us</a></li>
            <li><a href="/privacy-policy">Privacy Policy </a></li>
            <li><a href="/terms-and-condition">Terms of Use</a></li>
            <li><a href="/how-to-buy">How To Buy      </a></li>
            <li><a href="/delivery-policy">Delivery Policy</a></li>
            <li><a href="/why-trust">Why Trust Us</a></li>
        </ul>
    </div>
</div>

<div class="footer-content" style="background-image: url(/images/media/index3/bg-footer.jpg);">

    



    <div class="footer-column">
        <div class="container">

            <div class="footer-column1">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-sm-6">
                        <h3 class="title">INFORMATION</h3>
                        <table class="address">
                            <tr>  
                                <td><i class="fa fa-map-marker" aria-hidden="true"></i></td>
                                <td>Register  Address: Zam Zam Tower,Level:2,Shop:309, Sonargaon Janapath Road, Uttara-1230</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-phone" aria-hidden="true"></i></td>
                                <td>01648462005</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-envelope" aria-hidden="true"></i></td>
                                <td>info@healthpharma.com.bd</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-mobile" aria-hidden="true"></i></td>
                                <td>Hotline: 01304419901</td>
                            </tr>
                        </table>
                        
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6">
                        
                        <h3 class="title">COMPANY</h3>
                        <ul class="links">
                        <li><a href="/about-us">About Us</a></li>
                        <li><a href="/privacy-policy">Privacy Policy </a></li>
                        <li><a href="/terms-and-condition">Terms of Use</a></li>
                        <li><a href="/how-to-buy">How To Buy      </a></li>
                        <li><a href="/delivery-policy">Delivery Policy</a></li>
                        <li><a href="/contact-us">Contact Us</a></li>
                        </ul>
                        
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6">
                    <h3 class="title">my account</h3>
                       
                       <ul class="links">
                    <?php    
                   if (Auth::check()) {
                    ?>
                       
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
                                    <?php   } else{ ?>
                        <li><a href="/register/customer">Registar</a></li>
                        <li><a href="/login/customer">Login  </a></li>
                    <?php } ?>
                    </ul>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6">
                        
                        <h3 class="title">SUPPORT</h3>
                        <form action="{{route('store_subscriver')}}" method="POST">
                {{ csrf_field() }}
                    <div class="input-group">
                        <input type="email"  name="email"  required class="form-control" placeholder="Enter Your E-mail Address">
                        <span class="input-group-btn">
                            <button class="btn btn-subcribe" type="button"><span>Subscribe</span></button>
                        </span>
                    </div>
                </form>
                        <ul class="links">
                            <img src="/images/media/index3/android.jpg">
                            <img src="/images/media/index3/ios.jpg">
                        </ul>
                        
                    </div>
                    
                </div>
            </div>

            <div class="footer-column2">

                <div class="copyright">
                    
                    Copyright © 2018 Health Pharma. All Rights Reserved Healthpharma
                   
                </div>
                
                <div class="payment">
                    <img src="/images/media/index3/payment1.jpg" alt="payment">
                    <img src="/images/media/index3/payment2.jpg" alt="payment">
                    <img src="/images/media/index3/payment3.jpg" alt="payment">
                    <img src="/images/media/index3/payment4.jpg" alt="payment">
                    <img src="/images/media/index3/payment5.jpg" alt="payment">
                </div>

            </div>

        </div>
    </div>

</div>

<style>.fb-livechat,.fb-widget{display:none}.ctrlq.fb-button,.ctrlq.fb-close{position:fixed;right:24px;cursor:pointer}.ctrlq.fb-button{z-index:1;background:url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDEyOCAxMjgiIGhlaWdodD0iMTI4cHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjggMTI4IiB3aWR0aD0iMTI4cHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnPjxyZWN0IGZpbGw9IiMwMDg0RkYiIGhlaWdodD0iMTI4IiB3aWR0aD0iMTI4Ii8+PC9nPjxwYXRoIGQ9Ik02NCwxNy41MzFjLTI1LjQwNSwwLTQ2LDE5LjI1OS00Niw0My4wMTVjMCwxMy41MTUsNi42NjUsMjUuNTc0LDE3LjA4OSwzMy40NnYxNi40NjIgIGwxNS42OTgtOC43MDdjNC4xODYsMS4xNzEsOC42MjEsMS44LDEzLjIxMywxLjhjMjUuNDA1LDAsNDYtMTkuMjU4LDQ2LTQzLjAxNUMxMTAsMzYuNzksODkuNDA1LDE3LjUzMSw2NCwxNy41MzF6IE02OC44NDUsNzUuMjE0ICBMNTYuOTQ3LDYyLjg1NUwzNC4wMzUsNzUuNTI0bDI1LjEyLTI2LjY1N2wxMS44OTgsMTIuMzU5bDIyLjkxLTEyLjY3TDY4Ljg0NSw3NS4yMTR6IiBmaWxsPSIjRkZGRkZGIiBpZD0iQnViYmxlX1NoYXBlIi8+PC9zdmc+) center no-repeat #0084ff;width:60px;height:60px;text-align:center;bottom:24px;border:0;outline:0;border-radius:60px;-webkit-border-radius:60px;-moz-border-radius:60px;-ms-border-radius:60px;-o-border-radius:60px;box-shadow:0 1px 6px rgba(0,0,0,.06),0 2px 32px rgba(0,0,0,.16);-webkit-transition:box-shadow .2s ease;background-size:80%;transition:all .2s ease-in-out}.ctrlq.fb-button:focus,.ctrlq.fb-button:hover{transform:scale(1.1);box-shadow:0 2px 8px rgba(0,0,0,.09),0 4px 40px rgba(0,0,0,.24)}.fb-widget{background:#fff;z-index:2;position:fixed;width:360px;height:435px;overflow:hidden;opacity:0;bottom:0;right:24px;border-radius:6px;-o-border-radius:6px;-webkit-border-radius:6px;box-shadow:0 5px 40px rgba(0,0,0,.16);-webkit-box-shadow:0 5px 40px rgba(0,0,0,.16);-moz-box-shadow:0 5px 40px rgba(0,0,0,.16);-o-box-shadow:0 5px 40px rgba(0,0,0,.16)}.fb-credit{text-align:center;margin-top:8px}.fb-credit a{transition:none;color:#bec2c9;font-family:Helvetica,Arial,sans-serif;font-size:12px;text-decoration:none;border:0;font-weight:400}.ctrlq.fb-overlay{z-index:0;position:fixed;height:100vh;width:100vw;-webkit-transition:opacity .4s,visibility .4s;transition:opacity .4s,visibility .4s;top:0;left:0;background:rgba(0,0,0,.05);display:none}.ctrlq.fb-close{z-index:4;padding:0 6px;background:#365899;font-weight:700;font-size:11px;color:#fff;margin:8px;border-radius:3px}.ctrlq.fb-close::after{content:'x';font-family:sans-serif}
.fb-button {
    
    margin-right: 5%;

}
</style>

<div class="fb-livechat">
<div class="ctrlq fb-overlay"></div>
<div class="fb-widget">
<div class="ctrlq fb-close"></div>
<div class="fb-page" data-href="https://www.facebook.com/healthpharmabd" data-tabs="messages" data-width="360" data-height="400" data-small-header="true" data-hide-cover="true" data-show-facepile="false">
<blockquote cite="https://www.facebook.com/healthpharmabd" class="fb-xfbml-parse-ignore"> </blockquote>
</div>
<div class="fb-credit">
<a href="http://healthpharma.com.bd/" target="_blank"> </a>
</div>
<div id="fb-root"></div>
</div>
<a href="m.me/bdappsmaker" title="Send us a message on Facebook" class="ctrlq fb-button"></a>
</div>

<script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>$(document).ready(function(){var t={delay:125,overlay:$(".fb-overlay"),widget:$(".fb-widget"),button:$(".fb-button")};setTimeout(function(){$("div.fb-livechat").fadeIn()},8*t.delay),$(".ctrlq").on("click",function(e){e.preventDefault(),t.overlay.is(":visible")?(t.overlay.fadeOut(t.delay),t.widget.stop().animate({bottom:0,opacity:0},2*t.delay,function(){$(this).hide("slow"),t.button.show()})):

t.button.fadeOut("medium",function(){t.widget.stop().show().animate({bottom:"30px",opacity:1},2*t.delay),t.overlay.fadeIn(t.delay)})})});</script>


   

</footer><!-- end FOOTER -->        

<!--back-to-top  -->
 <a href="#" class="back-to-top">
<i aria-hidden="true" class="fa fa-angle-up"></i>
</a> 

</div>

<!-- jQuery -->    
<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js')}}"></script>

<!-- sticky -->
<script type="text/javascript" src="{{ URL::asset('js/jquery.sticky.js')}}"></script>

<!-- OWL CAROUSEL Slider -->    
<script type="text/javascript" src="{{ URL::asset('js/owl.carousel.min.js')}}"></script>

<!-- Boostrap --> 
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js')}}"></script>

<!-- Countdown -->  
<script type="text/javascript" src="{{ URL::asset('js/jquery.countdown.min.js')}}"></script>

<!--jquery Bxslider  -->
<script type="text/javascript" src="{{ URL::asset('js/jquery.bxslider.min.js')}}"></script>

<!-- actual --> 
<script type="text/javascript" src="{{ URL::asset('js/jquery.actual.min.js')}}"></script>

<!-- Chosen jquery-->    
<script type="text/javascript" src="{{ URL::asset('js/chosen.jquery.min.js')}}"></script>

<!-- parallax jquery--> 
<script type="text/javascript" src="{{ URL::asset('js/jquery.parallax-1.1.3.js')}}"></script>

<!-- elevatezoom --> 
<script type="text/javascript" src="{{ URL::asset('js/jquery.elevateZoom.min.js')}}"></script>

<!-- fancybox -->
<script src="{{ URL::asset('js/fancybox/source/jquery.fancybox.pack.js')}}"></script>
<script src="{{ URL::asset('js/fancybox/source/helpers/jquery.fancybox-media.js')}}"></script>
<script src="{{ URL::asset('js/fancybox/source/helpers/jquery.fancybox-thumbs.js')}}"></script>

<!-- arcticmodal -->
<script src="{{ URL::asset('js/arcticmodal/jquery.arcticmodal.js')}}"></script>
<!-- load share js -->
<script src="{{ asset('js/share.js') }}"></script>

<!-- Main -->  
<script type="text/javascript" src="{{ URL::asset('js/main.js')}}"></script>

</body>

<!-- Mirrored from kute-themes.com/html/kuteshop/html/home4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Nov 2018 09:49:19 GMT -->
</html>