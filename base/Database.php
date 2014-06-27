<?php defined('APP') OR exit('No direct script access allowed');
/**
 * ************************************
 *  @author : Yudi Purwanto
 *  @link   : http://yudi-purwanto.com
 *  @since  : 14 May 2014
 *  File    : Database.php
 *  @Database Params
 *  @Configurations
 * 
 **************************************/
$config = Config::conn();
$config->set('dbhost', 'localhost');
$config->set('dbname', ''); //<-- database name
$config->set('dbuser', 'root'); //<-- username
$config->set('dbpass', ''); //<-- passwors
$config->set('dbchar', 'utf8');

 /* Date Default*/
date_default_timezone_set('Asia/Jakarta');
$config->set( 'time', date( 'd-m-Y G:i:s', time() ) );

/* Default Controller NOT MODIFIED */
define('default_controller', 'index');

define('site', 'Ultra Framework' );    	  // Your site name
define('description', 'Your site description' );  // Your site name description
define('keywords', 'Your site keyword' );     // Your site name keyword

/* site name path */
define('url', 'http://localhost/ultra/'); // IMPORTANT: place a backslash at the end

/* End of file Database.php */
/* Location: ./base/Database.php */
