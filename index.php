<?php
// first comment
// second comment
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 
 First change
 
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );

// this is comming from 21july02 branch
// Trying to merge the changes with master. Adding one more line here to check conflict

// footer changed
// This line is added from master branch
