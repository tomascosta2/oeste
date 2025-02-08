<?php
/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

	<footer class="tcp-footer">
		<div class="md:px-4 xl:px-0">
			<div class="tcp-footer__wrapper">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div>
		</div>
	</footer>

	<?php
endif;
