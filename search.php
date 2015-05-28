<?php
/**
 * Template Name: Search Page
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
                    <header>Результаты поиска по запросу: " <?php the_search_query() ?> ".</header>
                    <div id="content" class="container-fluid">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="separator"><b>&#9830;</b></p></div>
                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sidebar-right">
                            <?php get_sidebar( 'right' );?>
                        </div>
                        
                        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
<!--                            Вы можете подключить отдельную форму поиска в центральной колонке
                            раскомментировав код ниже-->
<!--                            <div class="col-lg-3 widget_search">
                                <?php // get_template_part('searchform') ?>
                            </div>-->
                            
                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $loop_counter++;
                            
                                        get_template_part( 'content' );
                                                            
                                    endwhile; ?>
                                    <div class="page-numbers-blog">                       
                                        <?php my_pagenavi(); ?>
                                    </div>

                                <?php else: ?>
                                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                                <?php endif; ?>
                                
                        </div>
                        
                        <div id="sidebar-custom" class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sidebar-right">
                            <?php get_sidebar( 'custom' );?>
                        </div>
                    </div>    
                </div><!-- class="row" -->
            </div><!-- class="my-col-9" -->
              
        </div><!-- class="row-fluid" --> 


<?php get_footer(); ?>

