
    @extends('fornt/master/allmaster')
@section('content')
   <!-- page content -->
   <div class="container" role="main">

  <div class="row">
                    <div class="col-md-9">
                   
                       <div class="row container">
                       <?php foreach($all_posts as $all_post){?>
                    <div class="col-md-12">

                    <div class="entry-media">
                                <a href="/blog/details/{{$all_post->id}}">
                                    <img src="/images/{{$all_post->image}}" alt="Post">
                                </a>
                            </div><!-- End .entry-media -->
                        <h2 class="entry-title">
                                    <a href="/blog/details/{{$all_post->id}}">{{$all_post->title}}</a>
                                </h2>

                                <div class="entry-content">
                                {!! str_limit($all_post->content,200) !!}
                                    <a href="/blog/details/{{$all_post->id}}" class="read-more">Read More <i class="icon-angle-double-right"></i></a>
                                </div><!-- End .entry-content -->

                                <div class="entry-meta">
                                    
                                </div><!-- End .entry-meta -->
                            </div><!-- End .entry-body -->
                     
                       </div>
                       <hr>
                       <br>
                       <?php } ?>

                    </div>
                    
                      
                        
                           <br>
                        <nav class="toolbox toolbox-pagination">
                            <ul class="pagination">
                            {{ $all_posts->links() }}
                            </ul>
                        </nav>


                    </div><!-- End .col-lg-9 -->

                    <div class="col-md-3">

                    </div> 
                    
                    
                     </div> 
            </div>
     </div>
  
        <!-- /page content -->
        @stop