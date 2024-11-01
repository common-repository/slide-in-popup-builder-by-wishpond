<?php
  /*
    Plugin Name: Slide-In Popup Builder by Wishpond
    Plugin URI:  https://wordpress.org/plugins/slide-in-popup-builder/
    Description: Create amazing Welcome Mat Popups from your wordpress site and host them anywhere. Run A/B tests, monitor analytics, improve conversion rates and much more.
    Version:     1.0.2
    Author:      Wishpond
    Author URI:  https://www.wishpond.com/slide-in-popup
    License:     GPL2
    License URI: https://www.gnu.org/licenses/gpl-2.0.html
    Text Domain: slidein-popup
    Domain Path: /lang

    Slide-In Popup Builder is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 2 of the License, or
    any later version.

    Slide-In Popup Builder is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Slide-In Popup Builder. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
  */

  load_plugin_textdomain('slidein-popup', false, dirname(plugin_basename(__FILE__)) . '/lang/');

  $WISHPOND_PLUGIN_FILES = array(
    'constants.php',
    'class-wishpond-campaign.php',
    'class-wishpond-plugin.php',
    'class-wishpond-shortcode.php',
    'class-wishpond-utilities.php'
  );

  foreach($WISHPOND_PLUGIN_FILES as $file) {
    include_once(plugin_dir_path(__FILE__) . $file);
  }

  new WishpondPlugin(
    array(
      'version' => '1.0.2',
      'name' => 'slide_in_popup',
      'slug' => 'slidein-popup',
      'menu' => array(
        'main'      => __('Slide-In Popup', 'slidein-popup'),
        'dashboard' => __('Dashboard', 'slidein-popup'),
        'editor'    => __('New Slide-In Popup', 'slidein-popup'),
        'settings'  => __('Settings', 'slidein-popup')
      )
    )
  );
?>
