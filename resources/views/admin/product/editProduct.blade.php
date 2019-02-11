@extends('admin/main/master');
@section('content')
   <!-- page content -->
   <div class="right_col" role="main">
   <div class="container">
          <h1 class="jumbotron-heading text-center text-primary">Update Product</h1>
          @if (Session::has('message'))
        <h4 class="text-info">{!! session('message') !!}</h4>
   @endif
          @if ( count( $errors ) > 0 )      
                @foreach ($errors->all() as $error)
            <p style="color:red">{{ $error }}</p>
            @endforeach
            @endif
          <!-- /top tiles -->
<form id="demo-form2"  action="{{route('admin_update_Product')}}" method="POST" class="form-horizontal form-label-left"   enctype="multipart/form-data">
            {{ csrf_field() }}
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="brand-name">Brand Name <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input type="hidden" name="ID" value="{{$productLists->id}}">
    <input type="text" id="brand-name" name="brand_name" value="{{$productLists->brand_name}}" required="required" class="form-control col-md-7 col-xs-12">
  </div>
</div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Category</label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <select name="cat_id" class="form-control" >
        <?php foreach($categoryLists as $categoryList){?>
        <?php    
          if($categoryList->id == $productLists->cat_id){
          ?>
        <option selected value="{{$categoryList->id}}">{{$categoryList->title}}</option>
          <?php } else{ ?>
            <option  value="{{$categoryList->id}}">{{$categoryList->title}}</option>

          <?php } }?>
        </select>
    </div>
    </div>


<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="generic-name">Generic Name<span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="generic-name" name="generic_name" value="{{$productLists->generic_name}}"  class="form-control col-md-7 col-xs-12">
  </div>
</div>


<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="strength">Strength <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="strength" name="strength"  value="{{$productLists->strength}}"   class="form-control col-md-7 col-xs-12">
  </div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dosage">Dosage <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="dosage" name="dosage"  value="{{$productLists->dosage}}"  class="form-control col-md-7 col-xs-12">
  </div>
</div>


<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Price <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" required="required"  id="price"   value="{{$productLists->price}}"  name="price" class="form-control col-md-7 col-xs-12">
  </div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="userfor">User For <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="userfor" name="userfor"   value="{{$productLists->userfor}}"  class="form-control col-md-7 col-xs-12">
  </div>
</div>


<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dar">Dar <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="dar" name="dar"   value="{{$productLists->dar}}"  class="form-control col-md-7 col-xs-12">
  </div>
</div>



<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="img_one">Upload Image One <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="file" id="img_one" name="img_one"  class="form-control col-md-7 col-xs-12">
    <?php 
    if(!empty($productLists->img_one)){ ?>
    
                          <img class="img-responsive" src="/images/{{$productLists->img_one}}" alt="">
                          <?php } else{ ?>
                            <img class="img-responsive" src="/images/ousud.jpg" alt="">

                        <?php   }?>                         
  </div>
</div>



<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="img_two">Upload Image Two <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="file" id="img_two" name="img_two"  class="form-control col-md-7 col-xs-12">
    <?php if(!empty($productLists->img_two)){ ?>
                          <img class="img-responsive" src="/images/{{$productLists->img_two}}" alt="">
                          <?php } else{ ?>
                            <img class="img-responsive" src="/images/ousud.jpg" alt="">

                        <?php   }?>   
  </div>
</div>


<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  
    <textarea type="text" id="description"  name="description"  class="form-control col-md-7 col-xs-12" rows="4" cols="50">
    {{$productLists->description}}
    </textarea>

</textarea>
  </div>
</div>


<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="qty">Number Of QTY <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="number" id="qty" value="{{$productLists->qty}}" name="qty"  class="form-control col-md-7 col-xs-12">
  </div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="type">Type <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="type" name="type"  value="{{$productLists->type}}" class="form-control col-md-7 col-xs-12">
  </div>
</div>

<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="isavailable">Product is Available <span class="required"> </span>
  </label>
