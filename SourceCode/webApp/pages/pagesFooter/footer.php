<!-- generating a current time to show up on the bottom of the page -->
<div class="d-flex align-items-end flex-column fixed-bottom p-2">
	<?php
	date_default_timezone_set("Europe/Berlin");
	$timestamp = time();

	$datum = date("d.m.Y", $timestamp);
	$time = date("H:i", $timestamp);
	echo $datum, " - ", $time, " Uhr";
	?>
</div>