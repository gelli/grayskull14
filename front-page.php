<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
    <div id="main-content" class="main-content">

        <?php get_template_part('part', 'carousel') ?>

        <div clas="clearfix" style="margin-top:20px;"></div>

        <!-- small hero images
        <div class="row sam-hero-row text-center">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div>
                    <a href="/wedding/"  class="img-wrap">
                        <img class="center-block img-responsive" src="<?php echo get_template_directory_uri();?>/image/1_Wedding.png"/>
                        <div></div>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div>
                    <a href="/blog/" class="img-wrap">
                        <img class="center-block img-responsive" src="<?php echo get_template_directory_uri();?>/image/2_Lifestyle.png"/>
                        <div></div>
                    </a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-3">
                <div>
                    <a href="/films/"  class="img-wrap">
                        <img class="center-block img-responsive" src="<?php echo get_template_directory_uri();?>/image/3_Films.png"/>
                        <div></div>
                     </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div>
                    <a href="/workshops/" class="img-wrap">
                        <img class="center-block img-responsive" src="<?php echo get_template_directory_uri();?>/image/4_workshop.png"/>
                        <div></div>
                    </a>
                </div>
            </div>
        </div>
        end: small hero images -->

        <div class="row">
            <div class="col-md-4">
                <div class="welcome text-center sam-blog-content">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri()?>/image/stern.png" style="width:120px;"/></a>
                    <h1 style="font-size:3.6em;" class="sam-color-two">Welcome</h1>
                    <div class="teaser-box text-left">
                        <p class="lead">
                            <a href="/about/"><span class="teaser-camera glyphicon glyphicon-camera"></span></a> Katrin und Sandra.
                        </p>
                        <p>
                            Hochzeitsfotografen mit Liebe zum Detail. Wir halten eure Hochzeit in Foto und Film für euch und eure Enkelkinder fest. Auf jeden Fall zu zweit unterwegs und gemeinsam wollen wir eins: In Bildern eure Geschichten erzählen.
                        </p>
                        <p>
                            Persönlich. Lebendig. Einzigartig wie ihr. Mit unserer langjährigen Erfahrung sind wir eure Begleiter auf dem Weg zur Hochzeit und an eurem großen Tag. Dabei schaffen wir fotografische Erinnerungen, die noch in Jahrzehnten die großen Momente eurer Liebe lebendig werden lassen.
                        </p>
                        <p>Es ist eure Hochzeit. Entspannt euch! Wir sind für euch da.</p>
                        <p class="text-right">Stay marvelous - Katrin und Sandra.</p>
                    </div>
                    <hr/>

                    <div>
                        <a href="https://www.facebook.com/katrinandsandra" target="_blank" class="sam-icon-size-48 sam-icon sam-color-two">&#xf106;</a>
                        <a href="https://plus.google.com/112711029813738652601/posts" target="_blank" class="sam-icon-size-48 sam-icon sam-color-two">&#xf101;</a>
                        <a href="http://www.pinterest.com/katrinandsandra/" target="_blank" class="sam-icon-size-48 sam-icon sam-color-two">&#xf103;</a>
                        <a href="https://vimeo.com/katrinandsandra" target="_blank" class="sam-icon-size-48 sam-icon sam-color-two">&#xf104;</a>
                    </div>

                    <hr/>

                    <div class="row videoWrapper">
                        <iframe src="http://player.vimeo.com/video/<?php echo get_post_meta(get_the_id(), "video", true); ?>?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=0"
                                frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
                        </iframe>
                    </div>

                    <div class="teaser-box">
                        <p>
                            <a target="_blank" href="http://www.instagram.com/katrinandsandra" class="sam-icon-size-48 sam-icon sam-color-two">&#xf102;</a>
                            <a target="_blank" href="http://www.instagram.com/katrinandsandra">Folge <strong>Katrin</strong> auf Instagram</a>
                        </p>
                        <p>
                            <a target="_blank" href="http://www.instagram.com/littlebluebag" class="sam-icon-size-48 sam-icon sam-color-two">&#xf102;</a>
                            <a target="_blank" href="http://www.instagram.com/littlebluebag">Folge <strong>Sandra</strong> auf Instagram</a>
                        </p>
                    </div>
                </div>
            </div> <!-- col-md-4 -->

            <div class="col-md-8" style="margin-bottom: 20px">

                <?php
                $query = new WP_Query( array (
                    'post_type' => 'post',
                    'posts_per_page' => '4',
                    'category_name' => 'Featured'
                ));


                if ( $query->have_posts() ) :
                    // Start the Loop.
                    while ( $query->have_posts() ) : $query->the_post();

                        get_template_part( 'frontpost');

                    endwhile;

                else :
                    // If no content, include the "No posts found" template.
                    get_template_part( 'content', 'none' );

                endif;
                ?>
                <div class="row text-center">
                    <div class="col-xs-12">
                        <a class="btn btn-primary" href="/wedding/">Weitere Hochzeiten</a>
                        <a class="btn btn-default" href="/blog/">Alle Blogeinträge</a>
                    </div>
                </div>
            </div> <!-- col-md-8 -->

            <div class="clearfix"></div>
            <!-- /video and blog -->
        </div>
        <div class="row sam-hero-row text-center">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div>
                    <a href="/wedding/"  class="img-wrap">
                        <img class="center-block img-responsive" src="<?php echo get_template_directory_uri();?>/image/1_Wedding.png"/>
                        <div></div>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div>
                    <a href="/blog/" class="img-wrap">
                        <img class="center-block img-responsive" src="<?php echo get_template_directory_uri();?>/image/2_Lifestyle.png"/>
                        <div></div>
                    </a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-3">
                <div>
                    <a href="/films/"  class="img-wrap">
                        <img class="center-block img-responsive" src="<?php echo get_template_directory_uri();?>/image/3_Films.png"/>
                        <div></div>
                     </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div>
                    <a href="/workshops/" class="img-wrap">
                        <img class="center-block img-responsive" src="<?php echo get_template_directory_uri();?>/image/4_workshop.png"/>
                        <div></div>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
