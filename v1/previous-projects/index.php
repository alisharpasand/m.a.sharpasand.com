<?php

	$include_path = $_SERVER['DOCUMENT_ROOT'] . '/include/';

	require_once $_SERVER['DOCUMENT_ROOT'] . '/include/conf.php';
	$id = @$_GET['project_id'] ? $_GET['project_id'] : 8;
	$db = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD);
	mysqli_select_db($db, $DB_NAME);
	$query = "SELECT `title`, `description`, `keywords` FROM `previous_projects` WHERE `id`=" . $id;
	$result = mysqli_query($db, $query) or die(mysqli_error($db));
	$line = mysqli_fetch_array($result);

	$description = $line["description"];
	$keywords = $line["keywords"];
	$title = $line["title"] . " § Previous Projects";

	require_once	$include_path . 'template/page-start.inc.php';
	require_once	$include_path . 'template/header.inc.php';
	require_once	$include_path . 'template/previous-projects-content.inc.php';
	require_once	$include_path . 'template/copyright.inc.php';
	require_once	$include_path . 'template/page-end.inc.php';

?>
