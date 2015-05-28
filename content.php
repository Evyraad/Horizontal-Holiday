<div class="my-dots dots-blog 
    <?php
        global $loop_counter;
        /*
        * Убирает точки с верху у первой записи                                         
        */
        //if (statement is true) ? (do this) : (else, do this);
        echo ( $loop_counter == 1 ) ? ' no-dots' : '';
    ?>">
</div><!-- class="my-dots dots-blog" -->

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
        <?php the_content( 'Читать дальше »' ); ?>        
    </div>

</article>

