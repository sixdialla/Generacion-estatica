Responsive Brix Theme
---------------

Responsive Brix is a responsive WordPress theme with a bold modern design.


License
---------------

Responsive Brix WordPress Theme, Copyright 2015 wpHoot
Responsive Brix is distributed under the terms of the GNU GPL

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see http://www.gnu.org/copyleft/gpl.html.


Credits
---------------

Responsive Brix WordPress Theme is derived from
  * Underscores WordPress Theme, Copyright 2012 Automattic http://underscores.me/
  * Hybrid Base WordPress Theme v1.0.0, Copyright 2013 - 2014, Justin Tadlock  http://themehybrid.com/
Responsive Brix WordPress Theme is based on Hoot Framework which incorporates code from
  * Hybrid Core Framework v2.0.3, Copyright 2008 - 2014, Justin Tadlock  http://themehybrid.com/
  * Customizer Library v1.3.0, Copyright 2010 - 2014, WP Theming http://wptheming.com
all of the above, like WordPress, are distributed under the terms of the GNU GPL

Responsive Brix WordPress Theme bundles the following third-party resources:

FitVids, Copyright 2013, Chris Coyier - http://css-tricks.com + Dave Rupert - http://daverupert.com
Released under the WTFPL license - http://sam.zoy.org/wtfpl/
Source: http://fitvidsjs.com/

Modernizr, Copyright 2009—2014
Freely distributable under the terms of the MIT license
Source: http://modernizr.com/

lightSlider, Copyright sachi77n@gmail.com
Released under the MIT License
Source: http://sachinchoolur.github.io/lightslider/

Magnific Popup, Copyright 2014 Dmitry Semenov
Released under the MIT License
Source http://dimsemenov.com/plugins/magnific-popup/

Superfish, Copyright Joel Birch
Released under the MIT License
Source: https://github.com/joeldbirch/superfish/

FontAwesome Copyright 2012 Dave Gandy
Licensed under SIL OFL 1.1 <http://scripts.sil.org/OFL> . Code licensed under MIT License
Source: http://fortawesome.github.io/Font-Awesome/


Demo Photos
---------------

This theme screenshot contains the following demo photos.

* 35H sourced from http://www.gratisography.com/pictures/35_1.jpg
  Source: http://www.gratisography.com/
  Licensed under CC0 license from the author.
* 72H sourced from http://www.gratisography.com/pictures/72_1.jpg
  Source: http://www.gratisography.com/
  Licensed under CC0 license from the author.
* 85H sourced from http://www.gratisography.com/pictures/85_1.jpg
  Source: http://www.gratisography.com/
  Licensed under CC0 license from the author.


Change Log
---------------

#### 4.2.2
* # Hoot Framework 2.1.11 #
* Remove 'array_replace_recursive' from edit functions (customizer class) for PHP<5.3 compatibility
* Add 'get_search_query' to search form
* Updated hook names to use hoot prefix
* Multiple data sanitization
* Add 'Content Block (Posts)' widget
* Add custom css option to hoot widgets
* Add minified files for all admin js/css
* Remove global $post mod (for pricetable plugin - wpalchemy)

#### 4.2.1
* # Hoot Framework 2.1.10 #
* Fix: Dont enqueue google font style if no google font selected
* Fix: Use relative path to find upload attachment id from url - fix when images have same name in different folders
* Fix: Wordpress admin bar position for logged in users on mobile
* Fix: Missing strings from .pot file (added functions like esc_html__ etc)

#### 4.2.0
* # Hoot Framework 2.1.9 #
* Dont enqueue google font style if no google font selected
* Read More and Excerpt length do not affect admin style
* Post pagination appears in archive view
* Fixed namespace for 'frontpage_slider' filter
* Updated Font Awesome library

#### 4.1.12
* # Hoot Framework 2.1.8 #
* Add support for new woocommerce product display slider (and zoom)
* Bug Fix: Slider images code for older PHP versions (intval inside empty function)

