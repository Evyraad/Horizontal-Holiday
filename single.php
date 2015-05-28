<?php get_header(); ?>
<div class="container-fluid">
    <div class="row-fluid">
        
        <div id="sidebar" class="my-col-3">
            <?php get_sidebar( 'left' );?>
        </div>
        
        <div id="" class="my-col-9">
            <div class="row">
                <header>Блог</header>
                <div id="content" class="container-fluid">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="separator"><b>&#9830;</b></p></div>
                    
                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sidebar-right">
                        <?php get_sidebar( 'right' );?>
                    </div>
                    
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        <?php 
                        if ( have_posts() ) : while ( have_posts() ) : the_post();
                
                                get_template_part( 'content','single' );
                             
                            endwhile;
                            
                            // Previous/next post navigation.
                                the_post_navigation( array(
                                    'next_text' => '<span class="screen-reader-text">Следующая запись </span> ' .
                                                   '<span class="screen-reader-arrow"> »</span> ',
                                    
                                    'prev_text' => '<span class="screen-reader-arrow">«</span> ' .
                                                   '<span class="screen-reader-text">Предыдущая запись </span> ' ,
                                                   'screen_reader_text' => __(' '),
                                ) );
                               
                            // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;                               
                        ?>
                       
                          
                                               
                        <?php else : ?>
                        
                            <div id="post-404" class="noposts">
                                <p><?php _e( 'None found.', 'example' ); ?></p>
                            </div><!-- /#post-404 -->
                            
                        <?php endif; ?>

                        
                    </div>
                    
                    <div id="sidebar-custom" class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sidebar-right">
                        <?php get_sidebar( 'custom' );?>
                    </div>    
                </div><!-- id="content" -->                  
            </div><!-- class="row" -->               
        </div><!-- class="my-col-9" --> 
        
    </div><!-- class="row-fluid" -->
<?php get_footer(); ?>
