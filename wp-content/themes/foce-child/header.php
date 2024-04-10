<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">

    <nav id="site-navigation" class="main-navigation">

        <ul id="titreMenu">
            <li class="title-site"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></li>
        </ul>
        <div id="burger-btn" class="burger" aria-controls="primary-menu" aria-expanded="false">
         <button class="btn__burger btn-open">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
          </button>
        </div>
    </nav><!-- #site-navigation -->

    <div id="fullscreen-menu" class="fullscreenMenu">
        <img class ="logoFullscreen" src="<?php echo get_theme_file_uri() . '/assets/images/logo.png'; ?>" alt="logo koukaki">
        <img class ="orchidMenu" src="<?php echo get_theme_file_uri() . '/assets/images/orchid.png'; ?>" alt="orchid flower">
        <img class ="flowerMenu" src="<?php echo get_theme_file_uri() . '/assets/images/flower.png'; ?>" alt="flower">
        <img class ="sunflowerMenu" src="<?php echo get_theme_file_uri() . '/assets/images/Sunflower.png'; ?>" alt=" sunflower">
        <img class ="randomflowerMenu" src="<?php echo get_theme_file_uri() . '/assets/images/random_flower.png'; ?>" alt="random flower">
        <img class ="hibiscusMenu" src="<?php echo get_theme_file_uri() . '/assets/images/hibiscus_footer.png'; ?>" alt=" hibiscus flower">
        <img class ="small-kawanekoMenu" src="<?php echo get_theme_file_uri() . '/assets/images/small-kawaneko.png'; ?>" alt="small kawaneko">
        <img class ="small-onejiiroMenu" src="<?php echo get_theme_file_uri() . '/assets/images/small-onejiiro.png'; ?>" alt="small onejiiro">
        <img class ="small-jaakunaMenu" src="<?php echo get_theme_file_uri() . '/assets/images/small-jaakuna.png'; ?>" alt="small jaakuna">
        <ul>
            <li><a href="#story">Histoire</a></li>
            <li><a href="#characters">Personnages</a></li>
            <li><a href="#place">Lieu</a></li>
            <li><a href="#studio">Studio Koukaki</a></li>
        </ul>
    
        <p>STUDIO KOUKAKI</p>
       
    </div><!-- #fullscreen-menu -->

	</header><!-- #masthead -->
