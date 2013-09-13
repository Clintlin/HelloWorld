<?php

	/*
	 * @package CEDIUM|Cedium
	 * @author 	Clint Lin
	 * @copyright (c) Clint Lin
	 * @link https://xinbr.com/HTML
	 */
	define('BLOG_PATCH', dirname($_SERVER['SCRIPT_FILENAME']).'/');
	
	//require custom classes or functions
	require_once(BLOG_PATCH.'lib/custom.php');
	//requeir all classes
	require_once(BLOG_PATCH.'lib/classes.php');

	//start Cedium blog
	$CEDIUMBlog = new CEDIUMBlog();
	
?>
