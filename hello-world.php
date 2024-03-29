<?php

/**
 *
 * @package hello-world
 *
 * Plugin Name: Hello World
 * Plugin URI: http://pradipchaudhary.com.np/
 * Description: A plugin to greet the visitors or just another test plugin to be honest.
 * Version: 1.0.0
 * Author: Pradip Chaudhary
 * Author URI: http://pradipchaudhary.com.np/
 * License: GPLv2 or later
 * Text Domain: hello-world
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * 
 */

if(!defined('ABSPATH')) {
	die; // Die if accessed directly.
}


/**
 * HelloWorld_Plugin Class
 *
 * @class HelloWorld_Plugin
 */

class HelloWorld_Plugin {

	/*
	 * Consructors are magical functions
	 * They are executed when you instantiate a object.
	 * It initializes our object.
	 * Call your function inside Consrtuctor to execute immediately.
	 * Use $this for the reference of an object
	 */

	function __construct() {
		// executes our congratulations function.
		$this->congratulations();
	}

	// Congratulations function

	function congratulations() {

		echo "Congratulations, Hello World Plugin !";

	}

}


// check if our class exists
if(class_exists('HelloWorld_Plugin')) {
	// instantiate the class.
	$hellWorld_plugin = new HelloWorld_Plugin();
}