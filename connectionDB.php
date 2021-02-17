<?php
	$link = new MySQLi('localhost', 242517, process.env.BD_PASSWORD, 242517);
	if (!$link) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	} else{
		echo '<h6 class="bd-form"> Success: A proper connection to MySQL was made! The my_db database is great.' . PHP_EOL . '</h6>';
	}
	//mysqli_close($link);
?>