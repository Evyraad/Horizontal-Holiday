<?php
/**
 * Код взят с comments.php темы Twenty_Fifteen
 * 
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
$commenter  = wp_get_current_commenter();
$fields     = array(
    'author' => '<div class="comment-form-author row">' . 
                '<label class="col-lg-2 text-right" for="author">' . __( 'Имя :' ) . ( $req ? '<span class="required">*</span>' : '' ) .'</label> ' .
                '<div class="ih-item col-lg-5">' .
		'<input class="comment-form-input" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />' .
                '</div>' .
                '</div>',
    
    'email'  => '<div class="comment-form-email row">'. 
                '<label class="col-lg-2 text-right" for="email">' . __( 'E-mail :' ) . ( $req ? '<span class="required">*</span>' : '' ) . '</label> ' .
                '<div class="ih-item col-lg-5">' .
		'<input class="comment-form-input" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />'.
                '</div>' .
                '</div>',
);

if ( post_password_required() ) {
	return;
}
?>

<section id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
            <div id='comment-paginate-top' class="comment-paginate">
                <?php paginate_comments_links( array( 
                    'prev_text' => '« Ранее', 
                    'next_text' => 'Позднее »'
                    ) ); 
                ?>
            </div>
    
            <h2 class="comments-title">
		<?php
                    if( get_comments_number() < 5 ):
                        printf( _nx( '%1$s комментарий', '%1$s комментария', get_comments_number(), 'comments title', 'HorizontalHoliday' ), get_comments_number() );
                    else:
                        printf( '%1$s комментариев', get_comments_number() );                               
                    endif;
		?>
            </h2>

            <ul class="comment-list">
		<?php wp_list_comments( 'type=comment&callback=mytheme_comment&avatar_size=77' );?>
            </ul><!-- .comment-list -->

	<?php endif; // have_comments()?>
        <div class="comment-paginate">
            <?php paginate_comments_links( array(
                'prev_text' => '« Ранее', 
                'next_text' => 'Позднее »'
                ) ); 
            ?>
        </div>

        <?php
	// If comments are closed and there are comments, let's leave a little note, shall we?
            if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
        ?>
            <p class="no-comments"><?php _e( 'Комментарии закрыты.', 'HorizontalHoliday' ); ?></p>
	<?php endif; 

	    comment_form( array(
                    'fields'                => apply_filters('comment_form_default_fields', $fields),
                    'comment_field'         =>  '<div class="ih-item comment-form-comment">' .
                                                '<label for="comment">' . _x( 'Комментарий :', 'noun' ) .'</label>' .
                                                '<textarea id="comment" class="comment-form-input" name="comment" cols="45" rows="8" aria-required="true" placeholder="Ваше сообщение">' .
                                                '</textarea>' .
                                                '</div>', 
                    'comment_notes_after'   => '',
                    ) ); 
        ?>
</section><!-- .comments-area -->