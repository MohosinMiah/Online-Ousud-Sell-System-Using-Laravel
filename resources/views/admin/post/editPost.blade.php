@extends('admin/main/master');
@section('content')
   <!-- post content -->
   <div class="right_col" role="main">
   <div class="container">
          <h1 class="jumbotron-heading text-center text-primary">Add New Posts</h1>
          @if (Session::has('message'))
        <h4 class="text-info">{!! session('message') !!}</h4>
   @endif
          @if ( count( $errors ) > 0 )      
                @foreach ($errors->all() as $error)
            <p style="color:red">{{ $error }}</p>
            @endforeach
            @endif
          <!-- /top tiles -->
<form id="demo-form2"  action="{{route('admin_update_Post')}}" method="POST" class="form-horizontal form-label-left"   enctype="multipart/form-data">
            {{ csrf_field() }}
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="post-title">Post Title <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input type="text" id="post-title" name="title"  value="{{$postLists->title}}" required="required" class="form-control col-md-7 col-xs-12">
  <input type="hidden" id="post-title" name="ID"  value="{{$postLists->id}}" required="required" class="form-control col-md-7 col-xs-12">
  </div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="post-type">Post Type <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="post-title"  value="{{$postLists->post_type}}" name="post_type" placeholder="Enter Your post Type" required="required" class="form-control col-md-7 col-xs-12">
  </div>
</div>



<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Upload Image  <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input type="file" id="image" name="image"  class="form-control col-md-7 col-xs-12">

  <?php if(!empty($postLists->image)){  ?>
                          <img class="img-circle profile_img" src="/images/{{$postLists->image}}" alt="">
                          <?php } else{ ?>
                            <img class="img-circle profile_img" src="http://placehold.it/550x350" alt="">

                        <?php   }?> 
  </div>
</div>


<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mytextarea" >post Content <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <textarea type="text" id="mytextareaa" required="required" name="content"  class="form-control col-md-7 col-xs-12" rows="4" cols="50">
    {{$postLists->content}}
</textarea>
  </div>
</div>

<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="status" class="btn-group" data-toggle="buttons">
                          <label  <?php if($postLists->status == 'public'){ ?> class="btn btn-primary" data-toggle-class="btn-primary"<?php }else{?> class="btn btn-default"  data-toggle-passive-class="btn-default" <?php } ?> data-toggle-passive-class="btn-default">
                                <input type="radio" name="status" <?php if($postLists->status == 'public'){ ?> checked="checked" <?php } ?>  value="public" data-parsley-multiple="status"> &nbsp; Public &nbsp;
                            </label>
                            <label  <?php if($postLists->status == 'private'){ ?> class="btn btn-primary" data-toggle-class="btn-primary"<?php }else{?> class="btn btn-default"  data-toggle-passive-class="btn-default" <?php } ?>>
                              <input type="radio" name="status" <?php if($postLists->status == 'private'){ ?> checked="checked" <?php } ?>value="private" data-parsley-multiple="status"> Private
                            </label>
                          </div>
                        </div>
</div>

<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" >Add Meta Tag <span class="required"> </span>
  </label>
  <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="metakey" required="required" type="text" name="metakey" class="tags form-control"  value="{{$postLists->metakey}}"  >
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
     
        <!-- /post content -->
        @stop