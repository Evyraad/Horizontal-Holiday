<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <figure class="ih-item">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array( 800, 400 ), array( 'class' => "img-size" ) ); ?></a>
        <figcaption class="row label-post">
            <h2 class="col-lg-9 title-post">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <ul class="col-lg-3 meta-post"> 
                <li class="my-date">
                    <span><strong><?php the_time( 'F j, Y' ); ?></strong></span>
                </li>
                <li class="my-author">
                    <span><strong><?php the_author_link(); ?></strong></span>
                </li>               
            </ul>
        </figcaption>
    </figure>
    
    <div class="row short-description">
        <?php
            the_content();
            wp_link_pages( array(
                'before'        => '<div class="page-links"><span class="page-links-title">' . __('Количество страниц:') . '</span>',
                'after'         => '</div>',
                'link_before'   => '<span>',
                'link_after'    => '</span>',
                'separator'     => '<span class="screen-reader-text">, </span>',
            ) );       
        ?>
        
        <div class="footer-blog-post">
            <div class="footer-blog-post-tegs"><?php the_tags( '<b>Метки: </b>' ); ?></div>
            <div class="footer-blog-post-cat"><b>Категории: </b><?php the_category( ', ' ); ?></div>
        </div>
    </div> 
    
</article>
<div class="my-dots dots-blog"></div>

