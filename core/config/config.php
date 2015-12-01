<?php
/*
Script made by:
			Midas van Oene // http://midas.pw
/* config available through yourdomain.tld/admin */

/* Important website information, needed for the website to function */ 
$stylesheet_loc	 = "style/stylesheet.css"; // Where your stylesheet is located. For example: "style/stylesheet.css" or "stylesheet.css".


/*Error & success messages*/
$error_no_url 		= "In order to become short one must be something."; 		// The error displayed when there is no url specified
$error_invalid_url 	= "The inputted URL was invalid!"; 		// The error displayed when the url is invalid
$error_url_exists 	= "Wait, What? This is already short!"; 	// The error displayed when the url corresponds to your own url, thus double
$message_succes 	= "Your URL has now been shortened."; // Message to be displayed when succesfully completed the shortening.

/*Database information*/
$mysql_host 	= "localhost";  // Hostname, usually "localhost", if not contact your webhost. 
$mysql_database = "REQUIRED"; 	    // The name of your database. 
$mysql_user 	= "REQUIRED"; 	    // Username which has access to the database. When on localhost it is usually "root" 
$mysql_password = "REQUIRED"; 	    // Password of user. 
?>