<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Top_10_Casino_Hotels
 */

get_header();
?>
<?php while ( have_posts() ) : the_post(); ?>
<section>
        <div class="about-hotel">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="about-hotel-text">
                            <h4 class="sub-heading"><?php title();;?></h4> 
                            <div class="about-hotel-image d-lg-none d-md-block"> 
                                <img class="lazy" data-src="<?php echo get_the_post_thumbnail_url();?>" alt=" Casino Hotel" />
                            </div>
                            <?php the_content();?> 
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-hotel-image d-none d-lg-block"> 
                            <img class="lazy" data-src="<?php echo get_the_post_thumbnail_url();?>" alt="Casino Hotel" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile;?>
<?php 
get_footer();
