<?php 
/**
 * Plugin Name: Dynamic Posts
 * Plugin URI: https://alexsite.xyz/
 * Description: Gutenberg Dynamic Block
 * Author: Alex-dqw
 * Author URI: https://www.weblancer.net/users/alexyablokov/
 */

function alexdqw_dynamicblock_init() {
    register_block_type_from_metadata(__DIR__);
}
add_action('init', 'alexdqw_dynamicblock_init');
