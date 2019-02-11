@extends('admin/main/master');
@section('content')
   <!-- page content -->
   <div class="right_col" role="main">
   <div class="container">
          <h1 class="jumbotron-heading text-center text-primary">Add New Slider</h1>
          @if (Session::has('message'))
        <h4 class="text-info">{!! session('message') !!}</h4>
   @endif
          @if ( count( $errors ) > 0 )      
                @foreach ($errors->all() as $error)
            <p style="color:red">{{ $error }}</p>
            @endforeach
            @endif
          <!-- /top tiles -->
<form id="demo-form2"  action="{{route('admin_update_title')}}" method="POST" class="form-horizontal form-label-left"   enctype="multipart/form-data">
            {{ csrf_field() }}
         

            <div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="page-title">Update Title  </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="page-title" name="title"  value="{{$title->title}}" required  class="form-control col-md-7 col-xs-12">
  </div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="page-slug">Update Slug  </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="page-slug" name="slug"  value="{{$title->slug}}" required   class="form-control col-md-7 col-xs-12">
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