<?php
/**
 * The 404 error template for Hasooleilm LMS
 * 
 * @package Hasooleilm_LMS
 */

get_header(); ?>

<main id="primary" class="py-10 sm:py-14 md:py-20" role="main">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

        <div class="py-12">
            <span class="block text-7xl sm:text-8xl font-bold text-primary/20 mb-4">404</span>
            <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4"><?php esc_html_e( 'Page not found', 'hasooleilm-lms' ); ?></h1>
            <p class="text-gray-600 max-w-md mx-auto mb-8 text-sm sm:text-base">
                <?php esc_html_e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'hasooleilm-lms' ); ?>
            </p>

            <div class="max-w-md mx-auto mb-10">
                <?php get_search_form(); ?>
            </div>

            <div class="flex flex-wrap justify-center gap-4">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-flex items-center justify-center px-6 py-3 bg-primary text-white font-semibold rounded-lg hover:bg-primary-dark hover:-translate-y-0.5 transition-all text-sm sm:text-base">
                    <?php esc_html_e( 'Back to Homepage', 'hasooleilm-lms' ); ?>
                </a>
                <a href="<?php echo esc_url( home_url( '/study-notes' ) ); ?>" class="inline-flex items-center justify-center px-6 py-3 border-2 border-gray-300 text-gray-700 font-semibold rounded-lg hover:border-primary hover:text-primary transition-all text-sm sm:text-base">
                    <?php esc_html_e( 'Browse Study Notes', 'hasooleilm-lms' ); ?>
                </a>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>
