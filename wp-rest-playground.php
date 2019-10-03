<?php
/**
 * Plugin Name:     WP Rest Playground
 * Plugin URI:      https://jboulhous.github.io/wp-rest-playground
 * Description:     A Playground for REST API and Backbone.js Client library.
 * Author:          Jamal Boulhous
 * Author URI:      https://jboulhous.github.io/
 * Text Domain:     wp-rest-playground
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         WP_Rest_Playground
 */


class WP_Rest_Playground_Plugin {
    public $slug = 'wp-rest-playground';
    public $title = 'WP REST Playground';

    public function __construct()
    {
        // $this->slug = 'wp-rest-playground';
        add_action('admin_menu', [$this, 'setup_menu']);
    }

    public function setup_menu()
    {
        add_management_page( 'WP REST Playground', 'WP REST Playground', 'manage_options', 'wp-rest-playground', [$this, 'admin_page'] );
    }

    public function admin_page()
    {
        echo "<h1>" . $this->title ."</h1>";
        echo "<p>" . __('This a playground for WP REST API. Open the developer tools to play around.', 'wp-rest-playground') . "</p>";
        
        wp_enqueue_script( 'wp-api' );
    }
}

new WP_Rest_Playground_Plugin();


 