<?php

function connect() {
	$host = '127.0.0.1';
	$user = 'root';
	$pass = '';
	$dbname = 'responses';
	$cxn = new mysqli($host, $user, $pass, $dbname) or die($cxn->connect_error);

	return $cxn;
}

?>