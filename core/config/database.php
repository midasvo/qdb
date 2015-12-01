<?php
/*
Script made by:
			Midas van Oene // http://midasvo.nl
*/
?>
<?php


include($_SERVER['DOCUMENT_ROOT']."/core/config/config.php");
/* 
	This file simply establishes a database connection,
	the variables used below can be found in the conf.inc.php file 
	under 'Database information'.
*/
mysql_connect($mysql_host, $mysql_user, $mysql_password);
mysql_select_db($mysql_database);
?>