#### 4.1.11
* # Hoot Framework 2.1.8 #
* Bug Fix: Display slider images (find upload attachment id) when image domain is different (example: cdn)

#### 4.1.10
* # Hoot Framework 2.1.8 #
* Bug Fix: Content block bug fix from previous version

#### 4.1.9
* # Hoot Framework 2.1.8 #
* Sliders - Use attachment id to display images (alt tags shown)
* Content Block - Change query structure to make it polylang compatible

#### 4.1.8
* # Hoot Framework 2.1.7 #
* Woocommerce Fix: Clear floats for related and upsell
* Archive pages - Link images to post

#### 4.1.7
* # Hoot Framework 2.1.7 #
* Add actions to content box widgets
* Woocommerce shop page css fix for first product
* Display Logo action gets logo variable argument

#### 4.1.5
* # Hoot Framework 2.1.7 #
* Fix minified stylesheet for '>'
* Added span class to loop title suffix

#### 4.1.4
* # Hoot Framework 2.1.7 #
* Typography customizer control - css fix for firefox
* Multiple Fixes

#### 4.1.3
* # Hoot Framework 2.1.7 #
* Custom images added at priority 0 instead of 5 ('init' hook) to work with 'Simple Image Sizes' plugin (hooked to 'init' at priority 1 and 2)
* Mobile Menu - Option for dropdown and left slide menu

#### 4.1.2
* # Hoot Framework 2.1.7 #
* Added version number to woocommerce templates (needed for WC compatibility)
* Removed woocommerce_boxcontent compatibility

#### 4.1.1
* # Hoot Framework 2.1.7 #

#### 4.1.0
* # Hoot Framework 2.1.7 #
* Wordpress 4.7 compatible
* Updated framework and customizer skin
* Bugfix: use cache after post reset (after wp_query)
* Added upsell page
* Remove search from topbar (use widget instead)

#### 3.0.4
* # Hoot Framework 2.1.3 #
* Bug Fix: Woocommerce products shortcode display css (columns) was being overridden by theme css
* Bug Fix: Woocommerce shop column fixed

#### 3.0.3
* # Hoot Framework 2.1.3 #
* Several bug fixes and CSS fixes
* [Hoot] Updated Customizer Upload/Image CSS for WPv4.6
* Added CSS classes, hooks
* Moved several class/id attributes to hoot_attr function for child theme compatibility
* WooCommerce options bugfix when no value selected by user

#### 3.0.2
* # Hoot Framework 2.1.2 #
* Added text logo size select option
* Bug Fix: Fixed priorities of customizer options

#### 3.0.1
* # Hoot Framework 2.1.1 #
* Removed deprecated functions and hooks

#### 3.0
* # Hoot Framework 2.1.0 #
* Added various action and filter hooks
* Added multipurpose custom-blogposts template to display blog posts
* Added hoot_attr to several hard coded classes (to allow modification using child themes)
* Added 'Blog Posts' module to Widgetized Template
* Added Jetpack infinite scroll css
* [Hoot] Added Smallselect, Image Upload and Color option type to widgets
* [Hoot] Improved hoot_locate_* functions
* [Hoot] Load main script.js after custom user scripts (loaded at default priority 10)
* [Hoot] Register and enqueue scripts using hoot_get_scripts()
* [Hoot] Automatically load child themes's main script.js if present (similar to style.css)
* [Hoot] Improved Customizer CSS
* [Hoot] Improved Customizer Sortlist custom option type
* [Hoot] Added a unique 'identifier' option to Group custom option type for Customizer
* [Hoot] Added 'sublabel' to most custom option types for Customizer

#### 2.2.8
* # Hoot Framework 2.0.2 #
* Added several filters and action hooks
* Added several classes
* Fix: Load rtl style if current locale is RTL

#### 2.2.6
* # Hoot Framework 2.0.2 #
* Fix: Skype social profile link behavior
* Slider image attributes can be customized using hoot_get_attr()

