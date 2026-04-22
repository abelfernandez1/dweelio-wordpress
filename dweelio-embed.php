<?php
/**
 * Plugin Name: Dweelio Embed
 * Description: A simple plugin to embed Dweelio content using a Gutenberg block.
 * Version: 1.0.0
 * Author: Dweelio
 * Author URI: https://dweelio.com
 * Text Domain: dweelio-embed
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register the block and its assets.
 */
function dweelio_embed_register_block()
{
    // Register the block using the metadata loaded from the block.json file.
    register_block_type(__DIR__ . '/block.json', array(
        'render_callback' => 'dweelio_embed_render_callback'
    ));
}

add_action('init', 'dweelio_embed_register_block');

/**
 * Server-side rendering for the Dweelio embed block.
 *
 * @param array $attributes The block attributes.
 * @return string The block HTML.
 */
function dweelio_embed_render_callback($attributes)
{
    if (empty($attributes['uuid'])) {
        return 'Please enter a UUID in the block settings.';
    }

    // Return the iframe HTML with the specified format, using the UUID from the block.
    return '<div class="dweelio-embed-container"><iframe src="https://api.dweelio.com/iframe/'
        . esc_attr($attributes['uuid'])
        . '" sandbox="allow-scripts allow-forms allow-same-origin allow-top-navigation" height="540px" width="400px"></iframe></div>';
}

/**
 * Register the admin menu for Dweelio.
 */
function dweelio_register_admin_menu()
{
    add_menu_page(
        'Dweelio',                 // Page title
        'Dweelio',                 // Menu title
        'manage_options',          // Capability required
        'dweelio',                 // Menu slug
        'dweelio_admin_page',      // Function to display the page
        'dashicons-admin-generic', // Icon (you can change this)
        30                         // Position in menu
    );

    add_submenu_page(
        'dweelio',                 // Parent slug
        'Dweelio Configuration',   // Page title
        'Configuration',           // Menu title
        'manage_options',          // Capability required
        'dweelio',                 // Menu slug (same as parent to make it the default)
        'dweelio_admin_page'       // Function to display the page
    );
}

add_action('admin_menu', 'dweelio_register_admin_menu');

/**
 * Display the Dweelio admin page.
 */
function dweelio_admin_page()
{
    ?>
    <div class="wrap">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
        <div class="card">
            <h2>Dweelio Configuration</h2>
            <p>Welcome to the Dweelio plugin configuration page. More settings will be available in future updates.</p>
        </div>
    </div>
    <?php
}
