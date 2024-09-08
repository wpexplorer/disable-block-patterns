<?php
/**
 * Plugin Name:       Disable Block Patterns
 * Plugin URI:        https://github.com/wpexplorer/disable-block-patterns
 * Description:       Disables all block patterns.
 * Version:           1.0
 * Requires at least: 6.6
 * Requires PHP:      8.0
 * Author:            WPExplorer
 * Author URI:        https://www.wpexplorer.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       disable-block-patterns
 */

/*
Disable Block Patterns is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Disable Block Patterns is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Disable Block Patterns. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

/**
 * Prevent direct access to this file.
 */
defined( 'ABSPATH' ) || exit;

/**
 * Remove Core Patterns.
 */
add_action( 'after_setup_theme', function() {
    remove_theme_support( 'core-block-patterns' );
} );

/**
 * Remove Remote Patterns.
 */
add_filter( 'should_load_remote_block_patterns', '__return_false' );
