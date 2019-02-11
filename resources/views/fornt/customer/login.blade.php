@extends('fornt/master/allmaster')
@section('content')
            <!-- banner -->
            <br>
         <div class="container">
       <br>
      
          @if (Session::has('message'))
        <h4 class="text-info">{!! session('message') !!}</h4>
   @endif
          @if ( count( $errors ) > 0 )      
                @foreach ($errors->all() as $error)
            <p style="color:red">{{ $error }}</p>
            @endforeach
            <br>
            @endif
          <!-- /top tiles -->
          <div class="col-sm-12">
                            <div class="box-authentication">
                                <h3 class="text-primary">Already registered?</h3>
                                <label for="emmail_login">Email address</label>
                                <input type="text" class="form-control" id="emmail_login">
                                <label for="password_login">Password</label>
                                <input type="password" class="form-control" id="password_login">
                                <!-- <p class="forgot-pass"><a href="#">Forgot your password?</a></p> -->
                                <button class="button"><i class="fa fa-lock"></i> Sign in</button>
                            </div>
                        </div>
         <br>
         <!-- /page content -->
         @stop