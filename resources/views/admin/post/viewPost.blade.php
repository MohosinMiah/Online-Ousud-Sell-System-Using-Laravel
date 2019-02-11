@extends('admin/main/master');
@section('content')
   <!-- post content -->
   <div class="right_col" role="main">
   <div class="container">
          <h1 class="jumbotron-heading text-center text-primary">View Posts</h1>
     
          <!-- /top tiles -->
<form id="demo-form2"   class="form-horizontal form-label-left"   enctype="multipart/form-data">
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="post-title">Post Title <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="post-title" name="title" readonly value="{{$postLists->title}}"  class="form-control col-md-7 col-xs-12">
  </div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="post-type">Post Type <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="post-title" name="post_type"  readonly  value="{{$postLists->post_type}}"  class="form-control col-md-7 col-xs-12">
  </div>
</div>



<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Upload Image  <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
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
   <p> {{$postLists->content}}</p>
  </div>
</div>

<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="isavailable">Status <span class="required"> </span>
  </label>
<div class="col-md-6 col-sm-6 col-xs-12">
                                <?php  if($postLists->status == 'public'){?>
                          <div id="status" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="status" value="public" data-parsley-multiple="status"> Public 
                            </label>
                                <?php } else{ ?>
                                    <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="status"  value="private" data-parsley-multiple="status"> Private 
                            </label>
                                <?php } ?>
                          </div>
                          </div>
                          </div>


   <div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="post-type">Post Meta Tags <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="metakey" readonly name="metakey"  value="{{$postLists->metakey}}"  class="form-control col-md-7 col-xs-12">
  </div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="post-type">Post Creation Date <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="created_at" readonly name="created_at"  value="{{$postLists->created_at}}"  class="form-control col-md-7 col-xs-12">
  </div>
</div>



<div class="ln_solid"></div>
<div class="form-group">
  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
    <a href="/adminpanel/postList" >Back To List</button>
  </div>
</div>

</form>



        <!-- /post content -->
        @stop