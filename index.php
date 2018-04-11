<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Figma To HTML</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="main.css">
  </head>
<body>
	<ul class="topnav">
		<li class="right"><img src="includes/logo.png"></li>
		<li class="right"><a href = "#"> Home</a></li>
		<li class="right"> <a href="#"> Overview</a></li>
		<li class="right"> <a href="#"> Services</a></li>
		<li class="right"> <a href="#"> About Us</a></li>
		<li class="right"><a href="#"> Contact Us</a></li>
	</ul>
	<br> <br>
	<hr>
	<br>
	<div class="container">
		<p><?php echo date('l, F jS, Y'); ?></p>
	</div>
	<div class="container1">
		<p><?php echo  date('h:i:s A'); ?></p>
	</div>
</body>
</html>