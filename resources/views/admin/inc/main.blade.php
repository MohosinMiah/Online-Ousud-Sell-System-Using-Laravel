@extends('admin/main/master');
@section('content')
<?php    
   $total_users = DB::table('users')->get();
   $total_posts = DB::table('posts')->get();
   $total_orders = DB::table('orders')->get();
   $total_products = DB::table('tproducts')->get();
   $total_scrivers = DB::table('subscrivers')->get();
   $total_corporates = DB::table('corporates')->get();

?>




   <!-- page content -->
   <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total </span>
              <div class="count">{{count($total_users)}}</div>
              <span class="count_bottom"><i class="green">Users</i> </span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total </span>
              <div class="count">{{count($total_posts)}}</div>
              <span class="count_bottom"><i class="green">Posts</i> </span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total </span>
              <div class="count">{{count($total_orders)}}</div>
              <span class="count_bottom"><i class="green">Orders</i> </span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total </span>
              <div class="count">{{count($total_products)}}</div>
              <span class="count_bottom"><i class="green">Products</i> </span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total </span>
              <div class="count">{{count($total_scrivers)}}</div>
              <span class="count_bottom"><i class="green">Scrivers</i> </span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total </span>
              <div class="count">{{count($total_corporates)}}</div>
              <span class="count_bottom"><i class="green">Corporate Orders</i> </span>
            </div>
          </div>
          <!-- /top tiles -->
<?php   
   $latest_users = DB::table('users')->orderby('id','desc')->limit(10)->get();
   $latest_posts = DB::table('posts')->orderby('id','desc')->limit(10)->get();
   $latest_orders = DB::table('orders')->orderby('id','desc')->limit(10)->get();
   $latest_products = DB::table('tproducts')->orderby('id','desc')->limit(10)->get();
   $latest_scrivers = DB::table('subscrivers')->orderby('id','desc')->limit(10)->get();
   $corporate_orders = DB::table('corporates')->orderby('id','desc')->limit(10)->get();


?>
         <!-- First   Row -->
       
<div class="container" style="padding:10px">
  <div class="row" style="padding:10px">
  
  <div  class="col-md-4">
  <h2>Latest 10  User Name </h2>
     <?php      
     foreach($latest_users as $latest_user){ ?>
    </p> {{$latest_user->name}}</p>
    
    <?php }
     ?>
  </div>

   <div  class="col-md-4">
  <h2>Latest 10 Order Status</h2>
     <?php      
     foreach($latest_orders as $latest_order){ ?>
    </p> {{$latest_order->order_status}}</p>
    
    <?php }
     ?>
  </div>


  <div  class="col-md-4">
  <h2>Latest 10 Subscriver Email</h2>
     <?php      
     foreach($latest_scrivers as $latest_scriver){ ?>
    </p> {{$latest_scriver->email}}</p>
    
    <?php }
     ?>
  </div>

  </div>
  
     <!-- Second Row -->
<hr>
  <div class="container" style="padding:10px">
  <div class="row" style="padding:10px">
  
  <div  class="col-md-4">
  <h2>Latest 10  Product Brand Name </h2>
     <?php      
     foreach($latest_products as $latest_product){ ?>
    </p> {{$latest_product->brand_name}}</p>
    
    <?php }
     ?>
  </div>

   <div  class="col-md-4">
  <h2>Latest 10 Post Title</h2>
     <?php      
     foreach($latest_posts as $latest_post){ ?>
    </p> {{$latest_post->title}}</p>
    
    <?php }
     ?>
  </div>
 <div  class="col-md-4">
  <h2 >Latest 10 Corporate Orders</h2>
     <?php      
     foreach($corporate_orders as $corporate_order){ ?>
    <table>
      <th>Name</th>

      <th> Email</th>

      <tr>
        <td> {{$corporate_order->name}}</td> 
        <td>
          
        </td>

      <td> {{$corporate_order->email}}</td>
      </tr>
    </table>
    
    <?php }
     ?>
  </div>

  

  </div>
<br>

    <div class="row container" style="padding:10px">
      <div class="row container" style="padding:10px">
        {{-- <h1>Hello Bangladesh . I am here to Help you</h1> --}}
      </div>
      
    </div>






</div>



        
        <!-- /page content -->
        @stop