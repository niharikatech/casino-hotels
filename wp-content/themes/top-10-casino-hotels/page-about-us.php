<?php
/**
 * The template Name: Home
 * 
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
                            <h2 class="main-heading"><?php echo the_title();?></h2>
							<?php if(has_post_thumbnail()) {?>
                            <div class="about-hotel-image d-lg-none d-md-block"> 
                                <img class="lazy" data-src="<?php echo get_the_post_thumbnail_url();?>" alt="About Casino Hotel" />
                            </div>
							<?php }?>
                            <?php the_content();?>
                           
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-hotel-image d-none d-lg-block"> 
                            <img class="lazy" data-src="<?php echo get_the_post_thumbnail_url();?>" alt="About Casino Hotel" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile;?>
 
    <?php 
get_footer();