<?php

/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// llamado a funciones en carpeta "inc"
$file_includes = array(
	'/enqueue.php',
	'/extras.php',
);

foreach ($file_includes as $file) {
	$filepath = locate_template('inc' . $file);
	if (!$filepath) {
		trigger_error(sprintf('Error locating /inc%s for inclusion', $file), E_USER_ERROR);
	}
	require_once $filepath;
}
