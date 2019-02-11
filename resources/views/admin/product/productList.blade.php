@extends('admin/main/master');
@section('content')
   <!-- page content -->
   <div class="right_col" role="main">
   <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 972px;">
                      <thead>
                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 149px;" aria-sort="ascending" aria-label="ID#: activate to sort column descending">ID#</th><th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 231px;" aria-label="Name: activate to sort column ascending">Name</th><th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 111px;" aria-label="Price: activate to sort column ascending">Price</th><th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 56px;" aria-label="Offer: activate to sort column ascending">Offer</th><th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 111px;" aria-label="Image: activate to sort column ascending">Image </th><th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 81px;" aria-label="Action: activate to sort column ascending">Action</th></tr>
                      </thead>
                      <tbody>
                     <?php foreach ($productLists as $productList) {
                      if ($productList->id % 2 != 0) { ?>
                      <tr role="row" class="odd">
                          <td tabindex="0" class="sorting_1">{{$productList->id}}</td>
                          <td>{{$productList->generic_name}}</td>
                          <td>{{$productList->price}}  TK</td>
                          <td>{{$productList->offer}} %</td>
                          <td>
                          <?php if (!empty($productList->img_one)) {

                            ?>

                          
                          <img class="img-circle profile_img" src="/images/{{$productList->img_one}}" alt="">
                          <?php 
                        } else { ?>
                            <img class="img-circle profile_img" src="/images/ousud.jpg" alt="">

                        <?php 
                      } ?>
                          </td>
                          <td><div class="input-group-btn">
                              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <li><a href="/adminpanel/editProduct/{{$productList->id}}"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="/adminpanel/deleteProduct/{{$productList->id}}"> <span class="glyphicon glyphicon-trash"></span> Remove</a>
                                </li>
                                
                                <li class="divider"></li>
                                <li><a href="/adminpanel/viewProduct/{{$productList->id}}"><span class="glyphicon glyphicon-camera"></span> View</a>
                                </li>
                                
                              </ul>
                            </div></td>
                        </tr>
                        <?php 
                      } else { ?>


                        <tr role="row" class="even">
                          <td class="sorting_1" tabindex="0">{{$productList->id}}</td>
                          <td>{{$productList->generic_name}}</td>
                          <td>{{$productList->price}}  TK</td>
                          <td>{{$productList->offer}} %</td>
                          <td>
                          <?php if (!empty($productList->img_one)) { ?>
                          <img class="img-circle profile_img" src="/images/{{$productList->img_one}}" alt="">
                          <?php 
                        } else { ?>
                            <img class="img-circle profile_img" src="/images/ousud.jpg" alt="">

                        <?php 
                      } ?>
                          </td>
                          <td><div class="input-group-btn">
                              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <li><a href="/adminpanel/editProduct/{{$productList->id}}"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="/adminpanel/deleteProduct/{{$productList->id}}"> <span class="glyphicon glyphicon-trash"></span> Remove</a>
                                </li>
                                
                                <li class="divider"></li>
                                <li><a href="/adminpanel/viewProduct/{{$productList->id}}"><span class="glyphicon glyphicon-camera"></span> View</a>
                                </li>
                                
                              </ul>
                            </div></td>
                        </tr>
                        <?php 
                      }
                    } ?>
                          {{ $productLists->links() }}
                       </tbody>
                    </table>
    
  
        <!-- /page content -->
        @stop