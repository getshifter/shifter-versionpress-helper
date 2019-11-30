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

$upload_dir = wp_get_upload_dir();
$save_path = $upload_dir['basedir'] . '/versionpress';
define('VP_PROJECT_ROOT', $save_path);