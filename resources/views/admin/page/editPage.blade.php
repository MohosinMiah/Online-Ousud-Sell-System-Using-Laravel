@extends('admin/main/master')
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
<form id="demo-form2"  action="{{route('admin_update_Page')}}" method="POST" class="form-horizontal form-label-left"   enctype="multipart/form-data">
            {{ csrf_field() }}
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="page-title">Page Title <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input type="text" id="page-title" name="title" value="{{$pageLists->title}}" required="required" class="form-control col-md-7 col-xs-12">
  
  <input type="hidden" id="page-title" name="ID" value="{{$pageLists->id}}" class="form-control col-md-7 col-xs-12">
  </div>
</div>



<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Upload Image  <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="file" id="image" name="image"  class="form-control col-md-7 col-xs-12">
    <?php if (!empty($pageLists->image)) { ?>
    <img class="img-circle profile_img" src="/images/{{$pageLists->image}}" >
    <?php 
  } else { ?>
        <img class="img-circle profile_img" src="http://placehold.it/550x350" alt="">

    <?php 
  } ?>
  </div>
</div>


<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mytextarea" >Page Content <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <textarea type="text" id="mytextareaa" required="required"   name="content"  class="form-control col-md-7 col-xs-12" rows="4" cols="50">
    {{$pageLists->content}}
</textarea>
  </div>
</div>


<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="isavailable">Status <span class="required"> </span>
  </label>
<div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="isVisible" class="btn-group" data-toggle="buttons">
    <label <?php if ($pageLists->isVisible == "public") { ?>class="btn btn-primary" data-toggle-class="btn-primary" <?php 
                                                                                                              } else { ?> class="btn btn-default"  data-toggle-passive-class="btn-default" <?php 
                                                                                                                                                                                                } ?> data-toggle-passive-class="btn-default">
                              <input type="radio" name="isVisible" <?php if ($pageLists->isVisible == "public") { ?> checked="checked" <?php 
                                                                                                                                  } ?>value="public" data-parsley-multiple="isVisible"> Public 
                            </label>
                            <label <?php if ($pageLists->isVisible == "private") { ?>class="btn btn-primary" data-toggle-class="btn-primary" <?php 
                                                                                                                                        } else { ?> class="btn btn-default"  data-toggle-passive-class="btn-default" <?php 
                                                                                                                                                                                                                        } ?>>
                              <input type="radio" name="isVisible" value="private" <?php if ($pageLists->isVisible == "private") { ?> checked="checked" <?php 
                                                                                                                                                  } ?> data-parsley-multiple="isVisible"> Private
                            </label>
                          </div>
                        </div>
</div>

<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" >Add Meta Tag <span class="required"> </span>
  </label>
  <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="metakey"  value="{{$pageLists->metakey}}"  required="required" type="text" name="metakey" class="tags form-control" placeholder="Add Meta Tag, Ex: social, adverts, sales" >
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

     </div>

        <!-- /page content -->
        @stop