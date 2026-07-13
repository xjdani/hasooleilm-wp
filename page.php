<?php
/**
 * The default page template for Hasooleilm LMS
 * 
 * @package Hasooleilm_LMS
 */

get_header(); ?>

<main id="primary" class="py-10 sm:py-14 md:py-20" role="main">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?>>

                <header class="mb-8">
                    <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 mb-3"><?php the_title(); ?></h1>
                    <div class="flex flex-wrap gap-4 text-sm text-gray-500">
                        <time datetime="<?php echo get_the_date( 'c' ); ?>"><?php echo get_the_date(); ?></time>
                        <span>
                            <?php esc_html_e( 'by', 'hasooleilm-lms' ); ?>
                            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="text-primary hover:text-primary-dark font-medium"><?php the_author(); ?></a>
                        </span>
                    </div>
                </header>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="mb-8 rounded-xl overflow-hidden">
                        <?php the_post_thumbnail( 'large', ['class' => 'w-full h-auto object-cover'] ); ?>
                    </div>
                <?php endif; ?>

                <div class="prose prose-gray max-w-none text-gray-700 leading-relaxed space-y-4">
                    <?php the_content(); ?>
                </div>

                <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links mt-8 pt-6 border-t border-gray-200 text-sm text-gray-600">',
                    'after'  => '</div>',
                ) );
                ?>

                <?php if ( has_category() ) : ?>
                    <footer class="mt-8 pt-6 border-t border-gray-200">
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

            <?php if ( comments_open() || get_comments_number() ) : ?>
                <div class="mt-10 pt-8 border-t border-gray-200">
                    <?php comments_template(); ?>
                </div>
            <?php endif; ?>

            <nav class="mt-10 pt-8 border-t border-gray-200 flex justify-between gap-4">
                <?php
                $prev = get_previous_post();
                $next = get_next_post();
                ?>
                <?php if ( $prev ) : ?>
                    <a href="<?php echo esc_url( get_permalink( $prev ) ); ?>" class="flex-1 group">
                        <span class="text-xs text-gray-500 block mb-1">&larr; <?php esc_html_e( 'Previous', 'hasooleilm-lms' ); ?></span>
                        <span class="text-sm font-semibold text-primary group-hover:text-primary-dark transition-colors"><?php echo esc_html( get_the_title( $prev ) ); ?></span>
                    </a>
                <?php else : ?>
                    <div class="flex-1"></div>
                <?php endif; ?>
                <?php if ( $next ) : ?>
                    <a href="<?php echo esc_url( get_permalink( $next ) ); ?>" class="flex-1 text-right group">
                        <span class="text-xs text-gray-500 block mb-1"><?php esc_html_e( 'Next', 'hasooleilm-lms' ); ?> &rarr;</span>
                        <span class="text-sm font-semibold text-primary group-hover:text-primary-dark transition-colors"><?php echo esc_html( get_the_title( $next ) ); ?></span>
                    </a>
                <?php endif; ?>
            </nav>

        <?php endwhile; ?>

    </div>
</main>

<?php get_footer(); ?>
