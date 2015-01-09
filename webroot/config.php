<?php
/**
 * Config-file for Dice. Change settings here to affect installation.
 *
 */

/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
/**
 * Define Dice paths.
 *
 */
define('DICE_INSTALL_PATH', __DIR__ . '/..');
define('DICE_THEME_PATH', DICE_INSTALL_PATH . '/theme/render.php');
 
 
/**
 * Include bootstrapping functions.
 *
 */
include(DICE_INSTALL_PATH . '/src/bootstrap.php');
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();
 
 
/**
 * Create the Dice variable.
 *
 */
$dice = array();
 
/**
 * Theme related settings.
 *
 */
$dice['stylesheets'] = array('css/style.css');

$dice['favicon']    = 'img/favicon.ico';

$dice['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) 2015 RM Rental Movies </span></footer>
EOD;

/**
 * Settings for the database.
 *
 */
#$dice['database']['dsn']            = 'mysql:host=localhost;dbname=mapk14;';
$dice['database']['dsn']            = 'mysql:host=blu-ray.student.bth.se;dbname=mapk14;';
#$dice['database']['username']       = 'root';
#$dice['database']['password']       = 'root';
$dice['database']['username']       = 'mapk14';
$dice['database']['password']       = 'S*h86-Re';
$dice['database']['driver_options'] = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'");

/* menu */
$menu = array(
		'hem'  => array('text'=>'Hem', 'url'=>'hem.php'),
		'nyheter' => array('text'=>'Nyheter', 'url'=>'nyheter.php?showall'),
		'filmer' => array('text'=>'Filmer', 'url'=>'filmer.php'),
		'calendar' => array('text'=>'Månadens film', 'url'=>'calendar.php'),
		'om' => array('text'=>'Om RM', 'url'=>'om.php'),
		'tavling' => array('text'=>'Tävling', 'url'=>'tarning.php'),
		'login' => array('text'=>'Admin', 'url'=>'login.php')
		
);

// Do it and store it all in variables in the Dice container.
$dice['title'] = "RM rental movies";
$dice['header'] = "<span class='sitetitle'>RM RENTAL MOVIES</span>";
$dice['sitelogo'] = '<img src="img/cam.png" alt="6" width="75" height="75">';
$dice['searchbox'] = '<form class="search"  action="filmer.php" method="get"><input id="search_text" name="title" placeholder="Sök filmtitel" type="text"><input id="search_button" value="Sök" type="submit"></form>';


#<form class="search"  action="filmer.php" method="get">
#<input id="search_text" name="title" placeholder="Sök filmtitel" type="text"><input id="search_button" value="Sök" type="submit">
#</form>

$dice['siteslogan'] = 'RM -  har de filmer du vill se';

$dice['menu'] = Navbar::GenerateMenu($menu,"navbar");



/**
 * Settings for JavaScript.
 *
 */
$dice['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';

$dice['modernizr'] = 'js/modernizr.js';
$dice['javascript_include'] = array();

$dice['google_analytics'] = 'UA-55043955-1'; // Set to null to disable google analytics

/**
 * Site wide settings.
 *
 */
$dice['lang']         = 'sv';
$dice['title_append'] = '';