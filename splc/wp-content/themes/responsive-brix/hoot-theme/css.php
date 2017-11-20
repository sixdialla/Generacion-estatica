<?php
/**
 * Add custom css to frontend.
 *
 * @package hoot
 * @subpackage responsive-brix
 * @since responsive-brix 1.0
 */

// Add action at 5 for adding css rules (premium hooks in at 6-9).
// Child themes can hook in at priority 10.
add_action( 'hoot_dynamic_cssrules', 'hoot_dynamic_cssrules', 5 );

/**
 * Custom CSS built from user theme options
 * For proper sanitization, always use functions from hoot/includes/sanitization.php
 * and hoot/customizer/sanitization.php
 *
 * @since 1.0
 * @access public
 */
function hoot_dynamic_cssrules() {

	/*** Settings Values ***/

	/* Lite Settings */

	$settings = array();
	$settings['grid_width']           = intval( hoot_get_mod( 'site_width', 1260 ) ) . 'px';
	$settings['accent_color']         = hoot_get_mod( 'accent_color' );
	$settings['accent_color_dark']    = hoot_color_increase( $settings['accent_color'], 10, 10 );
	$settings['accent_font']          = hoot_get_mod( 'accent_font' );
	$settings['headings_fontface']    = hoot_get_mod( 'headings_fontface' );
	$settings['site_layout']          = hoot_get_mod( 'site_layout' );
	$settings['box_background_color'] = hoot_get_mod( 'box_background_color' );
	$settings['content_bg_color']     = ( $settings['site_layout'] == 'boxed' ) ?
	                                        $settings['box_background_color'] :
	                                        hoot_get_mod( 'background-color' );
	$settings['logo_background_type'] = hoot_get_mod( 'logo_background_type' );
	$settings['site_title_icon_size'] = hoot_get_mod( 'site_title_icon_size' );
	$settings['site_title_icon']      = hoot_get_mod( 'site_title_icon' );
	$settings['logo_image_width']     = hoot_get_mod( 'logo_image_width' );
	$settings['logo_image_width']     = ( intval( $settings['logo_image_width'] ) ) ?
	                                        intval( $settings['logo_image_width'] ) . 'px' :
	                                        '120px';
	$settings['logo']                 = hoot_get_mod( 'logo' );
	$settings['logo_custom']          = apply_filters( 'hoot_logo_custom_text', hoot_sortlist( hoot_get_mod( 'logo_custom' ) ) );

	extract( apply_filters( 'hoot_custom_css_settings', $settings, 'lite' ) );

	/*** Add Dynamic CSS ***/

	/* Hoot Grid */

	hoot_add_css_rule( array(
						'selector'  => '.grid',
						'property'  => 'max-width',
						'value'     => $grid_width,
						'idtag'     => 'grid_width',
					) );

	/* Base Typography and HTML */

	hoot_add_css_rule( array(
						'selector'  => 'a',
						'property'  => 'color',
						'value'     => $accent_color,
						'idtag'     => 'accent_color',
					) ); // Overridden in premium

	hoot_add_css_rule( array(
						'selector'  => '.accent-typo',
						'property'  => array(
							'background' => array( $accent_color, 'accent_color' ),
							'color'      => array( $accent_font, 'accent_font' ),
							),
					) );

	hoot_add_css_rule( array(
						'selector'  => '.accent-typo a, .accent-typo a:hover, .accent-typo h1, .accent-typo h2, .accent-typo h3, .accent-typo h4, .accent-typo h5, .accent-typo h6, .accent-typo .title',
						'property'  => 'color',
						'value'     => $accent_font,
						'idtag'     => 'accent_font',
					) );

	hoot_add_css_rule( array(
						'selector'  => 'input[type="submit"], #submit, .button',
						'property'  => array(
							'background' => array( $accent_color, 'accent_color' ),
							'color'      => array( $accent_font, 'accent_font' ),
							),
					) );

	hoot_add_css_rule( array(
						'selector'  => 'input[type="submit"]:hover, #submit:hover, .button:hover',
						'property'  => array(
							'background' => array( $accent_color_dark, 'accent_color' ),
							'color'      => array( $accent_font, 'accent_font' ),
							),
					) );

	if ( 'cursive' != $headings_fontface ) { // Override @headingsFontFamily if selected in options
		hoot_add_css_rule( array(
						'selector'  => 'h1, h2, h3, h4, h5, h6, .title, .titlefont',
						'property'  => array(
							'font-family' => array( '"Open Sans", sans-serif' ),
							'font-weight' => array( '300' ),
							'color'       => array( '#000000' ),
							),
					) );
	}

	/* Layout */

	hoot_add_css_rule( array(
						'selector'  => 'body',
						'property'  => 'background',
						'idtag'     => 'background',
					) );

	if ( $site_layout == 'boxed' ) {
		hoot_add_css_rule( array(
						'selector'  => '#page-wrapper',
						'property'  => 'background',
						'value'     => $box_background_color,
						'idtag'     => 'box_background_color',
					) );
	}

	/* Header (Topbar, Header, Main Nav Menu) */
	// Topbar

	hoot_add_css_rule( array(
						'selector'  => '#topbar input',
						'property'  => 'background',
						'value'     => $content_bg_color,
					) );

	/* Header (Topbar, Header, Main Nav Menu) */
	// Header Layout

	if ( $logo_background_type == 'accent' ) {
		hoot_add_css_rule( array(
						'selector'  => '#header:before',
						'property'  => 'background',
						'value'     => $accent_color,
						'idtag'     => 'accent_color',
					) );
	} else {
		hoot_add_css_rule( array(
						'selector'  => '#header:before, #site-logo',
						'property'  => 'background',
						'value'     => 'none',
					) );
		hoot_add_css_rule( array(
						'selector'  => '#header, #branding, #header-aside',
						'property'  => 'background',
						'value'     => 'none',
					) );
		hoot_add_css_rule( array(
						'selector'  => '#site-logo #site-title, #site-logo #site-description',
						'property'  => 'color',
						'value'     => $accent_color,
						'idtag'     => 'accent_color',
					) ); // Overridden in premium
	}

	/* Header (Topbar, Header, Main Nav Menu) */
	// Logo (with icon)

	if ( intval( $site_title_icon_size ) ) {
		hoot_add_css_rule( array(
						'selector'  => '.site-logo-with-icon #site-title i',
						'property'  => 'font-size',
						'value'     => $site_title_icon_size,
						'idtag'     => 'site_title_icon_size',
					) );
	}

	if ( $site_title_icon && intval( $site_title_icon_size ) ) {
		hoot_add_css_rule( array(
						'selector'  => '.site-logo-with-icon #site-title',
						'property'  => 'padding-left',
						'value'     => $site_title_icon_size,
						'idtag'     => 'site_title_icon_size',
					) );
	}

	/* Header (Topbar, Header, Main Nav Menu) */
	// Mixed/Mixedcustom Logo (with image)

	if ( !empty( $logo_image_width ) ) :
	hoot_add_css_rule( array(
						'selector'  => '.site-logo-mixed-image, .site-logo-mixed-image img',
						'property'  => 'max-width',
						'value'     => $logo_image_width,
						'idtag'     => 'logo_image_width',
					) );
	endif;

	/* Header (Topbar, Header, Main Nav Menu) */
	// Custom Logo

	if ( 'custom' == $logo || 'mixedcustom' == $logo ) {
		if ( is_array( $logo_custom ) && !empty( $logo_custom ) ) {
			$lcount = 1;
			foreach ( $logo_custom as $logo_custom_line ) {
				if ( !$logo_custom_line['sortitem_hide'] && !empty( $logo_custom_line['size'] ) ) {
					hoot_add_css_rule( array(
						'selector'  => '#site-logo-custom .site-title-line' . $lcount . ',#site-logo-mixedcustom .site-title-line' . $lcount,
						'property'  => 'font-size',
						'value'     => $logo_custom_line['size'],
						// 'idtag'     => 'logo_custom',
					) );
				}
				$lcount++;
			}
		}
	}

	/* Light Slider */

	hoot_add_css_rule( array(
						'selector'  => '.lSSlideOuter .lSPager.lSpg > li:hover a, .lSSlideOuter .lSPager.lSpg > li.active a',
						'property'  => 'background-color',
						'value'     => $accent_color,
						'idtag'     => 'accent_color',
					) );

	/* Plugins */

	hoot_add_css_rule( array(
						'selector'  => '#infinite-handle span',
						'property'  => array(
							'background' => array( $accent_color, 'accent_color' ),
							'color'      => array( $accent_font, 'accent_font' ),
							),
					) );

}