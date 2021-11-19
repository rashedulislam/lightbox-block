<?php
/**
 * Plugin Name:       Lightbox Block
 * Description:       Example block written with ESNext standard and JSX support – build step required.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Md Rashedul Islam
 * Author URI:        https://profiles.wordpress.org/rashedul007/
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       lightbox-block
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/how-to-guides/block-tutorial/writing-your-first-block-type/
 */
function stacklearners_lightbox_block_block_init() {
	register_block_type( __DIR__ );
}
add_action( 'init', 'stacklearners_lightbox_block_block_init' );
