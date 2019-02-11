@extends('admin/main/master')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
   <div class="container">
          <h1 class="jumbotron-heading text-center text-primary">View Product Category</h1>
<form id="demo-form2"    enctype="multipart/form-data">
            {{ csrf_field() }}
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="page-title">Page Title <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input type="text" id="page-title" name="title" value="{{$categoryLists->title}}" readonly required="required" class="form-control col-md-7 col-xs-12">
  
  </div>
  </div></div>


<br>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">View Uploaded Image  <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <?php if (!empty($categoryLists->image)) { ?>
    <img  class="img-circle profile_img" src="/images/{{$categoryLists->image}}" >
    <?php 
  } else { ?>
        <img  class="img-circle profile_img" src="http://placehold.it/550x350" alt="">

    <?php 
  } ?>
  </div>
</div>

<br>
<br>

<div class="ln_solid"></div>
<div class="form-group">
  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
    <a href="/adminpanel/addProduct/categoryList" class="btn btn-success">Back To List</a>
  </div>
</div>

</form>

     </div>

        <!-- /page content -->
        @stop