<?php

// If this file is called directly, abort
if(!defined('ABSPATH'))  {
	exit;
}

// Create admin tab for the plugin
function spsn_admin_tab() {

    add_menu_page('Share blog post with social network', 'Share blog post with social network', 'manage_options', __FILE__, 'spsn_admin_page');
}

add_action('admin_menu', 'spsn_admin_tab');

// Admin page message
function spsn_admin_page() {
    ob_start(); ?>

    <div class="wrap">
        <h3><strong>This is the admin page for share blog post with facebook friends. This plugin is installed correctly. For additional information, please visit https://rajatpopli.online</h3>
    </div>

    <?php
    echo ob_get_clean();
}


