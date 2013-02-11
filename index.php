<?php

	$include_path = $_SERVER['DOCUMENT_ROOT'] . '/include/';
	$home = true;
	
	require_once	$include_path . 'template/page-start.inc.php';
	require_once	$include_path . 'template/home-content.inc.php';
	require_once	$include_path . 'template/page-end.inc.php';

?>