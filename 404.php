<?php 
/*
* class="img-size лежит в /my-less/404.less"
*/
get_header(); ?>    
<div id="container-fluid-padding" class="container-fluid">
    <div class="row-fluid page-404">
        <header>
            <h1 class="text-center head-size-404">
                Horizontal Holiday <br /><span style="font-size: 28px;"></span>
            </h1>
            <p class="separator-404"></p>
        </header>
        <div class="row-fluid">
                        
            <div id="position" class="row-fluid"> 
                <ul class="list-inline text-center nav-404">
                    <li>
                        <a href="#"><figure>
                                <p><img src="<?php bloginfo( 'template_directory' ); ?>/img/Icon/galary_big.png" /></p>
                                <figcaption class="nav-label-404">Галерея</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="#"><figure>
                                <p><img src="<?php bloginfo( 'template_directory' ); ?>/img/Icon/home_big.png" /></p>
                                <figcaption class="nav-label-404">Домашняя страница</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="#"><figure>
                                <p><img src="<?php bloginfo( 'template_directory' ); ?>/img/Icon/blog_big.png" /></p>
                                <figcaption class="nav-label-404">Блог</figcaption>
                            </figure>
                        </a>
                    </li>
                </ul>


                <div class="text-center text-404"><p>Упc,<br /> страница не найдена</p></div>

                <div id="img-404" class="ih-item">
                    <img id="img-404-max-saze" class="img-size" src="<?php bloginfo( 'template_directory' ); ?>/img/404/404.png"
                         alt="Error: 404" />
                </div>
                
                <div id="img-Ty_Wilson" class="col-lg-4 col-md-5 ih-item">
                    <img id="img-Ty_Wilson-max-saze" class="img-size" src="<?php bloginfo( 'template_directory' ); ?>/img/404/Ty_Wilson.png" 
                         alt="Ty_Wilson, http://tywilsonartist.com/" />
                </div>
            </div><!-- id="position" -->
            
            <div id="separator-footer-margin" class="row">
                <p id="separator-footer" class="separator-404"></p>
            </div>
            
        </div><!-- class="row-fluid" -->             
    </div><!-- class="row-fluid" -->
<?php get_footer(); ?> 