<?php get_header();?>

<div class="container-fluid">
    <div class="row-fluid">
        <div id="sidebar" class="my-col-3">
            <!--<div id="midCol" data-spy="affix" data-offset-top="10">-->
                <?php get_sidebar( 'left' );?>
            <!--</div>-->
        </div> 
        <!--class="col-lg-9 col-lg-offset-3 col-md-9 col-md-offset-3 col-sm-9 col-sm-offset-3"-->
        <div id="" class="my-col-9">          
            <div class="row">
                <div class="site-description text-center"><p><?php bloginfo('description')?></p></div>
                <div class="jcarousel-wrapper">
                    <div class="jcarousel" data-jcarousel="true">                    
                        <ul>
                            <li class="col-lg-3 col-md-3 col-sm-5">
                                <figure class="slide">
                                    <a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/img/slider/imag_1.jpg" alt="Свадьба" /></a>
                                    <figcaption class="ih-item slide-label">                                 
                                        <h2>
                                            <img class="appear-circle" src="<?php bloginfo( 'template_directory' ); ?>/img/slider/slider-dec.png" alt="фоновое изображение" />
                                            <a href="#">Свадьба</a>
                                        </h2>
                                    </figcaption>                                   
                                </figure>
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-5">
                                <figure class="slide">
                                    <a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/img/slider/imag_2.jpg" alt="Kорпоратив" /></a>
                                    <figcaption class="ih-item slide-label">
                                        <h2>
                                            <img class="appear-circle" src="<?php bloginfo( 'template_directory' ); ?>/img/slider/slider-dec.png" alt="фоновое изображение" />
                                            <a href="#">Корпоратив</a>
                                        </h2>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-5">
                                <figure class="slide">
                                    <a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/img/slider/imag_3.jpg" alt="День рождения" /></a>
                                    <figcaption class="ih-item slide-label">
                                        <h2>
                                            <img class="appear-circle" src="<?php bloginfo( 'template_directory' ); ?>/img/slider/slider-dec.png" alt="фоновое изображение" />
                                            <a href="#">День рождения</a>
                                        </h2>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-5">
                                <figure class="slide">
                                    <a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/img/slider/imag_4.jpg" alt="Приятные мелочи" /></a>
                                    <figcaption class="ih-item slide-label">
                                        <h2>
                                            <img class="appear-circle" src="<?php bloginfo( 'template_directory' ); ?>/img/slider/slider-dec.png" alt="фоновое изображение" />
                                            <a href="#">Приятные мелочи</a>
                                        </h2>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-5">
                                <figure class="slide">                   
                                    <a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/img/slider/imag_5.jpg" alt="Свадебные аксессуары" /></a>
                                    <figcaption class="ih-item slide-label">
                                        <h2>
                                            <img class="appear-circle" src="<?php bloginfo( 'template_directory' ); ?>/img/slider/slider-dec.png" alt="фоновое изображение" />
                                            <a href="#">Свадебные аксессуары</a>
                                        </h2>
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                        <a class="jcarousel-control-prev" href="#" data-jcarouselcontrol="true">‹</a>
                        <a class="jcarousel-control-next" href="#" data-jcarouselcontrol="true">›</a>
                    </div>                           
                </div>                
            </div>                                      
        </div>
    </div>     
<?php get_footer(); ?>