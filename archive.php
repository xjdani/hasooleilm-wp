<?php
/**
 * The archive template for Hasooleilm LMS
 * 
 * @package Hasooleilm_LMS
 */

get_header(); ?>

<main id="primary" class="py-10 sm:py-14 md:py-20" role="main">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <header class="mb-10">
            <?php the_archive_title( '<h1 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-3">', '</h1>' ); ?>
            <?php the_archive_description( '<p class="text-gray-600 text-sm sm:text-base max-w-2xl">', '</p>' ); ?>
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
                                <span>
                                    <?php esc_html_e( 'by', 'hasooleilm-lms' ); ?>
                                    <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="text-primary hover:text-primary-dark font-medium"><?php the_author(); ?></a>
                                </span>
                            </div>
                        </header>

                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="mb-4 rounded-lg overflow-hidden">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'medium', ['class' => 'w-full h-auto object-cover'] ); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="mb-4">
                            <div class="text-gray-600 leading-relaxed mb-3">
                                <?php the_excerpt(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-2 text-primary font-semibold hover:text-primary-dark transition-colors group" aria-label="<?php printf( esc_attr__( 'Read more about %s', 'hasooleilm-lms' ), get_the_title() ); ?>">
                                <?php esc_html_e( 'Read More', 'hasooleilm-lms' ); ?>
                                <span class="group-hover:translate-x-1 transition-transform">&rarr;</span>
                            </a>
                        </div>

                        <?php if ( has_category() ) : ?>
                            <footer class="mt-4 pt-4 border-t border-gray-100">
                                <div class="flex flex-wrap gap-2">
                                    <?php
                                    $categories = get_the_category();
                                    if ( ! empty( $categories ) ) {
                                        foreach( $categories as $category ) {
                                            echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" class="inline-block bg-secondary text-primary-dark text-xs font-medium px-3 py-1 rounded-full hover:bg-primary hover:text-white transition-colors">' . esc_html( $category->name ) . '</a>';
                                        }
                                    }
                                    ?>
                                </div>
                            </footer>
                        <?php endif; ?>

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
                <h1 class="text-3xl font-bold text-gray-900 mb-4"><?php esc_html_e( 'Nothing Found', 'hasooleilm-lms' ); ?></h1>
                <p class="text-gray-600 mb-6 max-w-md mx-auto"><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'hasooleilm-lms' ); ?></p>
                <?php get_search_form(); ?>
            </section>

        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>
