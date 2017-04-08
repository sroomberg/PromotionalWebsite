<?php

function connect() {
	$host = '127.0.0.1';
	$user = 'root';
	$pass = '';
	$dbname = 'responses';
	$cxn = new mysqli($host, $user, $pass, $dbname) or die($cxn->connect_error);

	$cxn->query("CREATE TABLE IF NOT EXISTS responses (ID INT(11) NOT NULL AUTO_INCREMENT, 
					cf_name TEXT, cf_email TEXT, cf_subject TEXT, cf_msg TEXT);");
	
	return $cxn;
}

?>