<?php	// connect_database.php defines constants, which are used to access Database 
define('HOST','localhost'); // MySQL Database Server name or its IP address 
define('USER','root'); // MySQL Database user Id 
define('PASSWORD',''); // MySQL user Password 
define('DATABASE','ticket_booking_db'); // Database name 
$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE) or die('Database connection failed : '.mysqli_error());