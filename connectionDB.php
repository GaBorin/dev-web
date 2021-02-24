<?php
	// Create connection
	$link = new MySQLi('localhost', 'borin.eu5.org', '7LFv9hbgWz_FYjh', '242517');

	// Check connection
	if (!$link) {
	 die('Connection failed: ' . mysqli_connect_error());
	}
	echo '<h5 class="bd-form"> Connected successfully </h5>';
?>