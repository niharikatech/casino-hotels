<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Top_10_Casino_Hotels
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<?php if (!is_singular('casino_hotels') ) {?>
<header>
        <div class="banner-home" style="background-image: url('<?php echo get_field('hero_image','option');?>');">
            <div class="container">
                <div class="banner-caption">
					<?php $logo = get_field('logo','option'); ?>
                    <a href="<?php echo site_url();?>">
                        <img width="142" src="<?php echo esc_url($logo); ?>" alt="<?php echo $logo['alt'];?>">
                    </a>
                    <h1><?php echo get_field('hero_title','option');?> </h1>
                    <p><?php echo get_field('hero_description','option');?></p>
                    <a href="<?php echo get_field('button_link','option');?>" class="btn btn-danger">
                      <?php echo get_field('hero_button_text','option');?>
                        <span class="btn-arrow">
                            <i class="fa-solid fa-arrow-down"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </header>
	<?php } else {?>
	<header>
        <div class="banner-home" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>');">
            <div class="container">
                <div class="banner-caption">
					<?php $logo = get_field('logo','option'); ?>
                    <a href="<?php echo site_url();?>">
                        <img width="142" src="<?php echo esc_url($logo); ?>" alt="<?php echo $logo['alt'];?>">
                    </a>
                    <h1><?php echo get_field('hero_title','option');?> </h1>
                    <p><?php echo get_field('hero_description','option');?></p>
                    <a href="<?php echo get_field('button_link','option');?>" class="btn btn-danger">
                      <?php echo get_field('hero_button_text','option');?>
                        <span class="btn-arrow">
                            <i class="fa-solid fa-arrow-down"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </header>
	<?php  }?>