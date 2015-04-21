<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'tasks');
if ($mysqli->connect_error) {
	die('Connect Error(' . $mysqli->connecterrno .')'
		. $mysqli->connect_error);
}
else {
	echo "Connection";
}
$mysqli->close();
?>