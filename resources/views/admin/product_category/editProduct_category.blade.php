@extends('admin/main/master')
@section('content')
   <!-- page content -->
   <div class="right_col" role="main">
   <div class="container">
          <h1 class="jumbotron-heading text-center text-primary">Edit Product Category</h1>
          @if (Session::has('message'))
        <h4 class="text-info">{!! session('message') !!}</h4>
   @endif
          @if ( count( $errors ) > 0 )      
                @foreach ($errors->all() as $error)
            <p style="color:red">{{ $error }}</p>
            @endforeach
            @endif
          <!-- /top tiles -->
<form id="demo-form2"  action="{{route('admin_update_product_category')}}" method="POST" class="form-horizontal form-label-left"   enctype="multipart/form-data">
            {{ csrf_field() }}
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="page-title">Page Title <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input type="text" id="page-title" name="title" value="{{$categoryLists->title}}" required="required" class="form-control col-md-7 col-xs-12">
  
  <input type="hidden" id="page-title" name="ID" value="{{$categoryLists->id}}" class="form-control col-md-7 col-xs-12">
  </div>
</div>



<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Upload Image  <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="file" id="image" name="image"  class="form-control col-md-7 col-xs-12">
    <?php if (!empty($categoryLists->image)) { ?>
    <img class="img-circle profile_img" src="/images/{{$categoryLists->image}}" >
    <?php 
  } else { ?>
        <img class="img-circle profile_img" src="http://placehold.it/550x350" alt="">

    <?php 
  } ?>
  </div>
</div>







<div class="ln_solid"></div>
<div class="form-group">
  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
    <a href="/adminpanel/addProduct/categoryList" class="btn btn-primary" type="reset">Back To List</a>
    <button type="submit" class="btn btn-success">Submit</button>
  </div>
</div>

</form>

     </div>

        <!-- /page content -->
        @stop