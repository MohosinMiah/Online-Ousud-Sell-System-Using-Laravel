@extends('admin/main/master');
@section('content')
   <!-- page content -->
   <div class="right_col" role="main">
   <div class="container">

<div class="starter-template">
  <h1>Page Title : {{ strip_tags($pageLists->title) }}</h1>
  <hr>
  <?php 
          if(!empty($pageLists->image)){
  ?>
  <h3 class="text-info">Page Image</h3>
  <img src="/images/{{$pageLists->image }}" class="img-fluid" alt="Responsive image">
          <?php } else{ ?>
            <img src="http://placehold.it/550x350" class="img-fluid" alt="Responsive image">

          <?php } ?>
</div>

<div class="row container">
<h3>Page Content : </h3>
 {!! $pageLists->content !!}


</div>
<hr>


<div class="row container">
<h3>Page Meta : </h3>
 {{ strip_tags($pageLists->metakey) }}


</div>
<hr>

<div class="row container">
<h3>Page Is Visible or Not : </h3>
 {{ strip_tags($pageLists->isVisible) }}


</div>

</div>
     </div>
  
        <!-- /page content -->
        @stop