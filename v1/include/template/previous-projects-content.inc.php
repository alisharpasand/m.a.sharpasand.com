	<div id="container">
		<div id="projects-list-wrapper">
			<ul id="projects-list"><?php
				require_once $_SERVER['DOCUMENT_ROOT'] . '/include/conf.php';
				$db = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD);
				mysqli_select_db($db, $DB_NAME);
				$query = "SELECT `id`, `title`, `list_image_top` FROM `previous_projects`";
				$result = mysqli_query($db, $query) or die(mysqli_error($db));
				for($i = 0; $line = mysqli_fetch_array($result); $i++)
				{
			?>
				<li style="background-position: 0 <?php echo -1 * $line['list_image_top']; ?>px;">
					<a href="?project_id=<?php echo $line['id']; ?>"><?php echo $line['title']; ?></a>
				</li><?php
				}
			?>
			</ul>
		</div>
		<div id="projects-scene"><?php
				$query = "SELECT `title`, `summary`, `link`, `banner_image_top` FROM `previous_projects` WHERE `id`=" .$id;
				$result = mysqli_query($db, $query);
				$line = mysqli_fetch_array($result);
			?>
			<h2 id="project-title"><?php echo $line['title']; ?></h2>
			<div id="project-banner" style="background-position: 0 <?php echo -1 * $line['banner_image_top']; ?>px;">&nbsp;</div><?php
				if($line['link']) {
			?>
			<div id="project-link-wrapper">
				<a href="http://hotel-canary.com/"><span class="hidden"><?php echo $line['title']; ?> - </span><?php echo $line['link']; ?></a>
			</div><?php
				}
			?>
			<div id="project-summary"><?php echo $line['summary']; ?></div>
		</div>
		<br />
	</div>
