@extends('admin/main/master');
@section('content')
   <!-- page content -->
   <div class="right_col" role="main">
   <div class="container">
          <h1 class="jumbotron-heading text-center text-primary">Add New Pages</h1>
          @if (Session::has('message'))
        <h4 class="text-info">{!! session('message') !!}</h4>
   @endif
          @if ( count( $errors ) > 0 )      
                @foreach ($errors->all() as $error)
            <p style="color:red">{{ $error }}</p>
            @endforeach
            @endif
          <!-- /top tiles -->
<form id="demo-form2"  action="{{route('admin_save_Page')}}" method="POST" class="form-horizontal form-label-left"   enctype="multipart/form-data">
            {{ csrf_field() }}
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="page-title">Page Title <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="page-title" name="title" placeholder="Enter Your Page Title" required="required" class="form-control col-md-7 col-xs-12">
  </div>
</div>



<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Upload Image  <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="file" id="image" name="image"  class="form-control col-md-7 col-xs-12">
  </div>
</div>


<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mytextarea" >Page Content <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <textarea type="text" id="mytextareaa" required="required" name="content"  class="form-control col-md-7 col-xs-12" rows="4" cols="50">

</textarea>
  </div>
</div>

<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="isavailable">Status <span class="required"> </span>
  </label>
<div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="isVisible" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="isVisible" checked="checked" value="public" data-parsley-multiple="isVisible"> Public 
                            </label>
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="isVisible" value="private" data-parsley-multiple="isVisible"> Private
                            </label>
                          </div>
                        </div>
</div>

<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" >Add Meta Tag <span class="required"> </span>
  </label>
  <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="metakey" required="required" type="text" name="metakey" class="tags form-control" placeholder="Add Meta Tag, Ex: social, adverts, sales" >
                        </div>  
 </div>




<div class="ln_solid"></div>
<div class="form-group">
  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
    <button class="btn btn-primary" type="reset">Reset</button>
    <button type="submit" class="btn btn-success">Submit</button>
  </div>
</div>

</form>
     
        <!-- /page content -->
        @stop