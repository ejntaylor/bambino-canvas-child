<?php

/*
 * functions.php
 * 
 */


// get current theme version

	$bambino_currentheme = wp_get_theme();
	define('BAMBINO_VERSION_NUM', $bambino_currentheme->get( 'Version' ));
	define('BAMBINO_INSTALLED', true);

// check bamboo installed

if (!defined('BAMBOO_VERSION_NUM')) {add_action( 'admin_notices', 'bamboo_install_notice' );}

function bamboo_install_notice(){
          echo '<div class="error"><p>Warning - Bamboo is not installed. This Bambino theme requires Bamboo to work correctly. <strong><a target="_blank" href="http://raison.co/bamboo">Click Here to Get Bamboo</a></strong></p></div>';
}
	

// load child functions

require_once('includes/functions/hooks.php');
require_once('includes/functions/scripts.php');
require_once('includes/functions/widgets.php');
require_once('includes/functions/misc.php');

if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    require_once('includes/functions/woocommerce.php');

}





?>