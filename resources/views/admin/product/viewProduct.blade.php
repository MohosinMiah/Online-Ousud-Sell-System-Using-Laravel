@extends('../admin/main/master');
@section('content')
   <!-- page content -->
   <div class="right_col" role="main">
   <div class="container">
          <h1 class="jumbotron-heading text-center text-primary">Product View</h1>
         
<form id="demo-form2"   class="form-horizontal form-label-left"   enctype="multipart/form-data">
           
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="brand-name">Brand Name <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <?php if(!empty($productLists->brand_name)){ ?>

    <input type="text" id="brand-name" readonly value="{{$productLists->brand_name}}" required="required" class="form-control col-md-7 col-xs-12">
  <?php }else{
      echo '<input type="text" id="brand-name" readonly value="Not Yet Add" required="required" class="form-control col-md-7 col-xs-12">
      ';
  } ?>
  </div>
</div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12">Selected Category</label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <select readonly name="cat_id" class="form-control" >
        
        <option value="2">All Medicine</option>
        </select>
    </div>
    </div>


<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="generic-name">Generic Name<span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <?php if(!empty($productLists->generic_name)){?>

    <input type="text" id="generic-name" readonly value="{{$productLists->generic_name}}" name="generic_name"  class="form-control col-md-7 col-xs-12">
  <?php }else{
echo '<input type="text" id="generic-name" readonly value="Not Yet Add" name="generic_name"  class="form-control col-md-7 col-xs-12">
';

  }?>
  </div>
</div>


<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="strength">Strength <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <?php if(!empty($productLists->strength)){?>

    <input type="text" id="strength" name="strength" readonly value="{{$productLists->strength}}"   class="form-control col-md-7 col-xs-12">
  <?php }else{
      
      echo '<input type="text" id="strength" name="strength" readonly value="Not Add Yet"   class="form-control col-md-7 col-xs-12"> ';
      
  }?>
  </div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dosage">Dosage <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <?php if(!empty($productLists->dosage)){?>
    <input type="text" id="dosage" name="dosage" readonly value="{{$productLists->dosage}}"  class="form-control col-md-7 col-xs-12">
  <?php }else{
      
      echo '    <input type="text" id="dosage" name="dosage" readonly value="Not Add Yet"  class="form-control col-md-7 col-xs-12">
      ';
  }?>
  </div>
</div>


<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Price <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <?php if(!empty($productLists->price)){?>

    <input type="text" required="required"  id="price" name="price" readonly value="{{$productLists->price}} TK" class="form-control col-md-7 col-xs-12">
  <?php } else{
      echo '<input type="text" required="required"  id="price" name="price" readonly value="Not Yet Add" class="form-control col-md-7 col-xs-12">';
      
      
  }?>
  </div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="userfor">User For <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <?php if(!empty($productLists->userfor)){?>
    <input type="text" id="userfor" name="userfor"  readonly value="{{$productLists->userfor}}" class="form-control col-md-7 col-xs-12">
  <?php } else{
      
      echo '    <input type="text" id="userfor" name="userfor"  readonly value="Not Yet Add" class="form-control col-md-7 col-xs-12">';
  }?>
  </div>
</div>


<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dar">Dar <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <?php if(!empty($productLists->dar)){?>
    <input type="text" id="dar" name="dar"   readonly value="{{$productLists->dar}}" class="form-control col-md-7 col-xs-12">
  <?php } else{
      echo '<input type="text" id="dar" name="dar"   readonly value="Not Yet Add" class="form-control col-md-7 col-xs-12">
      ';
      
  }?>
  
  </div>
</div>



<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="img_one">Upload Image One <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <?php    
  if(!empty($productLists->img_one)){
  
  ?>
  <img class="img-responsive" src="/images/{{$productLists->img_one}}" alt="">
  <?php } else {?>

  <h4>No Image Uploaded Yet.</h4>
  <?php } ?>  </div>
</div>



<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="img_two">Upload Image Two <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <?php    
  if(!empty($productLists->img_two)){
  
  ?>
  <img class="img-responsive" src="/images/{{$productLists->img_two}}" alt="">
  <?php } else {?>

  <h4>No Image Uploaded Yet.</h4>
  <?php } ?>
  </div>
</div>


<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <?php if(!empty($productLists->qty)){?>

    <textarea type="text" id="description"  name="description"  readonly class="form-control col-md-7 col-xs-12" rows="4" cols="50">{{$productLists->description}} </textarea>
  <?php }else{
echo '    <textarea type="text" id="description"  name="description" value="Not Yet Add"  readonly class="form-control col-md-7 col-xs-12" rows="4" cols="50">Not Yet Add</textarea>
';
      
  }?>
</textarea>
  </div>
</div>


