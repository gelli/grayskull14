<?php

require(get_template_directory().'/vnd/wp-bootstrap-navwalker/wp_bootstrap_navwalker.php');
require(get_template_directory().'/lib/menus.php');

/**
 * Enqueue scripts and styles
 */
function greyskull14_scripts() {
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() .'/vnd/bootstrap/dist/css/bootstrap.css');
    wp_enqueue_style( 'greyskull_css', get_template_directory_uri() .'/style/greyskull.css');

    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js');
    wp_enqueue_script('bootstrap', get_template_directory_uri() .'/vnd/bootstrap/dist/js/bootstrap.min.js');
}

add_action( 'wp_enqueue_scripts', 'greyskull14_scripts' );


/**
 * header register menus
 */
function greyskull_register_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
    register_nav_menu('header-right-menu', __('Right Header Menu'));
}
add_action( 'init', 'greyskull_register_menu' );

function greyskull_widgets_init() {

    register_sidebar( array(
        'name'          => __( 'Sidebar Widget Area', 'greyskull14' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Appears in the sidebar section of the site.', 'greyskull14' ),
        'before_widget' => '<div id="%1$s" class="row widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'greyskull_widgets_init' );

add_theme_support( 'post-thumbnails' );
add_theme_support('automatic-feed-links');
set_post_thumbnail_size( 400, 400 );

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support( 'html5', array(
    'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
) );


if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
}


// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
    global $post;

    return
        '<p><a class="moretag" href="'. get_permalink($post->ID) . '">'
        .__( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyfourteen' )
        .'</a></p>';
}

add_filter('excerpt_more', 'new_excerpt_more');

function grayskull_numeric_posts_nav() {

    if( is_singular() )
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );

    /**	Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;

    /**	Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<ul id="pager" class="pagination">' . "\n";

    /**	Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

    /**	Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
            echo '<li><span>…</span></li>';
    }

    /**	Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }

    /**	Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li><span>…</span></li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /**	Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );

    echo '</ul>' . "\n";

}
