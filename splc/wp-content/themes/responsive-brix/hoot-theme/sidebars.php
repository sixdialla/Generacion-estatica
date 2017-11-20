<?php
/**
 * Register sidebar widget areas for the theme
 * This file is loaded via the 'after_setup_theme' hook at priority '10'
 *
 * Dynamic widget areas (like template areas, footers) are handled by the framework. To override them,
 * remove actions 'hoot_footer_register_sidebars' and 'hoot_widgetized_template_register_sidebars' from
 * 'widgets_init' hook, and add custom sidebars here using 'hoot_register_sidebar'.
 *
 * @package hoot
 * @subpackage responsive-brix
 * @since responsive-brix 1.0
 */

/* Register sidebars. */
add_action( 'widgets_init', 'hoot_base_register_sidebars', 5 );
add_action( 'widgets_init', 'hoot_widgetized_template_register_sidebars' );

/**
 * Registers sidebars.
 *
 * @since 1.0
 * @access public
 * @return void
 */
function hoot_base_register_sidebars() {

	// Primary Sidebar
	hoot_register_sidebar(
		array(
			'id'          => 'primary-sidebar',
			'name'        => _x( 'Primary Sidebar', 'sidebar', 'responsive-brix' ),
			'description' => __( 'The main sidebar throughout the site.', 'responsive-brix' )
		)
	);

	// Topbar Left Widget Area
	hoot_register_sidebar(
		array(
			'id'          => 'topbar-left',
			'name'        => _x( 'Topbar Left', 'sidebar', 'responsive-brix' ),
			'description' => __( 'Leave empty if you dont want to show topbar.', 'responsive-brix' )
		)
	);

	// Topbar Right Widget Area
	hoot_register_sidebar(
		array(
			'id'          => 'topbar-right',
			'name'        => _x( 'Topbar Right', 'sidebar', 'responsive-brix' ),
			'description' => __( 'Leave empty if you dont want to show topbar.', 'responsive-brix' )
		)
	);

	// Subfooter Widget Area
	hoot_register_sidebar(
		array(
			'id'          => 'sub-footer',
			'name'        => _x( 'Sub Footer', 'sidebar', 'responsive-brix' ),
			'description' => __( 'Leave empty if you dont want to show subfooter.', 'responsive-brix' )
		)
	);

	// Footer Columns
	$footercols = hoot_get_footer_columns();

	if( $footercols ) :
		$alphas = range('a', 'z');
		for ( $i=0; $i < $footercols; $i++ ) :
			if ( isset( $alphas[ $i ] ) ) :
				hoot_register_sidebar(
					array(
						'id'          => 'footer-' . $alphas[ $i ],
						'name'        => sprintf( _x( 'Footer %s', 'sidebar', 'responsive-brix' ), strtoupper( $alphas[ $i ] ) ),
						'description' => __( 'You can set footer columns in Theme Options page.', 'responsive-brix' )
					)
				);
			endif;
		endfor;
	endif;

}

/**
 * Registers widgetized template widget areas.
 *
 * @since 1.0
 * @access public
 * @return void
 */
function hoot_widgetized_template_register_sidebars() {

	if ( current_theme_supports( 'hoot-widgetized-template' ) ) :
		$areas = array();

		/* Set up defaults */
		$defaults = apply_filters( 'hoot_widgetized_template_widget_areas', array( 'a', 'b', 'c', 'd', 'e' ) );
		$locations = array(
			__( 'Left', 'responsive-brix' ),
			__( 'Center Left', 'responsive-brix' ),
			__( 'Center', 'responsive-brix' ),
			__( 'Center Right', 'responsive-brix' ),
			__( 'Right', 'responsive-brix' ),
		);

		// Get user settings
		$sections = hoot_sortlist( hoot_get_mod( 'widgetized_template_sections' ) );

		foreach ( $defaults as $key ) {
			$id = "area_{$key}";
			if ( empty( $sections[$id]['sortitem_hide'] ) ) {

				$columns = ( isset( $sections[$id]['columns'] ) ) ? $sections[$id]['columns'] : '';
				$count = count( explode( '-', $columns ) ); // empty $columns still returns array of length 1
				$location = '';

				for ( $c = 1; $c <= $count ; $c++ ) {
					switch ( $count ) {
						case 2: $location = ($c == 1) ? $locations[0] : $locations[4];
								break;
						case 3: $location = ($c == 1) ? $locations[0] : (
									($c == 2) ? $locations[2] : $locations[4]
								);
								break;
						case 4: $location = ($c == 1) ? $locations[0] : (
									($c == 2) ? $locations[1] : (
										($c == 3) ? $locations[3] : $locations[4]
									)
								);
					}
					$areas[ $id . '_' . $c ] = sprintf( __('Widgetized Template - Area %s %s', 'responsive-brix'), strtoupper( $key ), $location );
				}

			}
		}

		foreach ( $areas as $key => $name ) {
			hoot_register_sidebar(
				array(
					'id'          => 'widgetized-template-' . $key,
					'name'        => $name,
					'description' => __( "You can order Widgetized Template areas in Customizer > 'Content' panel > 'Widgetized Template - Modules' section.", 'responsive-brix' )
				)
			);
		}

	endif;

}