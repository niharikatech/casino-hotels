<?php
/**
 * The template Name: Why Choose Us
 * 
 */
get_header();
?>
<?php while ( have_posts() ) : the_post(); ?>
    <section>
        <div class="why-choose-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h4 class="sub-heading"><?php echo get_field('why_choose_sub_heading')?></h4>
                        <h2 class="main-heading">
                           <?php echo get_field('title')?>
                        </h2>
                        <div class="why-choose-image d-lg-none d-md-block">
                           <?php $why_image = get_field('left_image');?>
                            <img class="lazy" data-src="<?php echo get_the_post_thumbnail_url();?>"   />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="why-choose-image d-none d-lg-block"> 
                            <img class="lazy" data-src="<?php echo get_the_post_thumbnail_url();?>"  />
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="why-choose-text">
                            <ul>
								 <?php $index=1; while( have_rows('lists') ): the_row(); 
									$image = get_sub_field('image');
									?>
                                <li>
                                    <div class="choose-num"><?php echo $index;?></div>
                                    <div class="choose-heading">
                                        <h5><?php the_sub_field('title'); ?></h5>
                                        <p><?php the_sub_field('content'); ?></p>
                                    </div>
                                </li>
                               <?php $index++; endwhile; ?> 
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile;?>
    <?php 
get_footer();