#### 2.2.4
* # Hoot Framework 2.0.2 #
* Woocommerce Template Tweaks

#### 2.2.3
* # Hoot Framework 2.0.2 #
* Support for WordPress Logo Option
* 'loop_pretitle_singular' filter
* Social Icons Widget context

#### 2.2.2
* # Hoot Framework 2.0.2 #
* Jetpack infinite scroll support
* Localize theme script function hooked to action separately (allows child themes to replace it easily)
* Apply full width classes to Widgetized Template
* Hide title area on static frontpage (not using Widgetized Template)
* Add filter for slider content/settings

#### 2.2.1
* # Hoot Framework 2.0.2 #
* Fix: Woocommerce sidebar hook name
* Added: Filters for default search input text and placeholder
* Added: Several classes and ids, Improved attributes for widgets and plugin support
* Fix: HTML slider dynamic css syntax
* Added: Hooks to modify image and html slider content

#### 2.2
* # Hoot Framework 2.0.2 #
* Added: Before main and after main action hooks
* Fix: Woocommerce loop meta hide function encapsulated
* Fix: Migration was not happening in certain cases
* Fix: Customizer textarea sanitization

#### 2.1
* # Hoot Framework 2.0.1 #
* Fix Template Name Constant value

#### 2.0
* # Hoot Framework 2.0.0 #
* Theme Options replaced with customizer
* Multiple new actions and filters
* Multiple bug fixes and updates

#### 1.8
* # Hoot Framework 1.1.102 #
* Woocommerce compatibility
* Bug Fix - Registered image sizes array (crop/nocrop) was not sorted in increasing width size
* lightSlider Bugfix - Images slide when only one slide available
* lightSlider Bugfix - Remove numbers from pager (shows up in google search results)
* Dynamic CSS bugfix for transparent logo background (from version 1.7)
* Bug Fix - CSS Sanitiaztion for colors and backgrounds
* Add current year tag for copyright text in post footer
* Add filter for image size used in content and hoot_post_thumbnail()

#### 1.7
* # Hoot Framework 1.1.92 #
* Sanitization for css rules created dynamically
* Removed deprecated constructor method for WP_Widget in extended class
* Image Slider - Improved mobile view for captions/description
* Reduce to a single text domain

#### 1.6
* # Hoot Framework 1.1.82 #
* Always show 'Read More' link for excerpt (when excerpt smaller than length)
* Enable 'Excerpts' for pages (to be used in Content Block widget)
* Improved structured data (microformat)
* Bug Fix: Language folder path
* Add filters to hoot_meta_info_blocks
* Content Block Widget improvements (custom link overrides default Read More link of excerpts)

#### 1.5
* # Hoot Framework 1.1.72 #
* Option to remove logo area background color

#### 1.4
* # Hoot Framework 1.1.72 #
* Added support for Jetpack Gallery and Carousel
* Reset Query before page content on Widgetized Template

#### 1.3
* # Hoot Framework 1.1.72 #
* lightSlider Bugfix - Auto play bug when images exist in browser cache (jquery load event)
* lightSlider Added Responsive Option
* Add theme support for Post Thumbnail for all post types
* Logo option for Text and Image

#### 1.2.1
* # Hoot Framework 1.1.72 #
* Add individual slide classes to lightslider slides
* Use WordPress Custom Background for setting up Site Background

#### 1.2
* # Hoot Framework 1.1.7 #
* Add Parent Theme Version constant
* Removed do_shortcode filter for WordPress Text Widget
* Improved Default Site Credits in post footer
* Added Widget sanitization functions

#### 1.1
* # Hoot Framework 1.1.6 #
* Bug Fix: Word wrap for long titles in Custom Text Logo
* Several display fixes
* Improved Sanitization and Escaping
* Support for user configured date format

#### 1.0
* # Hoot Framework 1.1.6 #
* Initial release.