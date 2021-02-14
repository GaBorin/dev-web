<?php
	$link = new mysqli_connect('localhost', '242517', process.env.BD_PASSWORD, '242517');
	if (!$link) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}

	echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
	echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
	
	if (isset($_POST['register'])){
		$username = mysql_real_escape_string($_POST['username']);
	}

	mysqli_close($link);
?>