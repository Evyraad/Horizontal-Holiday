<?php
/*
 * Template Name: Blog
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
                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sidebar-right">
                            <?php get_sidebar( 'right' );?>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                            
                            <?php 
                                /*
                                 * Пременная - $MY_posts_per_page задает максимальное число постов на странице blog
                                 */
                            $MY_posts_per_page  = 1;
                            $loop_counter       = 0;
                                query_posts( 'post_type=post&post_status=publish&posts_per_page='.$MY_posts_per_page .'&paged=' . get_query_var( 'paged' ) );
                           
                                if (have_posts()): while ( have_posts() ): the_post(); $loop_counter++;
                                //print_r('/'. $loopcounter);                                                                       
                                    get_template_part('content');                                   
                                    endwhile; 
                            ?>
                                 
                                    <div class="page-numbers-blog">
                                        <?php my_pagenavi(); ?>
                                    </div>     
    
                                <?php else: ?>
                                  
                                    <div id="post-404" class="noposts">
                                        <p><?php _e( 'None found.', 'example' ); ?></p>
                                    </div><!-- /#post-404 -->
                                
                                <?php endif;
                                    wp_reset_query(); 
                                ?>
       
                        </div>
        
                        <div id="sidebar-custom" class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sidebar-right">
                            <?php get_sidebar( 'custom' );?>
                        </div>
                        
                    </div><!-- id="content" -->     
                </div><!-- class="row" -->
            </div><!-- class="my-col-9" -->
              
        </div><!-- class="row-fluid" -->


 
 <?php get_footer(); ?>
