<?php 
/**
 * Plugin Name: My Block
 * Plugin URI: https://alexsite.xyz/
 * Description: Gutenberg Block
 * Author: Alex-dqw
 * Author URI: https://www.weblancer.net/users/alexyablokov/
 */

function alexdqw_myblock_init() {
    register_block_type_from_metadata(__DIR__);
}
add_action('init', 'alexdqw_myblock_init');
