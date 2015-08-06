<?php
/* ---Создаем константу THEME_DIR, которая хранит директорию шаблона--- */
define("THEME_DIR", get_template_directory_uri());
/* ---Удаляем тег Meta Generator в целях безопастности, этот тег
 * показывает всем установленную версию WordPress--- */
remove_action('wp_head', 'wp_generator');

/* ---Добавлем Css--- */

function enqueue_styles() {
    wp_register_style('variables', THEME_DIR . '/variables.css', null);
    wp_enqueue_style('variables');
}

add_action('wp_enqueue_scripts', 'enqueue_styles');

/* ---Добавление скриптов--- */

function enqueue_scripts() {
    wp_register_script('jguery.min.js', THEME_DIR . '/js/jquery.min.js', true);
    wp_enqueue_script('jguery.min.js');

    wp_register_script('bootstrap.min.js', THEME_DIR . '/js/bootstrap.min.js', true);
    wp_enqueue_script('bootstrap.min.js');

    wp_register_script('sticky_sidbar', THEME_DIR . '/js/jquery.sticky-kit.min.js', true);
    wp_enqueue_script('sticky_sidbar');

    wp_register_script('jcarousel.min', THEME_DIR . '/js/jquery.jcarousel.min.js', true);
    wp_enqueue_script('jcarousel.min');

    wp_register_script('jcarousel', THEME_DIR . '/js/jcarousel.responsive.js', true);
    wp_enqueue_script('jcarousel');
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

/* ---Регистрация боковой панели--- */

function start_sidebar() {
    $left = array(
        'id'            => 'sidebar-left',
        'name'          => __('Левый свайдбар', 'striped'),
        'description'   => __('Левая колонка', 'striped'),
        'class'         => '',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
        'before_widget' => '<div id="%1$s" class="widget-sidebar-left %2$s">',
        'after_widget'  => '</div>'
    );
    register_sidebar($left);

    $right = array(
        'id'            => 'sidebar-right',
        'name'          => __('Правый сайдбар', 'striped'),
        'description'   => __('Правая колонка', 'striped'),
        'class'         => '',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
        'before_widget' => '<div id="%1$s" class="widget-sidebar-right %2$s">',
        'after_widget'  => '</div>'
    );
    register_sidebar($right);

    $custom = array(
        'id'            => 'sidebar-custom',
        'name'          => __('Правый дополнительный сайдбар', 'striped'),
        'description'   => __('Правая колонка 2', 'striped'),
        'class'         => '',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
        'before_widget' => '<div id="%1$s" class="widget-sidebar-right %2$s">',
        'after_widget'  => '</div>'
    );
    register_sidebar($custom);
}

add_action('widgets_init', 'start_sidebar');

/* ---Активация аозможности использования миниатюр в постах--- */
add_theme_support('post-thumbnails');


/* ---Функция выводяцая ссылки пагинации для стариц--- */

function my_pagenavi() {
    global $wp_query;
    $big = 999999999; // need an unlikely integer
    echo paginate_links(array(
        'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format'    => '?paged=%#%',
        'current'   => max(1, get_query_var('paged')),
        'total'     => $wp_query->max_num_pages,
        'mid_size'  => 1,
        'prev_text' => '«',
        'next_text' => '»',
        'type'      => 'list'
    ));
}

/* ---Подключение разных типов постов--- */
add_action('after_setup_theme', 'slug_post_formats');

function slug_post_formats() {
    add_theme_support(
            'post-formats', array(
        'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
            )
    );
}

/* ---Пользовательская функция комментариев--- */

function mytheme_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);

    if ('div' == $args['style']) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }
    ?>        
    <<?php echo $tag ?> <?php comment_class(empty($args['has_children']) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
    <?php if ('div' != $args['style']) : ?>
        <div class="comment-container">
        <?php endif; ?>
        <figure class="comment-author">
            <?php if ($args['avatar_size'] != 0) echo get_avatar($comment, $args['avatar_size']); ?>
        </figure>
        <?php if ($comment->comment_approved == '0') : ?>
            <em class="comment-awaiting-moderation"><?php _e('Ваш комментарий ожидает модерации.'); ?></em>
            <br />
        <?php endif; ?>

        <div id='comment-<?php comment_ID() ?>' class="">
            <ul class="comment-meta">
                <li class="comment-meta-author">
                    <?php printf(__('<h4>%s</h4>'), get_comment_author_link()); ?>
                </li>
                <li class="comment-meta-date">
                    <?php
                    /* translators: 1: date, 2: time */
                    printf(__('%1$s  %2$s'), get_comment_date('j F Y'), get_comment_time('g:i'));
                    ?>
                </li>
                <li class="comment-meta-edit">
                    <?php edit_comment_link(__('Edit'), '  ', ''); ?>
                </li>
                <li class="comment-meta-reply">
                    <?php
                    comment_reply_link(array_merge($args, array(
                        'add_below' => $add_below,
                        'depth'     => $depth,
                        'max_depth' => $args['max_depth']
                    )));
                    ?>
                </li>
            </ul>
            <div class="comment-body">
                <?php comment_text(); ?>
            </div> 
            <!--                <div class="reply">
            <?php // comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) );  ?>
                            </div>    -->
            <?php if ('div' != $args['style']) : ?>              
            </div>    
        </div>
    <?php endif; ?>
    <?php
}

require get_template_directory() . '/inc/customizer.php';
