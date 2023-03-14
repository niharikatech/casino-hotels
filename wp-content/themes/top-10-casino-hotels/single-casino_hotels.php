<?php 
get_header();
?>
<?php while ( have_posts() ) : the_post();
$hotel_logo = get_field('logo');
$rating = get_field('start_rating');							   
$score = get_field('score');
$final_score_cal = $score*10;

?>
<section>
        <div class="about-hotel">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-hotel-text">
                            <h4 class="sub-heading"><?php the_title();?></h4> 
                            <div class="about-hotel-image d-lg-none d-md-block"> 
                                <img class="lazy" data-src="<?php echo get_the_post_thumbnail_url();?>" alt=" Casino Hotel" />
                            </div>
                            <?php the_content();?> 
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
<?php endwhile;?>
<?php 
get_footer();
