<?php
/**
 * The search results template for Hasooleilm LMS
 * 
 * @package Hasooleilm_LMS
 */

get_header(); ?>

<main id="primary" class="py-10 sm:py-14 md:py-20" role="main">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <header class="mb-10">
            <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-3">
                <?php
                /* translators: %s: search query */
                printf( esc_html__( 'Search results for: %s', 'hasooleilm-lms' ), '<span class="text-primary">' . get_search_query() . '</span>' );
                ?>
            </h1>
            <p class="text-gray-500 text-sm">
                <?php
                global $wp_query;
                printf(
                    esc_html(
                        _nx( '%d result', '%d results', $wp_query->found_posts, 'search results count', 'hasooleilm-lms' )
                    ),
                    $wp_query->found_posts
                );
                ?>
            </p>
        </header>

        <?php if ( have_posts() ) : ?>

            <div class="space-y-6 sm:space-y-8 mb-12">

                <?php while ( have_posts() ) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'bg-white border border-gray-200 rounded-xl p-5 sm:p-6 md:p-8 transition-shadow hover:shadow-lg' ); ?>>

                        <header class="mb-3">
                            <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-2">
                                <a href="<?php the_permalink(); ?>" rel="bookmark" class="hover:text-primary transition-colors">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <div class="flex flex-wrap gap-4 text-sm text-gray-500">
                                <time datetime="<?php echo get_the_date( 'c' ); ?>"><?php echo get_the_date(); ?></time>
                                <span><?php echo get_the_type(); ?></span>
                            </div>
                        </header>

                        <div class="mb-4">
                            <div class="text-gray-600 leading-relaxed mb-3">
                                <?php the_excerpt(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-2 text-primary font-semibold hover:text-primary-dark transition-colors group" aria-label="<?php printf( esc_attr__( 'Read more about %s', 'hasooleilm-lms' ), get_the_title() ); ?>">
                                <?php esc_html_e( 'Read More', 'hasooleilm-lms' ); ?>
                                <span class="group-hover:translate-x-1 transition-transform">&rarr;</span>
                            </a>
                        </div>

                    </article>

                <?php endwhile; ?>

            </div>

            <nav class="my-12" role="navigation" aria-label="<?php esc_attr_e( 'Posts navigation', 'hasooleilm-lms' ); ?>">
                <?php
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => __( '&larr; Previous', 'hasooleilm-lms' ),
                    'next_text' => __( 'Next &rarr;', 'hasooleilm-lms' ),
                    'before_page_number' => '<span class="sr-only">Page</span>',
                    'class' => 'flex justify-center gap-2 flex-wrap',
                ) );
                ?>
            </nav>

        <?php else : ?>

            <section class="text-center py-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4"><?php esc_html_e( 'No results found', 'hasooleilm-lms' ); ?></h2>
                <p class="text-gray-600 mb-6 max-w-md mx-auto"><?php esc_html_e( 'Sorry, no results matched your search terms. Please try different keywords.', 'hasooleilm-lms' ); ?></p>
                <div class="max-w-md mx-auto">
                    <?php get_search_form(); ?>
                </div>
            </section>

        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>
