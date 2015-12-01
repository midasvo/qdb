

<?php
	include($_SERVER['DOCUMENT_ROOT']."/core/functions/functions.php");
	
		$site_title = $_POST['site_title'];
		$site_name = $_POST['site_name'];
		$site_slogan = $_POST['site_slogan'];
		$site_footer = $_POST['site_footer'];
		$site_url = $_POST['site_url'];

	if(isset($site_title)) {
		set_title($site_title);
	}
	if(isset($site_name)) {
		set_name($site_name);
	}	
	if(isset($site_slogan)) {
		set_slogan($site_slogan);
	}	
	if(isset($site_footer)) {
		set_footer($site_footer);
	}
	if(isset($site_url)) {
		set_url($site_url);
	}
	
?>

<!doctype html>
<html lang="en-US">
<head>
<meta charset-utf-8>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

	<title>qdb.tld | Administration Panel</title>
</head>

<?php

	
?>


<body>
	<div id="main"> <!-- start #main -->
	
		<div id="header"> <!-- start #header -->
			<h2>Administration panel!</h2>
		</div>
		<div id="content">
			<form action="" method="post">
			<p>Your website title, displayed in the tab in your browser.</p>
			   <p><input type="text" name="site_title" value="<?php get_title(); ?>"/></p>
			<p>Your website name, displayed in the h1 tags on the main page.</p>
			   <p><input type="text" name="site_name" value="<?php get_name(); ?>"/></p>
			<p>Your website slogan, displayed in the footer of your website; also links to the readme file.</p>
			   <p><input type="text" name="site_slogan" value="<?php get_slogan(); ?>" /></p>
			<p>Your website footer, displayed in the footer of your website; not yet implemented.</p>
			   <p><input type="text" name="site_footer" value="<?php get_footer(); ?>" /></p>
			<p>Your website url, this is the url that gets used for redirection purposes. eg. qdb.pw/</p>
				<p><input type="text" name="site_url" value="<?php get_url(); ?>" /></p>
			   <input type="submit" name="submit" value="Save changes to the database" />
			</form>
		</div>
		<div id="footer"> <!-- start #content -->
		
			<div>
				<h5><a href="http://midasvo.nl">
				Midasvo.nl</a></h5>
			</div>
		
		</div>
	
	</div>
	<script type="text/javascript"></script>
</body>