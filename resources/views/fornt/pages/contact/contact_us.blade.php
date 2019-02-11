@extends('fornt/master/allmaster')
@section('content')
       
         <!-- /page content -->
          <main class="site-main">
<div class="columns container">
    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="page-subheading"style="color: #006b36;">CONTACT US</h3>

          @if (Session::has('message'))
        <h4 class="text-info">{!! session('message') !!}</h4>
   @endif
          @if ( count( $errors ) > 0 )      
                @foreach ($errors->all() as $error)
            <p style="color:red">{{ $error }}</p>
            @endforeach
            @endif
                              <form class="form-horizontal" method="POST" action="{{ route('contact_us') }}">
                        {{ csrf_field() }}
                              <div class="contact-form-box">
                               
                                <div class="form-selector">
                                    <label>Name</label>
                                    <input type="text" name="name" placeholder="Enter Your Name" required id="name" class="form-control input-sm">
                                </div>
                                <div class="form-selector">
                                    <label>Mobile</label>
                                    <input type="text" name="mobile" placeholder="Enter Your mobile" required id="mobile" class="form-control input-sm">
                                </div>
                                <div class="form-selector">
                                    <label>Email</label>
                                    <input type="email" name="email"  placeholder="Enter Your Email" required id="email" class="form-control input-sm">
                                </div>
                                <div class="form-selector">
                                    <label>Message</label>
                                    <textarea name="message" id="message" rows="5"  cols="10" required class="form-control input-sm"></textarea>
                                </div>
                                <div class="form-selector">
                                    <label>Image(<b class="text-danger">Optional</b>)</label>
                                    <input type="file" name="image">
                                 </div>
                                 <br>

                                <div class="form-selector">
                                    <button type="submit" class="btn btn-primary" id="btn-send-contact">Send</button>
                                </div>
                                <br>
                            </div>
                           </form>

                        </div>
                        <div id="contact_form_map" class="col-xs-12 col-sm-6">
                            <h2 class="page-subheading"style="color: #006b36;">Information</h2>
                            
                            <ul class="store_info">
                                <li><i class="fa fa-home"></i>Register Address: Zam Zam Tower,Level:2,Shop:309, Sonargaon Janapath Road, Uttara-1230</li>
                                <li><i class="fa fa-phone"></i><span>01648462005</span></li>
                                <li><i class="fa fa-phone"></i><span>01304419901</span></li>
                                <li><i class="fa fa-envelope"></i>Email: <span><a href="mailto:%73%75%70%70%6f%72%74@%6b%75%74%65%74%68%65%6d%65.%63%6f%6d">info@healthpharma.com.bd</a></span></li>
                            </ul>                
                            </div>
                    </div>
                    </div>
         @stop