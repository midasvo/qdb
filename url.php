<?php

include($_SERVER['DOCUMENT_ROOT']."/core/functions/functions.php");
include($_SERVER['DOCUMENT_ROOT']."/core/config/config.php");


if (isset($_POST['url']))
{
	$url = trim($_POST['url']);
	if(empty($url))
	{
		echo 'error_no_url';
	} else 
	if(filter_var($url, FILTER_VALIDATE_URL) == false)
	{
		echo 'error_invalid_url';
	} else 
	if(force_field($url))
	{
		echo 'error_url_exists';
	} else
	{
		while(!code_exists($code = gen_code()))
		{
			$own_url = get_url();
			$http = 'http://';
			/*CONSTRUCT URL*/
			$short = $own_url.shorten($url, $code);
			echo $short;
			break 1;
		}
		
		
	}

}

?>