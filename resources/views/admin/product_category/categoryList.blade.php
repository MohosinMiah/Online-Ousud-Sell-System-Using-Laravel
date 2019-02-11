
@extends('admin/main/master');
@section('content')
   <!-- page content -->
   <div class="right_col" role="main">
   <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 972px;">
                      <thead>
                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 149px;" aria-sort="ascending" aria-label="ID#: activate to sort column descending">ID#</th><th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 231px;" aria-label="Category Name: activate to sort column ascending">Category Name</th><th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 111px;" aria-label="Image: activate to sort column ascending">Image</th><th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 81px;" aria-label="Action: activate to sort column ascending">Action</th></tr>
                      </thead>
                      <tbody>
                     <?php    foreach($categoryLists as $categoryList){
                        if($categoryList->id % 2 != 0){ ?>
                     
                     <tr role="row" class="odd">
                        <td tabindex="0" class="sorting_1">{{$categoryList->id}}</td>
                          <td>{{$categoryList->title}}</td>
                          <td>
                          <?php if(!empty($categoryList->image)){  ?>
                          <img class="img-circle profile_img" src="/images/{{$categoryList->image}}" alt="">
                          <?php } else{ ?>
                            <img class="img-circle profile_img" src="http://placehold.it/550x350" alt="">

                        <?php   }?>
                        <td><div class="input-group-btn">
                              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <li><a href="/adminpanel/editproduct/category/{{$categoryList->id}}"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="/adminpanel/deleteproduct/category/{{$categoryList->id}}"> <span class="glyphicon glyphicon-trash"></span> Remove</a>
                                </li>
                                
                                <li class="divider"></li>
                                <li><a href="/adminpanel/viewproduct/category/{{$categoryList->id}}"><span class="glyphicon glyphicon-camera"></span> View</a>
                                </li>
                                
                              </ul>
                            </div></td>
                        </tr>
                        <?php } else{?>


                        <tr role="row" class="even">
                        <td tabindex="0" class="sorting_1">{{$categoryList->id}}</td>
                          <td>{{$categoryList->title}}</td>
                          <td>
                          <?php if(!empty($categoryList->image)){  ?>
                          <img class="img-circle profile_img" src="/images/{{$categoryList->image}}" alt="">
                          <?php } else{ ?>
                            <img class="img-circle profile_img" src="http://placehold.it/550x350" alt="">

                        <?php   }?>
                          </td>
                          <td><div class="input-group-btn">
                              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <li><a href="/adminpanel/editproduct/category/{{$categoryList->id}}"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="/adminpanel/deleteproduct/category/{{$categoryList->id}}"> <span class="glyphicon glyphicon-trash"></span> Remove</a>
                                </li>
                                
                                <li class="divider"></li>
                                <li><a href="/adminpanel/viewproduct/category/{{$categoryList->id}}"><span class="glyphicon glyphicon-camera"></span> View</a>
                                </li>
                                
                              </ul>
                            </div></td>
                        </tr>
                        <?php } }?>

                       </tbody>
                    </table>
    
  
        <!-- /page content -->
        @stop