<?php if ( has_nav_menu( 'footer' ) ) {

	wp_nav_menu(
		array(
			'theme_location'  => 'footer',
			'container'       => 'nav',
			'container_id'    => 'menu-footer',
			'container_class' => 'menu-footer',
			'menu_id'         => 'menu-footer-items',
			'menu_class'      => 'menu-footer-items',
			'depth'           => 1,
			'link_before'     => '<span class="screen-reader-text">',
			'link_after'      => '</span>',
			'fallback_cb'     => '',
		)
	);

} ?>