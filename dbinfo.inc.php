<?php

$db_server = 'uvprotect-db-instance.cqefixtrri2e.ap-southeast-2.rds.amazonaws.com';
$db_username= 'admin';
$db_password = 'uvprotectme_123';
$db_database = 'location';

/* Connect to MySQL and select the database. */
$conn = mysqli_connect($db_server, $db_username, $db_password, $db_database);


?>