<?php

/**
 *
 * @link    https://www.getshifter.io
 * @since   0.1.0
 * @package Shifter VersionPress Helper
 *
 * @wordpress-plugin
 * Plugin Name:       Shifter VersionPress Helper
 * Plugin URI:        https://github.com/getshifter/shifter-versionpress-helper
 * Description:       Helper tool for using VersionPress on Shifter.
 * Version:           0.1.0
 * Author:            DigitalCube
 * Author URI:        https://www.getshifter.io
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       shifter-versionpress-helper
 * Domain Path:       /languages
 */


/**
 * Shifter VersionPress Settings
 */
function shifter_versionpress_helper() {

  /**
   * VersionPress Project Root
   * @link  https://docs.versionpress.net/en/getting-started/configuration/#vp_project_root
   * @since 4.0-beta2
   */
  if (class_exists('\VersionPress')) {
    $upload_dir = wp_get_upload_dir();
    $save_path = $upload_dir['basedir'] . '/versionpress';
    define('VP_PROJECT_ROOT', $save_path);
  }
  
}

add_action('init', 'shifter_versionpress_helper');
