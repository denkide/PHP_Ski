<?php if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) exit('No direct access allowed.');


include('classes.inc.php');

/**
    * This is the default exception handler
    * @param Exception $e  the uncaught exception
    
   function exceptionHandler($e)
   {
    showError("Sorry, the site is under maintenance\n" . $e->getMessage());
}
   // Set the global excpetion handler
   set_exception_handler('exceptionHandler');


/**
* This function will render the header on every page,
* including the opening html tag,
* the head section and the opening body tag.
* It should be called before any output of the
* page itself.


* @param string $title the page title
*/
function showHeader($title)
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=htmlspecialchars($title)?></title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<div class="wrap">
<?php
}


/**
* This function will 'close' the body and html
* tags opened by the showHeader() function
*/
function showFooter()
{
?>
	</div>
	
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		
		<script src="js/vendor/modernizr-2.6.2.min.js"></script>
		<script src="js/jquery-1.9.1.js"></script>
		<script src="js/jquery-ui-1.10.3.custom.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>
	
	</body>
</html>
<?php
}
// Create the connection object
$conn = new PDO($connStr, $user, $pass);