<div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label  <?php if($productLists->isavailable == 'YES'){ ?> class="btn btn-primary" data-toggle-class="btn-primary"<?php }else{?> class="btn btn-default"  data-toggle-passive-class="btn-default" <?php } ?> data-toggle-passive-class="btn-default">
                                <input type="radio" name="isavailable" <?php if($productLists->isavailable == 'YES'){ ?> checked="checked" <?php } ?>  value="YES" data-parsley-multiple="isavailable"> &nbsp; Yes &nbsp;
                            </label>
                            <label  <?php if($productLists->isavailable == 'NO'){ ?> class="btn btn-primary" data-toggle-class="btn-primary"<?php }else{?> class="btn btn-default"  data-toggle-passive-class="btn-default" <?php } ?>>
                              <input type="radio" name="isavailable" <?php if($productLists->isavailable == 'NO'){ ?> checked="checked" <?php } ?>value="NO" data-parsley-multiple="isavailable"> NO
                            </label>
                          </div>
                        </div>
</div>


<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="offer">Offer <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="offer" name="offer" value="{{$productLists->offer}}" class="form-control col-md-7 col-xs-12">
  </div>
</div>




<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="expair_date">Offer Expair Date <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <div class="form-group">
                        <div class="input-group date" id="myDatepicker2">
                           <?php  if($productLists->expair_date){  ?>
                        
                            <input type="date" required name="expair_date"  value="{{$productLists->expair_date}}" class="form-control"> <span class="text-info">Offer Expair Date</span>  : {{$productLists->expair_date}}
                           <?php } else{?>
                            <input type="date" name="expair_date"   value="{{$productLists->expair_date}}"  class="form-control"> <span class="text-info">

                           <?php } ?>
                        </div>
                    </div>
  </div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="expair_date_ousud">Ousud Expair Date <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <div class="form-group">
                        <div class="input-group date" id="myDatepicker2">
                           <?php  if($productLists->expair_date_ousud){  ?>
                        
                            <input type="date" required name="expair_date_ousud"  value="{{$productLists->expair_date_ousud}}" class="form-control"> <span class="text-info">Ousud Expair Date</span>  : {{$productLists->expair_date_ousud}}
                           <?php } else{?>
                            <input type="date" name="expair_date_ousud"   value="{{$productLists->expair_date_ousud}}"  class="form-control"> <span class="text-info">

                           <?php } ?>
                        </div>
                    </div>
  </div>
</div>


<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="isavailable">Status <span class="required"> </span>
  </label>
<div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="status" class="btn-group" data-toggle="buttons">
                          <label  <?php if($productLists->status == 'public'){ ?> class="btn btn-primary" data-toggle-class="btn-primary"<?php }else{?> class="btn btn-default"  data-toggle-passive-class="btn-default" <?php } ?> data-toggle-passive-class="btn-default">
                                <input type="radio" name="status" <?php if($productLists->isavailable == 'public'){ ?> checked="checked" <?php } ?>  value="YES" data-parsley-multiple="status"> &nbsp; Special &nbsp;
                            </label>
                            <label  <?php if($productLists->status == 'private'){ ?> class="btn btn-primary" data-toggle-class="btn-primary"<?php }else{?> class="btn btn-default"  data-toggle-passive-class="btn-default" <?php } ?>>
                              <input type="radio" name="status" <?php if($productLists->status == 'private'){ ?> checked="checked" <?php } ?>value="NO" data-parsley-multiple="status"> No
                            </label>
                          </div>
                        </div>
</div>

<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" >Add Meta Tag <span class="required"> </span>
  </label>
  <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="metakey" type="text" value="{{$productLists->metakey}}" name="metakey" class="tags form-control" placeholder="Add Meta Tag, Ex: social, adverts, sales" >
                        </div>  
 </div>


<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" >Add Meta Description <span class="required"> </span>
  </label>
  <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="metadescription" type="text" name="metadescription"  value="{{$productLists->metadescription}}" class="tags form-control" placeholder="Add Meta Description" >
                        </div>  
 </div>



<div class="ln_solid"></div>
<div class="form-group">
  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
  <button type="submit" class="btn btn-success" onclick="clickOffConfirmed = confirm('Are you sure?');">Update</button>
  <a type="button" href="/adminpanel/productList" class="btn btn-success">Back To List</a>
  </div>
</div>

</form>
     
        <!-- /page content -->
        @stop