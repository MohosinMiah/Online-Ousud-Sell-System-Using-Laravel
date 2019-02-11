@extends('admin/main/master');
@section('content')
   <!-- page content -->
   <div class="right_col" role="main">
   <div class="container">
          <h1 class="jumbotron-heading text-center text-primary">Update Logo</h1>
          @if (Session::has('message'))
        <h4 class="text-info">{!! session('message') !!}</h4>
   @endif
          @if ( count( $errors ) > 0 )      
                @foreach ($errors->all() as $error)
            <p style="color:red">{{ $error }}</p>
            @endforeach
            @endif
          <!-- /top tiles -->
<form id="demo-form2"  action="{{route('admin_save_brand_logo')}}" method="POST" class="form-horizontal form-label-left"   enctype="multipart/form-data">
            {{ csrf_field() }}

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Upload  Logo  <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="file" id="image" name="image" required class="form-control col-md-7 col-xs-12">
  </div>
  <?php    
  
  $logo = DB::table('logos')->where('id',1)->first();
   
  ?>
  <div class="image image-responsive image-circle">
  <img src="/images/{{$logo->image}}" alt="">
  </div>
</div>




<div class="ln_solid"></div>
<div class="form-group">
  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
    <button type="submit" class="btn btn-success">Update</button>
  </div>
</div>

</form>
     
        <!-- /page content -->
        @stop