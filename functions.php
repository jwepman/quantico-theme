<?php
add_action( 'init', 'myOnInit' );
function myOnInit() {
	add_theme_support( 'automatic-feed-links' );
	register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}

function quantico_empty_menu() {
	echo "";
}
?>
