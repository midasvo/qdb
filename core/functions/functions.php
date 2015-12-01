<?php
/*
Script made by:
			Midas van Oene // http://midas.pw
*/
?>
<?php
include($_SERVER['DOCUMENT_ROOT']."/core/config/database.php");
include($_SERVER['DOCUMENT_ROOT']."/core/config/config.php");
/* still missing comments! */
function deconstruct_url() {
	$site_url = return_url();
	$delimiter = ".";
	$split = explode($delimiter, $site_url);
	return $split;
}

function force_field($url)
{
	deconstruct_url();
	$split[0] = $topleveldomain;
	$split[1] = $secondleveldomain;
	echo $topleveldomain;
	return(preg_match("/'$secondleveldomain'\.'$topleveldomain'/i", $url)) ? true : false;
}

function gen_code()
{
	$charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
	return substr(str_shuffle($charset), 0, 6);
	
}

function code_exists($code)
{
	$code = mysql_real_escape_string($code);
	$code_exists = mysql_query("SELECT COUNT(`url_id`) FROM `urls` WHERE `code`='$code' LIMIT 1");
	return (mysql_result($code_exists, 0) == 1) ? true : false;
}

function shorten($url, $code)
{
	$url = mysql_real_escape_string($url);
	$code = mysql_real_escape_string($code);
	mysql_query("INSERT INTO `urls` VALUES('','$url','$code')");
	return $code;

}

function redirect($code)
{
	$code = mysql_real_escape_string($code);
	if(code_exists($code))
	{
		$url_query = mysql_query("SELECT `url` FROM `urls` WHERE `code` ='$code'");
		$url = mysql_result($url_query, 0, 'url');
		header('Location: '.$url);
	}
}

function chars_saved($url) {
	$prev_url = strlen($url);
}

/* counters */
function count_urls() {
	$query = mysql_query("SELECT * FROM countURLS");
	$result = mysql_result($query, 0);
	echo $result;
}


/*getters and setters*/


/* 
	* Gets the url for the website, used for redirection. 
*/
function get_url() {
	$query = mysql_query("SELECT `site_url` FROM `website_config` LIMIT 1");
	$result = mysql_result($query, 0);
	echo $result;
}

function return_url() {
	$query = mysql_query("SELECT `site_url` FROM `website_config` LIMIT 1");
	$result = mysql_result($query, 0);
	return $result;
}

/*
	* Update the URL in the database.
*/
function set_url($param) {
	$update = mysql_query("UPDATE `website_config` SET `site_url`='$param' WHERE 1");
}

/*
	* Gets the document title from the database.
*/

function get_title() {
	$query = mysql_query("SELECT `site_title` FROM `website_config` LIMIT 1");
	$result = mysql_result($query, 0);
	echo $result;
}

/*
	* Update the title in the database.
*/
function set_title($param) {
	$update = mysql_query("UPDATE `website_config` SET `site_title`='$param' WHERE 1");
}

/*
	* Gets the website name from the database.
*/
function get_name() {
	$query = mysql_query("SELECT `site_name` FROM `website_config` LIMIT 1");
	$result = mysql_result($query, 0);
	echo $result;
}

/*
	* Update the name in the database.
*/
function set_name($param) {
	$update = mysql_query("UPDATE `website_config` SET `site_name`='$param' WHERE 1");
}

/*
	* Gets the website slogan from the database.
*/
function get_slogan() {
	$query = mysql_query("SELECT `site_slogan` FROM `website_config` LIMIT 1");
	$result = mysql_result($query, 0);
	echo $result;
}

/*
	* Update the slogan in the database.
*/
function set_slogan($param) {
	$update = mysql_query("UPDATE `website_config` SET `site_slogan`='$param' WHERE 1");
}

/*
	* Gets the website footer from the database.
*/
function get_footer() {
	$query = mysql_query("SELECT `site_footer` FROM `website_config` LIMIT 1");
	$result = mysql_result($query, 0);
	echo $result;
}

/*
	* Update the slogan in the database.
*/
function set_footer($param) {
	$update = mysql_query("UPDATE `website_config` SET `site_footer`='$param' WHERE 1");
}

?>