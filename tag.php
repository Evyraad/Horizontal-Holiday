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
                        
                        
                        <?php $posts = get_posts( array(
                            'posts_per_page' => get_option( 'posts_per_page' ),                           
                            'tag'            => get_query_var( 'tag' ),
                            'paged'          => get_query_var( 'paged' )
                            ) ); 
                            foreach ( $posts as $post ) : setup_postdata( $post ); $loop_counter++;
                            
                                get_template_part( 'content' );
                                             
                            endforeach; ?>                                          
                        
                            <div class="page-numbers-blog">                       
                                <?php my_pagenavi(); ?>
                            </div>
                        
                        <?php wp_reset_postdata() ?>
                    </div>
                    
                    <div id="sidebar-custom" class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sidebar-right">
                        <?php get_sidebar( 'custom' );?>
                    </div>    
                </div><!-- id="content" -->                 
            </div><!-- class="row" -->               
        </div><!-- class="my-col-9" --> 
        
    </div><!-- class="row-fluid" -->
<?php get_footer(); ?>