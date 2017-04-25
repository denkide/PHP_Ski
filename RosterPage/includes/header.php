<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <title><?php echo $page_title; ?></title>
	
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    
    <!-- some custom CSS -->
    <link rel="stylesheet" href="style/style.css">
 
    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
     
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	
</head>
<body>

    <!-- container -->
    <div class="container">
    
    <div class='row clearfix'>
    
    <div class='col-md-12'>
   <!-- <div class='col-xs-12 col-sm-12 col-md-10 col-lg-8  column col-sm-offset-0 col-md-offset-1 col-lg-offset-2'> -->
	
		<?php
		// show page header
		echo "<div class='page-header'>";
			echo "<h1>{$page_title}</h1>";
		echo "</div>";
		?>