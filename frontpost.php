<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<div class="row sam-blog-content">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="col-md-6 col-sm-6 center-block hero-image">
            <?php echo '<a href="' . esc_url( get_permalink() ) . '">'. get_the_post_thumbnail(null, null, array("class" => "img-responsive")) .'</a>'; ?>
        </header>
        <div class="col-md-6 col-sm-6">
            <?php the_title( '<h2 class="sam-color-grey"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
            <p class="text-justify">

                <?php the_excerpt( __( 'weiterlesen <span class="meta-nav">&rarr;</span>', 'greyskull14'), true );
                //the_excerpt();
                ?>
            </p>
        </div>
    </article>
</div>