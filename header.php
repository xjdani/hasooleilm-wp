<?php
/**
 * The header template for Hasooleilm LMS
 * 
 * @package Hasooleilm_LMS
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-gray-900 font-sans antialiased'); ?>>
<?php wp_body_open(); ?>

<a class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-[100] focus:bg-primary focus:text-white focus:px-6 focus:py-3 focus:rounded-lg focus:font-bold" href="#main-content">
    <?php esc_html_e( 'Skip to main content', 'hasooleilm-lms' ); ?>
</a>

<header id="masthead" class="sticky top-0 z-50 w-full bg-white shadow-sm transition-shadow duration-300" role="banner" aria-label="<?php esc_attr_e( 'Site Header', 'hasooleilm-lms' ); ?>">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-[70px] flex items-center justify-between">

        <div class="flex items-center gap-3">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-3 text-gray-900 no-underline hover:opacity-80 transition-opacity" aria-label="<?php esc_attr_e( 'Hasooleilm LMS - Home', 'hasooleilm-lms' ); ?>">
                <?php if ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.png' ); ?>"
                         alt="<?php esc_attr_e( 'Hasooleilm LMS Logo', 'hasooleilm-lms' ); ?>"
                         class="h-[60px] w-auto object-contain rounded-lg"
                         width="60"
                         height="60">
                <?php endif; ?>
                <span class="text-xl md:text-2xl font-bold text-primary tracking-tight"><?php bloginfo( 'name' ); ?></span>
            </a>
            <?php
            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) :
            ?>
                <p class="hidden lg:block text-sm text-gray-500 mt-1"><?php echo esc_html( $description ); ?></p>
            <?php endif; ?>
        </div>

        <button class="mobile-menu-toggle md:hidden flex items-center justify-center w-11 h-11 border-2 border-gray-200 rounded-lg cursor-pointer bg-transparent p-0 hover:bg-secondary hover:border-primary transition-all"
                aria-expanded="false"
                aria-controls="primary-navigation"
                aria-label="<?php esc_attr_e( 'Toggle navigation menu', 'hasooleilm-lms' ); ?>">
            <span class="block w-6 h-0.5 bg-primary relative transition-all before:content-[''] before:absolute before:w-6 before:h-0.5 before:bg-primary before:left-0 before:-top-2 before:transition-all after:content-[''] after:absolute after:w-6 after:h-0.5 after:bg-primary after:left-0 after:-bottom-2 after:transition-all" aria-hidden="true"></span>
            <span class="sr-only"><?php esc_html_e( 'Menu', 'hasooleilm-lms' ); ?></span>
        </button>

        <nav id="primary-navigation" class="hidden md:flex md:static md:bg-transparent md:shadow-none md:p-0 items-center gap-2 absolute top-[70px] left-0 right-0 bg-white shadow-lg p-5 z-[999]" role="navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'hasooleilm-lms' ); ?>">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
                'container'      => false,
                'depth'          => 2,
                'fallback_cb'    => 'hasooleilm_fallback_menu',
                'items_wrap'     => '<ul id="%1$s" class="%2$s flex flex-col md:flex-row gap-1 list-none m-0 p-0 md:items-center" role="menubar">%3$s</ul>',
                'item_spacing'   => 'preserve',
            ) );
            ?>

            <div class="mt-5 md:mt-0 pt-5 md:pt-0 border-t border-gray-200 md:border-0 md:ml-6">
                <form role="search" method="get" class="flex gap-2 relative" action="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Search site', 'hasooleilm-lms' ); ?>">
                    <label for="header-search-input" class="sr-only"><?php esc_html_e( 'Search for:', 'hasooleilm-lms' ); ?></label>
                    <input type="search"
                           id="header-search-input"
                           class="flex-1 md:w-[240px] lg:w-[280px] px-4 py-3 md:py-2 border-2 border-gray-200 rounded-lg font-sans text-sm md:text-base focus:outline-none focus:border-primary transition-colors placeholder:text-gray-500"
                           placeholder="<?php esc_attr_e( 'Search notes & resources...', 'hasooleilm-lms' ); ?>"
                           value="<?php echo get_search_query(); ?>"
                           name="s"
                           aria-label="<?php esc_attr_e( 'Search input', 'hasooleilm-lms' ); ?>">
                    <button type="submit" class="flex items-center justify-center w-11 h-11 md:w-9 md:h-9 bg-primary border-none rounded-lg text-white cursor-pointer hover:bg-primary-dark transition-colors absolute right-1 top-1/2 -translate-y-1/2" aria-label="<?php esc_attr_e( 'Submit search', 'hasooleilm-lms' ); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.35-4.35"></path>
                        </svg>
                    </button>
                </form>
            </div>
        </nav>
    </div>
</header>

<div id="content">
    <div id="main-content">
