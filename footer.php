<?php
/**
 * The footer template for Hasooleilm LMS
 * 
 * @package Hasooleilm_LMS
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

    </div><!-- #main-content -->
</div><!-- #content -->

<footer id="colophon" class="site-footer bg-primary-dark text-white mt-16" role="contentinfo" aria-label="<?php esc_attr_e( 'Site Footer', 'hasooleilm-lms' ); ?>">
    
    <!-- Main Footer Content -->
    <div class="footer-main py-12 md:py-16">
        <div class="max-w-[1200px] mx-auto px-5 lg:px-10">
            <div class="grid gap-8 md:gap-12 grid-cols-1 md:grid-cols-2 lg:grid-cols-[2fr_1fr_1fr_1.5fr]">
                
                <!-- Brand Column -->
                <div class="footer-brand max-w-[350px] lg:max-w-none">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo-link flex items-center gap-3 text-white no-underline hover:opacity-85 transition-opacity mb-4" aria-label="<?php esc_attr_e( 'Hasooleilm LMS - Home', 'hasooleilm-lms' ); ?>">
                        <?php if ( has_custom_logo() ) : ?>
                            <?php the_custom_logo(); ?>
                        <?php else : ?>
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.png' ); ?>" 
                                 alt="<?php esc_attr_e( 'Hasooleilm LMS Logo', 'hasooleilm-lms' ); ?>" 
                                 class="custom-logo w-[50px] h-[50px] rounded-lg" 
                                 width="50" 
                                 height="50">
                        <?php endif; ?>
                        <span class="footer-site-title text-xl md:text-2xl font-bold"><?php bloginfo( 'name' ); ?></span>
                    </a>
                    <p class="footer-description text-sm md:text-base opacity-90 leading-relaxed mb-0">
                        <?php esc_html_e( 'The dedicated AKU-EB study platform for Classes 9–12 — notes, solved past papers, and SLO-wise practice mapped to the official syllabus.', 'hasooleilm-lms' ); ?>
                    </p>
                </div>

                <!-- Quick Links Column -->
                <div class="footer-links">
                    <h3 class="footer-heading text-base md:text-lg font-bold mb-4 tracking-wide"><?php esc_html_e( 'Study', 'hasooleilm-lms' ); ?></h3>
                    <ul class="footer-menu list-none p-0 m-0 space-y-2.5">
                        <li><a href="<?php echo esc_url( home_url( '/study-notes' ) ); ?>" class="text-white/85 no-underline text-sm md:text-base hover:text-secondary hover:translate-x-1 transition-all inline-block"><?php esc_html_e( 'Study Notes', 'hasooleilm-lms' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/courses' ) ); ?>" class="text-white/85 no-underline text-sm md:text-base hover:text-secondary hover:translate-x-1 transition-all inline-block"><?php esc_html_e( 'Courses', 'hasooleilm-lms' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/admissions' ) ); ?>" class="text-white/85 no-underline text-sm md:text-base hover:text-secondary hover:translate-x-1 transition-all inline-block"><?php esc_html_e( 'Admissions', 'hasooleilm-lms' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>" class="text-white/85 no-underline text-sm md:text-base hover:text-secondary hover:translate-x-1 transition-all inline-block"><?php esc_html_e( 'Pricing', 'hasooleilm-lms' ); ?></a></li>
                    </ul>
                </div>

                <!-- Resources Column -->
                <div class="footer-links">
                    <h3 class="footer-heading text-base md:text-lg font-bold mb-4 tracking-wide"><?php esc_html_e( 'Resources', 'hasooleilm-lms' ); ?></h3>
                    <ul class="footer-menu list-none p-0 m-0 space-y-2.5">
                        <li><a href="<?php echo esc_url( home_url( '/past-papers' ) ); ?>" class="text-white/85 no-underline text-sm md:text-base hover:text-secondary hover:translate-x-1 transition-all inline-block"><?php esc_html_e( 'Past Papers', 'hasooleilm-lms' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/slos' ) ); ?>" class="text-white/85 no-underline text-sm md:text-base hover:text-secondary hover:translate-x-1 transition-all inline-block"><?php esc_html_e( 'SLOs', 'hasooleilm-lms' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/exam-prep' ) ); ?>" class="text-white/85 no-underline text-sm md:text-base hover:text-secondary hover:translate-x-1 transition-all inline-block"><?php esc_html_e( 'Exam Prep', 'hasooleilm-lms' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/date-sheet' ) ); ?>" class="text-white/85 no-underline text-sm md:text-base hover:text-secondary hover:translate-x-1 transition-all inline-block"><?php esc_html_e( 'Date Sheet', 'hasooleilm-lms' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/pacing-guide' ) ); ?>" class="text-white/85 no-underline text-sm md:text-base hover:text-secondary hover:translate-x-1 transition-all inline-block"><?php esc_html_e( 'Pacing Guide', 'hasooleilm-lms' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/resource-guide' ) ); ?>" class="text-white/85 no-underline text-sm md:text-base hover:text-secondary hover:translate-x-1 transition-all inline-block"><?php esc_html_e( 'Resource Guide', 'hasooleilm-lms' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/recommended-books' ) ); ?>" class="text-white/85 no-underline text-sm md:text-base hover:text-secondary hover:translate-x-1 transition-all inline-block"><?php esc_html_e( 'Recommended Books', 'hasooleilm-lms' ); ?></a></li>
                    </ul>
                </div>

                <!-- Contact & Newsletter Column -->
                <div class="footer-contact-newsletter flex flex-col gap-8">
                    
                    <!-- Contact Info -->
                    <div class="footer-contact">
                        <h3 class="footer-heading text-base md:text-lg font-bold mb-4 tracking-wide"><?php esc_html_e( 'Contact', 'hasooleilm-lms' ); ?></h3>
                        <ul class="contact-list list-none p-0 m-0 space-y-3.5">
                            <li class="flex items-start gap-2.5 text-sm md:text-base opacity-90">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" class="shrink-0 mt-0.5 opacity-80">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                                <a href="tel:+923036669242" class="text-white no-underline hover:text-secondary transition-colors">+92 303 6669242</a>
                            </li>
                            <li class="flex items-start gap-2.5 text-sm md:text-base opacity-90">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" class="shrink-0 mt-0.5 opacity-80">
                                    <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                </svg>
                                <a href="mailto:contact@hasooleilm.org" class="text-white no-underline hover:text-secondary transition-colors">contact@hasooleilm.org</a>
                            </li>
                            <li class="flex items-start gap-2.5 text-sm md:text-base opacity-90">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" class="shrink-0 mt-0.5 opacity-80">
                                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <span>Chowk Ibrahim, Darul Rehmat Wasti, Chenab Nagar, Punjab, Pakistan</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Newsletter -->
                    <div class="footer-newsletter mt-8 md:mt-0">
                        <h3 class="footer-heading text-base md:text-lg font-bold mb-4 tracking-wide"><?php esc_html_e( 'Stay Updated', 'hasooleilm-lms' ); ?></h3>
                        <p class="newsletter-description text-xs md:text-sm opacity-85 mb-4 leading-relaxed">
                            <?php esc_html_e( 'New past papers, SLO updates, and date sheet changes — straight to your inbox.', 'hasooleilm-lms' ); ?>
                        </p>
                        <form class="newsletter-form flex gap-2 flex-wrap" action="#" method="post" aria-label="<?php esc_attr_e( 'Newsletter subscription', 'hasooleilm-lms' ); ?>">
                            <label for="newsletter-email" class="sr-only"><?php esc_html_e( 'Your email address', 'hasooleilm-lms' ); ?></label>
                            <input type="email" 
                                   id="newsletter-email"
                                   class="newsletter-input flex-1 min-w-[200px] px-3.5 py-2.5 border-2 border-white/20 rounded-lg bg-white/10 text-white font-sans text-sm md:text-base placeholder:text-white/60 focus:outline-none focus:border-secondary focus:bg-white/15 transition-all" 
                                   placeholder="<?php esc_attr_e( 'Your email', 'hasooleilm-lms' ); ?>" 
                                   required
                                   aria-required="true">
                            <button type="submit" class="newsletter-submit px-5 py-2.5 bg-secondary text-primary-dark border-none rounded-lg font-sans text-sm md:text-base font-semibold cursor-pointer hover:bg-white hover:-translate-y-0.5 transition-all whitespace-nowrap" aria-label="<?php esc_attr_e( 'Subscribe to newsletter', 'hasooleilm-lms' ); ?>">
                                <?php esc_html_e( 'Subscribe', 'hasooleilm-lms' ); ?>
                            </button>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom border-t border-white/15 py-6 bg-primary-dark">
        <div class="max-w-[1200px] mx-auto px-5 lg:px-10">
            <div class="footer-bottom-content flex flex-col md:flex-row gap-4 items-center text-center md:text-left md:justify-between">
                <p class="copyright text-xs md:text-sm opacity-80 m-0">
                    &copy; <?php echo date('Y'); ?> Hasooleilm. 
                    <?php esc_html_e( 'All rights reserved.', 'hasooleilm-lms' ); ?>
                </p>
                <nav class="footer-legal flex gap-6 flex-wrap justify-center md:justify-end" aria-label="<?php esc_attr_e( 'Legal links', 'hasooleilm-lms' ); ?>">
                    <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="text-white/75 no-underline text-xs md:text-sm hover:opacity-100 hover:text-secondary transition-opacity"><?php esc_html_e( 'About Us', 'hasooleilm-lms' ); ?></a>
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="text-white/75 no-underline text-xs md:text-sm hover:opacity-100 hover:text-secondary transition-opacity"><?php esc_html_e( 'Contact Us', 'hasooleilm-lms' ); ?></a>
                    <a href="<?php echo esc_url( home_url( '/privacy' ) ); ?>" class="text-white/75 no-underline text-xs md:text-sm hover:opacity-100 hover:text-secondary transition-opacity"><?php esc_html_e( 'Privacy Policy', 'hasooleilm-lms' ); ?></a>
                    <a href="<?php echo esc_url( home_url( '/terms' ) ); ?>" class="text-white/75 no-underline text-xs md:text-sm hover:opacity-100 hover:text-secondary transition-opacity"><?php esc_html_e( 'Terms of Service', 'hasooleilm-lms' ); ?></a>
                </nav>
            </div>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>