<?php
	// Create connection
	$link = new MySQLi('us-cdbr-east-03.cleardb.com', 'bab2e37d9ae451', '695f7765');

	// Check connection
	if (!$link) {
	 die('Connection failed: ' . mysqli_connect_error());
	}
	echo '<h5 class="bd-form"> Connected successfully </h5>';
?>