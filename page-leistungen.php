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
        <?php
        if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
            // Include the featured content template.
            get_template_part( 'featured-content' );
        }
        ?>
        <div id="primary" class="content-area">
            <div id="content" class="site-content" role="main">
                <div class="row sam-content">
                    <div class="col-md-12">
                    	<h1>Leistungen</h1>
                        <div class="row">

                            <!-- column one -->
                            <div class="col-sm-6 col-lg-4 text-center">

                                <!-- Wedding -->
                                <div class="card-two card-size-two">
                                    <div class="card-two-content">
                                        <div class="card-two-content-desc">
                                            <h2>Wedding</h2>
                                            <p>Fr &amp; Sa</p>
                                            <p>ab 8 Stunden Reportage</p>
                                            <p>2 Fotografen</p>
                                            <p>mind. 750 bearbeitete Bilder</p>
                                            <p>USB-Stick &amp; Online Galerie</p>
                                            <p>Vorgespräch</p>
                                            <p>Vorshooting (Mo-Do)</p>
                                            <p>inkl. Bildveröffentlichung</p>
                                            <p>Preis auf Anfrage</p>
                                            <p>
                                                <a class="btn btn-default" href="/hochzeitsanfrage/"><span class="glyphicon glyphicon-heart"></span> Kontaktiere uns</a>
                                            </p>
                                        </div>
                                    </div>
                                    <figure class="card-two-visual">
                                        <img class="text-center" src="<?php echo get_template_directory_uri();?>/image/leistungen/wedding.jpg"/>
                                    </figure>
                                </div>

                                <!-- Film -->
                                <div class="card-two card-size-one text-center">
                                    <div class="card-two-content">
                                        <div class="card-two-content-desc">
                                            <h2>Highlightfilm</h2>
                                            <p>4-6 Minuten</p>
                                            <p>Musik &amp; Audio</p>
                                            <p>inkl. Veröffentlichung</p>
                                            <p>900€</p>
                                            <p>
                                                <a class="btn btn-default" href="/films/"><span class="glyphicon glyphicon-facetime-video"></span> Filme anschauen</a>
                                            </p>
                                        </div>
                                    </div>
                                    <figure class="card-two-visual">
                                        <img class="text-center" src="<?php echo get_template_directory_uri();?>/image/leistungen/film.jpg"/>
                                    </figure>
                                </div>

                                <!-- Photobooth -->
                                <div class="card-two card-size-one text-center">
                                    <div class="card-two-content">
                                        <div class="card-two-content-desc">
                                            <h2>Photo Booth</h2>
                                            <p>3 Stunden</p>
                                            <p>300 Drucke</p>
                                            <p>Online Galerie</p>
                                            <p>400€</p>
                                            <p>
                                                <a class="btn btn-default" href="/kontakt/"><span class="glyphicon glyphicon-envelope"></span> Kontaktiere uns</a>
                                            </p>
                                        </div>
                                    </div>
                                    <figure class="card-two-visual">
                                        <img class="text-center" src="<?php echo get_template_directory_uri();?>/image/leistungen/photobooth.jpg"/>
                                    </figure>
                                </div>
                            </div> <!-- column one -->

                            <!-- column two -->
                            <div class="col-sm-6 col-lg-4">
                                
                                <!-- Portrait -->
                                <div class="card-two card-size-one text-center">
                                    <div class="card-two-content">
                                        <div class="card-two-content-desc">
                                            <h2>Portrait &amp; Love</h2>
                                            <p>1-1,5 Stunden</p>
                                            <p>1-2 Personen</p>
                                            <p>50 Bilder</p>
                                            <p>inkl. Bildveröffentlichung</p>
                                            <p>199€</p>
                                            <p>
                                                <a class="btn btn-default" href="/kontakt/"><span class="glyphicon glyphicon-envelope"></span> Kontaktiere uns</a>
                                            </p>
                                        </div>
                                    </div>
                                    <figure class="card-two-visual">
                                        <img class="text-center" src="<?php echo get_template_directory_uri();?>/image/leistungen/portraits.jpg"/>
                                    </figure>
                                </div>

                                <!-- Standesamt -->
                                <div class="card-two card-size-two text-center">
                                    <div class="card-two-content">
                                        <div class="card-two-content-desc">
                                            <h2>Standesamt</h2>
                                            <p>Mo-Do</p>
                                            <p>3 Stunden</p>
                                            <p>2 Fotografen</p>
                                            <p>inkl. Brautpaarshooting</p>
                                            <p>inkl. Bildveröffentlichung</p>
                                            <p>Online Galerie</p>
                                            <p>600€</p>
                                            <p>
                                                <a class="btn btn-default" href="/hochzeitsanfrage/"><span class="glyphicon glyphicon-heart"></span> Kontaktiere uns</a>
                                            </p>
                                        </div>
                                    </div>
                                    <figure class="card-two-visual">
                                        <img class="text-center" src="<?php echo get_template_directory_uri();?>/image/leistungen/standesamt.jpg"/>
                                    </figure>
                                </div>

                                <!-- Happy -->
                                <div class="card-two card-size-one text-center">
                                    <figure>
                                        <a class="img-wrap" href="/about">
                                            <img class="text-center" src="<?php echo get_template_directory_uri();?>/image/leistungen/happy.jpg"/>
                                            <div></div>
                                        </a>
                                    </figure>
                                </div>
                            </div><!-- column two -->

                            <!-- column three -->
                            <div class="col-sm-6 col-lg-4">

                                <!-- Questions -->
                                <div class="card-two card-size-one text-center">
                                    <figure>
                                        <a class="img-wrap" href="/kontakt">
                                            <img class="text-center" src="<?php echo get_template_directory_uri();?>/image/leistungen/questions.jpg"/>
                                            <div></div>
                                        </a>
                                    </figure>
                                </div>

                                <!-- Family -->
                                <div class="card-two card-size-one text-center">
                                    <div class="card-two-content">
                                        <div class="card-two-content-desc">
                                            <h2>Family</h2>
                                            <p>2 Stunden</p>
                                            <p>Eltern mit Kindern</p>
                                            <p>75 Bilder</p>
                                            <p>inkl. Bildveröffentlichung</p>
                                            <p>245€</p>
                                            <p>
                                                <a class="btn btn-default" href="/kontakt/"><span class="glyphicon glyphicon-envelope"></span> Kontaktiere uns</a>
                                            </p>
                                        </div>
                                    </div>
                                    <figure class="card-two-visual">
                                        <img class="text-center" src="<?php echo get_template_directory_uri();?>/image/leistungen/family.jpg"/>
                                    </figure>
                                </div>

                                <!-- After Wedding -->
                                <div class="card-two card-size-two text-center">
                                    <div class="card-two-content">
                                        <div class="card-two-content-desc">
                                            <h2>After Wedding</h2>
                                            <p>3 Stunden</p>
                                            <p>2 Fotografen</p>
                                            <p>USB Stick &amp; Galerie</p>
                                            <p>100 bearbeitete Bilder</p>
                                            <p>inkl. Bildveröffentlichung</p>
                                            <p>Preis auf Anfrage</p>
                                            <p>
                                                <a class="btn btn-default" href="/hochzeitsanfrage/"><span class="glyphicon glyphicon-heart"></span> Kontaktiere uns</a>
                                            </p>
                                        </div>
                                    </div>
                                    <figure class="card-two-visual">
                                        <img class="text-center" src="<?php echo get_template_directory_uri();?>/image/leistungen/afterwedding.jpg"/>
                                    </figure>
                                </div>
                            </div> <!-- column one -->
                        </div>
                    </div> <!-- col-md-9 -->
                </div> <!-- sam-content-->
            </div><!-- #content -->
        </div><!-- #primary -->
    </div><!-- #main-content -->
    
    <div class="clearfix"></div>
<?php
get_footer();
