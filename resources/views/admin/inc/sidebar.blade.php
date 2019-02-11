            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Admin Panel</h3>
                <ul class="nav side-menu">
                  <li><a href="/haetywxisbwvfkixds"> <i class="fa fa-home"></i> Home <span ></span></a>
                    <!-- <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>
                    </ul> -->
                  </li>
                  <li><a><i class="fa fa-edit"></i> Product Setting <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="/adminpanel/addProduct/addCategory">Add New Product Category</a></li>
                    <li><a href="/adminpanel/addProduct/categoryList"> Product Category List</a></li>
                    <li><a href="/adminpanel/addProduct">Add New Product</a></li>
                    <li><a href="/adminpanel/productList">Product List</a></li>
                  
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i>Page Setting <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/adminpanel/addPage">Create New Page</a></li>
                      <li><a href="/adminpanel/pageList">Page List</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Posts Setting <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/adminpanel/addPost">Add New Posts</a></li>
                      <li><a href="/adminpanel/postList">Post List</a></li>
                    </ul>
                  </li>
                  <!-- <li><a><i class="fa fa-circle-o"></i> News Setting <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/adminpanel/addPost">Add News</a></li>
                      <li><a href="/adminpanel/postList">News List</a></li>
                    </ul>
                  </li> -->
                  <li><a><i class="fa fa-bar-chart-o"></i>  Management Order<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="/adminpanel/latest/order">Order List(<span class="text-danger">NEW</span>)</a></li>
                    <li><a href="/adminpanel/torated/customer">Top Rated Customer(<span class="text-danger">NEW</span>)</a></li>
                     
                    </ul>
                  </li>

                  <li><a><i class="fa fa-file-text-o"></i>Report Setting <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="/adminpanel/order/list/view">All Order List</a></li>
                    <!-- <li><a href="/adminpanel/order/report">Order By Date</a></li> -->
                    <li><a href="/adminpanel/order/report/between">Order By  Date </a></li>
                    <li><a href="#">Daily </a></li>
                    <li><a href="#">Monthly </a></li>
                    <li><a href="#">Yearly </a></li>
                    </ul>
                  </li> 
                 <?php  
            $admin_roll = \Session::get('admin_roll');
          if ($admin_roll == 1) {
          //   header("Cache-Control: no-cache, must-revalidate");
          //   header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
          //   header("Content-Type: application/xml; charset=utf-8");
          //   echo '<meta http-equiv="refresh" content="1"/>';
          //   header('Location: /admin/login');
          //   exit;
        ?>
                  <li><a><i class="fa fa-user"></i>Customer Setting <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="/adminpanel/register/customer" target="_blank">Add Customer</a></li>
                    <li><a href="/adminpanel/all/customer/list">All Customer List </a></li>
                    <li><a href="/customer/list">Ordered Customer List <small class="text text-primary">(Who Ordered)</small></a></li>
                    </ul>
                  </li> 

                  <li><a><i class="fa fa-bug"></i>  Manage Admin <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/adminpanel/add/admin" target="_blank">Create Admin</a></li>
                      <li><a href="/adminpanel/all/admin">Admin List</a></li>
                    </ul>
                  </li>
          <?php } ?>

                    <li><a><i class="glyphicon glyphicon-certificate"></i>  Corporate Order <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/adminpanel/corporate/order" >Order List</a></li>
                      <li><a href="/adminpanel/corporate/order/action" >Action of Order List</a></li>
                    </ul>
                  </li>
                 <li><a><i class="glyphicon glyphicon-envelope  " ></i> Contact Message <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/adminpanel/contact/message/list" >Message List</a></li>
                      <li><a href="/adminpanel/contact/action/message" >Action of Message List</a></li>
                    </ul>
                  </li>


                </ul>
              </div>
                <div class="menu_section">
                <h3>Others Setting</h3>
                <ul class="nav side-menu">
                <li><a><i class="fa fa-bug"></i>  General Setting <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/adminpanel/logo">Upload Logo</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-bug"></i>  Update Title & Slug<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/adminpanel/update/title">Update Title</a></li>
                      <li><a href="/adminpanel/update/slug">Update Slug</a></li>
                    </ul>
                  </li> 

                   <li><a><i class="fa fa-bug"></i>  Slider Setting <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/adminpanel/addslider">Add New Slider</a></li>
                      <li><a href="/adminpanel/sliderlist">Slider List</a></li>
                    </ul>
                  </li> 
                 
                 
                 
                 
                </ul>
              </div> 

            </div>
            <!-- /sidebar menu -->
            
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    {{\Session::get('admin_name')}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <!-- <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li> -->
                    <li><a href="/adminpanel/logout/admin/{{\Session::get('admin_id')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  
                  </ul>
                </li>

                <!-- <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li> -->
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->