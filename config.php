<?php 
/*
Plugin Name: CSCT Creater
Plugin URI: https://github.com/mduran16/WP-CSPT-Creater
Description: This plugin automatically generates content types for a WordPress blog
Version: .2
Author: Matthew Duran
Author URI: https://github.com/mduran16/
License: GPL2
*/

function cspt_plugin(){
	$tax_options = [
	
	];
	require ('post-types.php');
}


add_action('plugins_loaded', 'cspt_plugin');

?>