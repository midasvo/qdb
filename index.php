<?php
include($_SERVER['DOCUMENT_ROOT']."/core/functions/functions.php");
include($_SERVER['DOCUMENT_ROOT']."/core/config/config.php");
if(isset($_GET['code']) && !empty($_GET['code']))
{
	$code =  $_GET['code'];
	redirect($code);
	die();
} else {
	// show index
}

?>
<!DOCTYPE html>
<head>
<title><?php get_title(); ?></title>
<link href="<?php echo $stylesheet_loc ?>" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Finger+Paint' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Diplomata+SC' rel='stylesheet' type='text/css'>
<link href="/style/img/favicon.ico" rel="icon" type="image/x-icon" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js" /></script>
<script type="text/javascript">
	
	$(document).ready(function()
	{
		$('#url').focus();
	
	}
	
	);
	
	function go(url)
	{
		$.post('url.php', { url:url }, function(data)
		{
			if(data=='error_no_url')
			{
				$('#message') .html('<p><?php echo $error_no_url ?></p>');
			} else
			if(data=='error_invalid_url')
			{
				$('#message') .html('<p><?php echo $error_invalid_url ?></p>');
			} else
			if(data=='error_url_exists')
			{
				$('#message') .html('<p><?php echo $error_url_exists ?></p>');
			} else
			{
				$('#url') .val(data);
				$('#url') .select();
				$('#message') .html('<p><?php echo $message_succes ?></p>');
			}
		
		}
		
		);
	
	}
</script>
</head>

<body>


<header>
	<h1><a href=""><?php get_name(); ?></a></h1>
</header>


	<div id="message"><p>Enter a long url and hit shorten!</p></div>
	
<section>
	<div id="upload_form">
		<p>
			<input type="text" name="url" id="url" size="40" onkeydown="if (event.KeyCode == 13 || event.which == 13) { go($('#url').val()); }">
			<input type="button" value="Shorten" onclick="go($('#url').val());" />
		</p>
	</div>
	
	<footer>
		<p><a href="readme"><?php get_slogan(); ?></a></p>
			<p>There were <?php count_urls(); ?> people before you who had their url's drastically shortened... Share the love!</p>

	</footer>
</section>