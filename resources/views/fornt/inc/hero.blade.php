
        <!-- MAIN -->
        <main class="site-main">

            <div class="block-section-top block-section-top4">
                <div class="container">
                    <div class="box-section-top">

                        <!-- categori -->
                        <div class="block-nav-categori">

                            <div class="block-title">
                                <span>Categories</span>
                            </div>

                          <div class="block-content">
                                <div class="clearfix"><span data-action="close-cat" class="close-cate"><span>Categories</span></span></div>
                                <ul class="ui-categori">
                                <?php 
                                $cat_lists = DB::table('categories')->limit(18)->get();
                                foreach ($cat_lists as $cat_list) {
                                    ?>
                                    <li>
                                        <a href="category/{{str_slug($cat_list->title)}}">
                                            {{$cat_list->title}}
                                        </a>
                                       
                                    </li>
                                        <?php 
                                    } ?>
                                   
                                    
                                    
                                </ul>

                               
                            </div>
                            
                        </div>
                        <!-- categori -->
      
                        @include('/fornt/inc/slider')


                    </div>
                </div>
            </div>