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
                            <h4 class="sub-heading"><?php echo get_field('sub_heading');?></h4>
                            <h2 class="main-heading"><?php echo get_field('heading');?></h2>
							<?php if(has_post_thumbnail()) {?>
                            <div class="about-hotel-image d-lg-none d-md-block"> 
                                <img class="lazy" data-src="<?php echo get_the_post_thumbnail_url();?>" alt="About Casino Hotel" />
                            </div>
							<?php }?>
                            <?php the_content();?>
                            <a href="<?php echo get_field('button_link');?>" class="btn btn-danger">
                                <?php echo get_field('button_text');?>
                                <span class="btn-arrow">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
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
    <section id="hotels-list">
        <div class="hotels-list-wrap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h3 class="main-heading mb-1"><?php echo get_field('table_title');?></h3>
                        <em class="hotel-date-filter">
                            <i class="fa-regular fa-calendar"></i><?php echo date('d/m/y')?> </em>
                    </div>
                    <div class="col-lg-10">
                        <div class="hotels-list">
                            <div class="top-rated-text">
                              <?php echo get_field('sub_title');?>
                            </div>
                            <ul>
							<?php $number =1;	
								$hotel_lists = array(
									'post_type' => 'casino_hotels',
								  );
								  $hotel_list = new WP_Query( $hotel_lists ); 
								  while ( $hotel_list->have_posts() ) { $hotel_list->the_post();
																   
										$hotel_logo = get_field('logo');
										$rating = get_field('start_rating');							   
										 $score = get_field('score');
										 $final_score_cal = $score*10;
								  ?>   	
                                <li>
                                    <div class="hotel-number"><?php echo $number;?></div>
                                    <div class="hotel-logo"> 
                                        <img width="180" class="lazy" data-src="<?php echo $hotel_logo['url'];?>" alt="<?php echo $hotel_logo['alt'];?>" />
                                    </div>
                                    <div class="hotel-address">
                                        <h5>Address</h5>
                                        <p><?php the_field('address');?></p>
                                    </div>
                                    <div class="hotel-rating">
									<?php 
										if ( $rating ) {
											$average_stars = round( $rating * 2 ) / 2;
											$drawn = 5;
											$floor_stars = floor($average_stars);

											// full stars.
											for ( $i = 0; $i < $floor_stars; $i++ ) {
												$drawn--;
												echo '<i class="fa fa-star checked"></i>'; 
											}
											// half stars.
											if ( $rating - $floor_stars === 0.5 ) {
												$drawn--;
												echo '<i class="fa fa-star-half checked"></i>';
											}
											// empty stars.
											for ( $i = 0; $i < $drawn; $i++ ) {
												echo '<i class="fa fa-star"></i>';
											}
											$rating_Text = ['5'=>'Excellent','4'=> 'Very Good','3'=>'Average','2'=>'Good','1'=>'Poor']; 
											echo '<p>'.$rating_Text[$floor_stars].'</p>';
										}
									?>
                                       
                                    </div>
                                    <div class="hotel-overall-rating">
                                        <div class="circular-progress"> 
                                            <div class="progress" role="progressbar" aria-valuenow="<?php the_field('score');?>0" aria-valuemin="0" aria-valuemax="100" style="--value:<?php echo $final_score_cal?>"></div>
                                            <p><?php the_field('score');?></p>
                                        </div>
                                        <div class="hotel-rating-phone d-lg-none d-md-block">
                                            <?php 
										if ( $rating ) {
											$average_stars = round( $rating * 2 ) / 2;
											$drawn = 5;
											$floor_stars = floor($average_stars);

											// full stars.
											for ( $i = 0; $i < $floor_stars; $i++ ) {
												$drawn--;
												echo '<i class="fa fa-star checked"></i>'; 
											}
											// half stars.
											if ( $rating - $floor_stars === 0.5 ) {
												$drawn--;
												echo '<i class="fa fa-star-half checked"></i>';
											}
											// empty stars.
											for ( $i = 0; $i < $drawn; $i++ ) {
												echo '<i class="fa fa-star"></i>';
											}
											$rating_Text = ['5'=>'Excellent','4'=> 'Very Good','3'=>'Average','2'=>'Good','1'=>'Poor']; 
											echo '<p>'.$rating_Text[$floor_stars].'</p>';
										}
									?>
                                        </div>
                                    </div>
                                    <div class="hotel-action-btn">
                                        <a href="<?php the_field('external_link');?>" class="btn btn-success">
                                            Visit Hotel
                                            <span class="btn-arrow">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </span>
                                        </a>
                                        <a href="<?php echo get_permalink();?>" class="btn-link">
                                            Read Review
                                        </a>
                                    </div>
                                </li>
							 <?php $number++; }    wp_reset_postdata(); ?>	
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="why-choose-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h4 class="sub-heading"><?php echo get_field('why_choose_sub_heading')?></h4>
                        <h2 class="main-heading">
                           <?php echo get_field('why_choose_heading')?>
                        </h2>
                        <div class="why-choose-image d-lg-none d-md-block">
                           <?php $why_image = get_field('left_image');?>
                            <img class="lazy" data-src="<?php echo $why_image['url'];?>" alt="<?php echo $why_image['alt'];?>" />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="why-choose-image d-none d-lg-block"> 
                            <img class="lazy" data-src="<?php echo $why_image['url'];?>" alt="<?php echo $why_image['alt'];?>" />
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
    <?php 
get_footer();