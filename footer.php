<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package School_Theme
 */

?>

	<footer id="colophon" class="site-footer">
	<?php
if (has_nav_menu('footer-menu')) :
    wp_nav_menu(
        array(
            'theme_location' => 'footer-menu',
            'menu_class'     => 'footer-menu',
            'container'      => 'nav',
            'container_class'=> 'footer-menu-container',
        )
    );
endif;

?>
<div class="footer-logo">
    <?php
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo_image = wp_get_attachment_image_src($custom_logo_id, 'full');
    if ($logo_image) :
        ?>
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo esc_url($logo_image[0]); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
        </a>
    <?php endif; ?>
</div>


		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'school-theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'school-theme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'school-theme' ), 'school-theme', '<a href="https://sobiono.com/school-demo/">RJ Sobiono, Latisha Basran, Muhammad Abbas</a>' );
				?>
		</div><!-- .site-info -->
		
	</footer><!-- #colophon -->
</div><!-- #page -->



<?php wp_footer(); ?>

</body>
</html>
