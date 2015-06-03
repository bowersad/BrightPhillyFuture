<?php 
 /*
 * Load Footer Menu Navigation Links
 */ 
?>
<?php
	if (has_nav_menu('footer_menu')) {
		if ( of_get_option('footer_menu') == 'true') { ?>  
		<nav>
			<?php wp_nav_menu( array(
				'container'       => 'ul',
				'depth'           => 0,
				'theme_location' => 'footer_menu' 
				)); 
			?>
		</nav>
	<?php }
	}
?>