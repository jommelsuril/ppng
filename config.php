<?php
	define('DB_SERVER', '420server.mysql.database.azure.com');
	define('DB_USERNAME', 'JomSur@420server');
	define('DB_PASSWORD', 'MrDop33098');
	define('DB_NAME', 'crud');
	
	$link = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	if ($link->connect_errno) {
	    printf("Connect failed: %s\n", $link->connect_error);
	exit();
}
