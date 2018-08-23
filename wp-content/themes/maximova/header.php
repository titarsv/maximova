<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicon.png" type="image/png">
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body id='body' <?php body_class(); ?>>

<header class="header">
    <div class="lg-container">
        <div class="header-inner">
	        <?php if( is_front_page() ) { ?>
                <span class="logo-wrapper"><img class="logo" src="<?php echo get_template_directory_uri();?>/svg/logo.svg" alt="Julia Maksimova" ></span>
	        <?php }else{ ?>
                <a href="/" class="logo-wrapper"><img class="logo" src="<?php echo get_template_directory_uri();?>/svg/logo.svg" alt="Julia Maksimova"></a>
	        <?php } ?>
            <ul class="main-menu">
		        <?php wp_nav_menu(array(
			        'menu' => 'Menu',
			        'menu_class' => 'main-menu',
			        'container' => false,
			        'items_wrap' => '%3$s',
//			        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			        'link_before' => '<span>',
			        'link_after' => '</span>',
			        'depth' => 2,
			        'walker' => new Main_Walker_Nav_Menu()
		        )); ?>
                <li class="main-menu__item">
                    <span class="lang-btn icon-arrow-down">
                        <p class="lang"><?=strtoupper(qtrans_getLanguage())?></p>
	                    <?php qtranxf_generateLanguageSelectCode('short', 'language'); ?>
                    </span>
                </li>
            </ul>
            <span class="mobile-menu__btn">
                <div class="x"></div>
                <div class="y"></div>
                <div class="z"></div>
            </span>
        </div>
    </div>
</header>

<?php if( is_page( 'about' ) ){ ?>
<div class="about-menu">
    <div class="container">
        <div class="col-md-12">
	        <?php wp_nav_menu(array(
		        'menu' => 'About',
		        'menu_class' => 'about-menu__list',
		        'container' => false,
		        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		        'link_before' => '<span>',
		        'link_after' => '</span>',
		        'depth' => 1
	        )); ?>
        </div>
    </div>
</div>
<?php } ?>

<div class="mobile-menu">
    <div class="lg-container">
        <div class="mobile-menu__header">
            <img class="mobile-menu__logo" src="<?php echo get_template_directory_uri();?>/svg/footer-logo.svg" alt="Julia Maksimova">
            <div class="mobile-menu__right">
                <ul class="mobile-menu__socials top">
	                <?php wp_nav_menu(array(
		                'menu' => 'Social',
		                'container' => false,
		                'items_wrap' => '%3$s',
		                'depth' => 1
	                )); ?>
                </ul>
            </div>
        </div>
        <div class="mobile-menu__lg">
            <ul class="mobile-menu__lg-row1">
	            <?php wp_nav_menu(array(
		            'menu' => 'Mobile main',
		            'container' => false,
		            'items_wrap' => '%3$s',
		            'depth' => 1
	            )); ?>
            </ul>
            <span class="mobile-menu__lg-heading">Services</span>
            <ul class="mobile-menu__lg-row2">
	            <?php wp_nav_menu(array(
		            'menu' => 'Mobile services',
		            'container' => false,
		            'items_wrap' => '%3$s',
		            'depth' => 1
	            )); ?>
            </ul>
            <span class="mobile-menu__lg-heading">News and Insights</span>
            <ul class="mobile-menu__lg-row3">
	            <?php wp_nav_menu(array(
		            'menu' => 'Mobile news and insights',
		            'container' => false,
		            'items_wrap' => '%3$s',
		            'depth' => 1
	            )); ?>
            </ul>
        </div>
        <div class="mobile-menu__sm">
            <span class="mobile-menu__sm-heading">Services</span>
            <ul class="mobile-menu__sm-list">
	            <?php wp_nav_menu(array(
		            'menu' => 'Mobile services',
		            'container' => false,
		            'items_wrap' => '%3$s',
		            'depth' => 1
	            )); ?>
            </ul>
            <span class="mobile-menu__sm-heading">News and Insights</span>
            <ul class="mobile-menu__sm-list">
	            <?php wp_nav_menu(array(
		            'menu' => 'Mobile news and insights',
		            'container' => false,
		            'items_wrap' => '%3$s',
		            'depth' => 1
	            )); ?>
            </ul>
            <ul class="mobile-menu__sm-additional-list">
	            <?php wp_nav_menu(array(
		            'menu' => 'Mobile main',
		            'container' => false,
		            'items_wrap' => '%3$s',
		            'depth' => 1
	            )); ?>
            </ul>
            <ul class="mobile-menu__socials bot">
	            <?php wp_nav_menu(array(
		            'menu' => 'Social',
		            'container' => false,
		            'items_wrap' => '%3$s',
		            'depth' => 1
	            )); ?>
            </ul>
        </div>
    </div>
</div>


<?php //echo str_replace(array('menu-item', 'sub-menu'), array('mobile-menu__item', 'mobile-submenu'), wp_nav_menu(array(
//    'menu' => 'Menu',
//    'menu_class' => 'mobile-menu__list',
//    'container' => false,
//    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
//    'depth' => 2,
//    'echo' => false
//))); ?>
