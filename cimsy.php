<?php

// configure

$default_page_title  = "Document Repository";
$content_folder_name = "files";
$home_page_content   = "index.md";

// /////////////////////////////////////////////////////////////////// //

// initialize

require_once('markdown.php');

// page display

if (!isset($_GET['id'])) {
	$shortened_id = $default_page_title;
	$contents = file_get_contents($content_folder_name . '/' . $home_page_content);
} else {
	$shortened_id = htmlspecialchars($_GET['id']);
	$shortened_id = str_ireplace("/", "|", $shortened_id);
	$contents = @file_get_contents($content_folder_name . '/' . $shortened_id . '.md');
}

if (!$contents) {
	$shortened_id = "Not Found";
	$contents = "#Not Found
	
Sorry, but we couldn't find what you're looking for.";
}

$GLOBALS['title'] = $shortened_id;
$GLOBALS['contents'] = $contents;

// utility functions

function get_title () {
	$string = $GLOBALS['title'];
	$output = str_ireplace("|", ": ", $string);
	$output = str_ireplace("-", " ", $output);
	$output = str_ireplace("_", " ", $output);
	return (ucwords($output));
}

function get_content() {
	echo Markdown($GLOBALS['contents']);
}

?>