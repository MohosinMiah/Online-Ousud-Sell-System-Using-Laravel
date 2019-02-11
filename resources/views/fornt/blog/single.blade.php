@extends('fornt/master/allmaster')
@section('content')
            <!-- banner -->
<main class="site-main">
<div class="row container  " style="margin-right: 0px;margin-left: 0px;" >

          <div class="col-lg-12">
          <h2 class="text txt-center text-primary">{{$blog->title}}</h2>

          <hr>
           <p>{!! $blog->content !!}</p>
          
              
          </div>
        </div>
        <br>
</main>
         <!-- /page content -->
         @stop