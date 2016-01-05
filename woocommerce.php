<?php
/**
 * Displays the page section of the theme.
 *
 */
?>

<?php get_header(); ?>
<div class="container-fluid category">
    <div class="row">


                <div class="top_bar">
                <div class="country pull-left">Country:USA</div>
                <div class="top_menu pull-right">
					<?php
						wp_nav_menu( array(
						'theme_location'  => 'top_bar',
						'menu'            => '', 
						'container'       => '', 
						'container_class' => '', 
						'container_id'    => '',
						'menu_class'      => 'nav nav-pills', 
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
						) );
					?>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="logo">
                <h1 class="text-center">Cotton&Co</h1>
            </div>

            <?php if ( is_active_sidebar( 'menu_cat' ) ) : ?>
                  <?php dynamic_sidebar( 'menu_cat' ); ?>
            <?php endif; ?>

			<?php woocommerce_content(); ?>

	</div>
</div>

<?php get_footer(); ?>