@extends('fornt/master/allmaster')
@section('content')
   <!-- page content -->
 <!-- page content -->
   <div class="container">
          <h1 class="jumbotron-heading text-center text-primary">Create Corporate Order</h1>
           <h4 class="text-success text-center">Call Us and Confirm Your Corporate Order or Send Information </h4>
              <hr>

          @if (Session::has('message'))
        <h4 class="text-info">{!! session('message') !!}</h4>
   @endif
          @if ( count( $errors ) > 0 )      
                @foreach ($errors->all() as $error)
            <p style="color:red">{{ $error }}</p>
            @endforeach
            @endif
          <!-- /top tiles -->
<form id="demo-form2"  action="{{route('save_corporate_order')}}" method="POST" class="form-horizontal form-label-left"   enctype="multipart/form-data">
            {{ csrf_field() }}
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="name" name="name" value="{{old('name')}}" placeholder="Enter Your Name" required="required" class="form-control col-md-7 col-xs-12">
  </div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="position">Position <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="position" name="position"  value="{{old('position')}}" placeholder="Enter Your Position" required="required" class="form-control col-md-7 col-xs-12">
  </div>
</div>



<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mobile" >Mobile <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="mobile" name="mobile"  value="{{old('mobile')}}" placeholder="Enter Your Mobile" required="required" class="form-control col-md-7 col-xs-12">

  </div>
</div>


<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email" >Email <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="email" id="email" required="required"  value="{{old('email')}}"  name="email" placeholder="Enter Your Email" class="form-control col-md-7 col-xs-12" >

  </div>
</div>



<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="company_name" >Company Name <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="company_name"  value="{{old('company_name')}}"  required="required" name="company_name"  placeholder="Enter Your Company Name" class="form-control col-md-7 col-xs-12" rows="4" cols="50">

  </div>
</div>



<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="company_name" >Address <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <textarea id="address" required="required" name="address"  placeholder="Enter Your Address" class="form-control col-md-7 col-xs-12" rows="4" cols="50">
 {{old('address')}}
</textarea>
  </div>
</div>





<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="details" >Requirements <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <textarea id="details" required="required" name="details"  placeholder="Enter Details . Ex. 1. Product name one . 2.Product name two" class="form-control col-md-7 col-xs-12" rows="4" cols="50">
{{old('details')}}
</textarea>
  </div>
</div>




<div class="ln_solid"></div>
<div class="form-group">
  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
    <button class="btn btn-primary" type="reset">Reset</button>
    <button type="submit" class="btn btn-success">Send</button>
  </div>
</div>

</form>    
</div>

        <!-- /page content -->
        @stop