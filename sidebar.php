<?php
/**
 * The sidebar template for Hasooleilm LMS
 * 
 * @package Hasooleilm_LMS
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    return;
}
?>

<aside class="bg-gray-50 border border-gray-200 rounded-xl p-6" role="complementary" aria-label="<?php esc_attr_e( 'Sidebar', 'hasooleilm-lms' ); ?>">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