<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="qty">Number Of QTY <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
<?php if(!empty($productLists->qty)){?>
    <input type="text" id="qty" name="qty" value="{{$productLists->qty}}"  readonly class="form-control col-md-7 col-xs-12">
<?php }else{
    echo '<input type="text" id="qty" name="qty" value="Not Add Yet"  readonly class="form-control col-md-7 col-xs-12">';
} ?>
  </div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="type">Type <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <?php if(!empty($productLists->type)){?>
    <input type="text" id="type" name="type"  value="{{$productLists->type}}"  readonly  class="form-control col-md-7 col-xs-12">
  <?php }else{
      echo '<input type="text" id="type" name="type"  value="Not Yet Add"  readonly  class="form-control col-md-7 col-xs-12">
      ';
  }
      ?>
  </div>
</div>

<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="isavailable">Product is Available <span class="required"> </span>
  </label>
<div class="col-md-6 col-sm-6 col-xs-12">
<?php     
                         if(!empty($productLists->isavailable)){
                         ?>
                            <input type="button" name="expair_date"  value="{{$productLists->isavailable}}"  readonly  class="form-control">
                         <?php } else{ ?>
                            <input type="text" name="expair_date" readonly value="Not Add Yet"  readonly  class="form-control">
                         <?php } ?>
                        </div>
</div>


<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="offer">Offer <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <?php if(!empty($productLists->offer)){?>
    <input type="text" id="offer" name="offer"  value="{{$productLists->offer}}"  readonly  placeholder="Ex: 8" class="form-control col-md-7 col-xs-12">
  <?php }else{
      echo '<input type="text" id="offer" name="offer"  value="Not Yet Add"  readonly  placeholder="Ex: 8" class="form-control col-md-7 col-xs-12">
      ';
  } ?>
  </div>
</div>




<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="expair_date">Offer Expair Date <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <div class="form-group">
                        <div class="input-group date" id="myDatepicker2">
                         <?php     
                         if(!empty($productLists->expair_date)){
                         ?>
                            <input type="text" name="expair_date"  value="{{$productLists->expair_date}}"  readonly  class="form-control">
                         <?php } else{ ?>
                            <input type="text" name="expair_date" readonly value="Not Add Yet"  readonly  class="form-control">
                         <?php } ?>

                         
                        </div>
                    </div>
  </div>
</div>



<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="expair_date">Ousud Expair Date <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <div class="form-group">
                        <div class="input-group date" id="myDatepicker2">
                         <?php     
                         if(!empty($productLists->expair_date)){
                         ?>
                            <input type="text" name="expair_date_ousud"  value="{{$productLists->expair_date_ousud}}"  readonly  class="form-control">
                         <?php } else{ ?>
                            <input type="text" name="expair_date_ousud" readonly value="Not Add Yet"  readonly  class="form-control">
                         <?php } ?>

                         
                        </div>
                    </div>
  </div>
</div>



<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="isavailable">Status <span class="required"> </span>
  </label>
<div class="col-md-6 col-sm-6 col-xs-12">
<?php if(!empty($productLists->status)){?>
                          <input id="metakey" type="text" name="metakey" value="{{$productLists->status}}"  readonly  class="tags form-control" placeholder="Add Meta Tag, Ex: social, adverts, sales" >
                          <?php }else{?>
                            <input id="metakey" type="text" name="metakey" value="Not Add Yet"  readonly  class="tags form-control" placeholder="Add Meta Tag, Ex: social, adverts, sales" >
                            <?php   }?>
                        </div>
</div>

<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" >Add Meta Tag <span class="required"> </span>
  </label>
  <div class="col-md-9 col-sm-9 col-xs-12">
  <?php if(!empty($productLists->metakey)){?>
                          <input id="metakey" type="text" name="metakey" value="{{$productLists->metakey}}"  readonly  class="tags form-control" placeholder="Add Meta Tag, Ex: social, adverts, sales" >
                          <?php }else{?>
                            <input id="metakey" type="text" name="metakey" value="Not Add Yet"  readonly  class="tags form-control" placeholder="Add Meta Tag, Ex: social, adverts, sales" >
                            <?php   }?>

                        </div>  
 </div>


<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" >Add Meta Description <span class="required"> </span>
  </label>
  <div class="col-md-9 col-sm-9 col-xs-12">
  <?php if(!empty($productLists->metadescription)){?>
                          <input id="metadescription" type="text" name="metadescription" value="{{$productLists->metadescription}}"  readonly class="tags form-control" placeholder="Add Meta Description" >
  <?php }else{?>
    <input id="metadescription" type="text" name="metadescription" value="Not Add Yet"  readonly class="tags form-control" placeholder="Add Meta Description" >

<?php   }?>
                        </div>  
 </div>



<div class="ln_solid"></div>
<div class="form-group">
  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
    <a href="/adminpanel/productList" class="btn btn-primary"  >Back To List</a>
  </div>
</div>

</form>
     
        <!-- /page content -->
        @stop