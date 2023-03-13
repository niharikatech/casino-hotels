<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Top_10_Casino_Hotels
 */

?>
   <footer>
        <div class="footer-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
						<?php $logo = get_field('logo','option'); ?>
                        <div class="footer-logo">
                            <a href="<?php echo site_url();?>">
                                <img width="100" src="<?php echo esc_url($logo); ?>" alt="<?php echo $logo['alt'];?>">
                            </a>
                        </div>
                        <div class="footer-links">
                              <?php 
									$menu = array(
									'menu' => 'footer',
									'menu_id'=>'2',
									'menu_class' => '',
									'container' => 'false',
									'walker' => new wp_bootstrap_navwalker()
									);
									wp_nav_menu($menu);
								  ?>
                        </div>
						<?php $image = get_field('image','option'); ?>
                        <div class="begambleaware-logo d-none d-lg-block">
                            <a href="javascript:void(0)">
                                <img width="200" src="<?php echo $image['url'];?>" alt="">
                            </a>
                        </div>
                        <div class="copy-right">
                            <p><?php echo get_field('copyright_text','option'); ?></p>
                        </div>
                        <div class="begambleaware-logo d-lg-none d-md-block">
                            <a href="javascript:void(0)"> 
                                <img width="200" class="lazy" data-src="<?php echo $image['url'];?>" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>

</body>
</html>
