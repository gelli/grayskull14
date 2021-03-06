<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area row">
    <div class="col-md-8">

	<?php if ( have_comments() ) : ?>

	<h2 class="comments-title">
		<?php
			printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'twentyfourteen' ),
				number_format_i18n( get_comments_number() ), get_the_title() );
		?>
	</h2>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'twentyfourteen' ); ?></h1>
		<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentyfourteen' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentyfourteen' ) ); ?></div>
	</nav><!-- #comment-nav-above -->
	<?php endif; // Check for comment navigation. ?>

	<ol class="comment-list">
		<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
				'avatar_size'=> 34,
			) );
		?>
	</ol><!-- .comment-list -->

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'twentyfourteen' ); ?></h1>
		<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentyfourteen' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentyfourteen' ) ); ?></div>
	</nav><!-- #comment-nav-below -->
	<?php endif; // Check for comment navigation. ?>

	<?php if ( ! comments_open() ) : ?>
	<p class="no-comments"><?php _e( 'Comments are closed.', 'twentyfourteen' ); ?></p>
	<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php

    $args = array(

        'comment_field' =>
            '<p><div class="input-group input-group-area">'.
            '<span class="input-group-addon"><span class="glyphicon glyphicon-comment"></span></span>'.
            '<textarea class="form-control pull-left" id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="' .
            _x( 'Comment', 'noun' ) .
            '">' .
            '</textarea></div></p>',

        'comment_notes_after' => '',

        'fields' => apply_filters( 'comment_form_default_fields', array(
                'author' =>
      /*              '<p class="comment-form-author">' .
                    '<label for="author">' . __( 'Name', 'domainreference' ) . '</label> ' .
                    ( $req ? '<span class="required">*</span>' : '' ) .
                    '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                    '" size="100"' . $aria_req . ' /></p>', */

                    '<p><div class="input-group input-group-lg">'.
                    '<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>'.
                    '<input id="author" name="author" type="text" class="form-control" value="' .
                    esc_attr( $commenter['comment_author'] ) .
                    '" placeholder="'. __( 'Name', 'domainreference' ) .( $req ? ' *' : '' ) .'">'.
                    '</div></p>',

                /*
                 * <div class="input-group input-group-lg">
  <span class="input-group-addon">@</span>
  <input type="text" class="form-control" placeholder="Username">
</div>
                 */

                'email' =>
                    /*'<p class="comment-form-email"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
                    ( $req ? '<span class="required">*</span>' : '' ) .
                    '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                    '" size="30"' . $aria_req . ' /></p>', */

                    '<p><div class="input-group input-group-lg">'.
                    '<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>'.
                    '<input id="email" name="email" type="text" class="form-control" value="' .
                    esc_attr( $commenter['comment_author_email'] ) .
                    '" placeholder="'. __( 'Email', 'domainreference' ) .( $req ? ' *' : '' ).'">'.
                    '</div></p>',


                'url' =>
                    /*'<p class="comment-form-url"><label for="url">' .
                    __( 'Website', 'domainreference' ) . '</label>' .
                    '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
                    '" size="30" /></p>' */
                    '<p><div class="input-group input-group-lg">'.
                    '<span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>'.
                    '<input id="url" name="url" type="text" class="form-control" value="' .
                    esc_attr( $commenter['comment_author_url'] ) .
                    '" placeholder="'. __( 'Website', 'domainreference' ) .'">'.
                    '</div></p>',

            )
        ),    );

    comment_form($args);

    ?>
    </div>
</div><!-- #comments -->
