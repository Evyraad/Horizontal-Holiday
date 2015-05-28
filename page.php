<?php
/*
 * Template Name: No sidebar right
 */
?>
<?php get_header(); ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <div id="sidebar" class="my-col-3">
                <?php get_sidebar( 'left' );?>
            </div>
            <div id="" class="my-col-9">
                <div class="row">
                    <header><?php wp_title( " ", true ); ?></header>
                    <div id="content" class="container-fluid">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="separator"><b>&#9830;</b></p></div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <div class="post">
                                    <?php the_content(); ?>
                                </div>                           
                            <?php endwhile; else: ?>
                                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>    
                </div><!-- class="row" -->
            </div><!-- class="my-col-9" -->
              
        </div>


 
 <?php get_footer(); ?>

