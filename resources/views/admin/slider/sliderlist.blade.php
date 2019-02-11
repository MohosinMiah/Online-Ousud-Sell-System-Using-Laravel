
@extends('admin/main/master');
@section('content')
   <!-- page content -->
   <div class="right_col" role="main">
   <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 972px;">
                      <thead>
                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 149px;" aria-sort="ascending" aria-label="ID#: activate to sort column descending">ID#</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 231px;" aria-label="Category Name: activate to sort column ascending"> Title</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 231px;" aria-label="Category Name: activate to sort column ascending"> Slug</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 231px;" aria-label="Category Name: activate to sort column ascending"> Link</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 111px;" aria-label="Image: activate to sort column ascending">Image</th><th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 81px;" aria-label="Action: activate to sort column ascending">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                     <?php    foreach($slider_lists as $slider_list){
                        if($slider_list->id % 2 != 0){ ?>
                     
                     <tr role="row" class="odd">
                        <td tabindex="0" class="sorting_1">{{$slider_list->id}}</td>
                        <td>{{$slider_list->title}}</td>
                        <td>{{$slider_list->slug}}</td>
                        <td>{{$slider_list->link}}</td>
                          <td>
                          <?php if(!empty($slider_list->image)){  ?>
                          <img style="width: 258px;height: 200px;"  src="/images/{{$slider_list->image}}" alt="">
                          <?php } else{ ?>
                            <img style="width: 258px;height: 200px;"  src="http://placehold.it/550x350" alt="">

                        <?php   }?>
                        <td><div class="input-group-btn">
                              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <li><a href="/adminpanel/editslider/slider/{{$slider_list->id}}"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="/adminpanel/delete/slider//{{$slider_list->id}}"> <span class="glyphicon glyphicon-trash"></span> Remove</a>
                                </li>
                                
                               
                              </ul>
                            </div></td>
                        </tr>
                        <?php } else{?>


                        <tr role="row" class="even">
                        <td tabindex="0" class="sorting_1">{{$slider_list->id}}</td>
                        <td>{{$slider_list->title}}</td>
                        <td>{{$slider_list->slug}}</td>
                        <td>{{$slider_list->link}}</td>
                        <td > 
                          <?php if(!empty($slider_list->image)){  ?>
                          <img style="width: 258px;height: 200px;"  src="/images/{{$slider_list->image}}" alt="">
                          <?php } else{ ?>
                            <img style="width: 258px;height: 200px;"  src="http://placehold.it/550x350" alt="">

                        <?php   }?>
                          </td>
                          <td><div class="input-group-btn">
                              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <li><a href="/adminpanel/editslider/slider/{{$slider_list->id}}"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="/adminpanel/delete/slider/{{$slider_list->id}}"> <span class="glyphicon glyphicon-trash"></span> Remove</a>
                                </li>
                                
                          
                                
                              </ul>
                            </div></td>
                        </tr>
                        <?php } }?>

                       </tbody>
                    </table>
    
  
        <!-- /page content -->
        @stop