<?php     
    $sliders = DB::table('sliders')->get();

?>
                        <!-- block slide top -->
                        <div class="block-slide-main slide-opt-4">

                            <!-- slide -->
                            <div class="owl-carousel " 
                                data-nav="true" 
                                data-dots="false" 
                                data-margin="0" 
                                data-items='1' 
                                data-autoplayTimeout="700" 
                                data-autoplay="true" 
                                data-loop="true">
                                <!-- <div class="item item1">
                                    <img src="/images/media/index4/slide2.jpg" alt="img" class="img-slide">
                                    <img src="/images/media/index4/slide3.png" alt="img" class="img-sm">
                                </div> -->
                                <?php    
                            foreach($sliders as $slider){
                            ?>
                                <div class="item item2">
                                    <img src="/images/{{$slider->image}}" alt="img" class="img-slide">
                                    
                                </div>
                                <?php } ?>

                            </div> <!-- slide -->

                        </div><!-- block slide top -->

                        