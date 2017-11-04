<!DOCTYPE html>
<?php
define("BASE", "/angular/work/");
//Todo Create 404 page
?>
<html>
<head>
    <base href="<?=BASE?>">
	<title>Posts App</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="css/materialdesignicons.css">
	<link rel="stylesheet" type="text/css" href="css/lumx.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js"></script>
    <script src="https://code.angularjs.org/1.6.6/angular-resource.min.js"></script>
    <script src="https://code.angularjs.org/1.6.6/angular-route.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
    <script src="js/lumx.js"></script>
    <script src="js/app.js"></script>
    <script src="js/services.js"></script>
    <script src="js/controllers.js"></script>

</head>
<body ng-app="FinalApp">

<nav>
	<div class='bgc-blue-900 tc-white' flex-container='row' flex-align='center center'>
		<div flex-item='4'>
			<h1 class='fs-display-3 display-block'>
                <a href="<?=BASE?>"> Post App</a>
            </h1>
		</div>

		<div flex-item='1'>
			<a href="new-post">Create Post</a>
		</div>
	</div>

    <div flex-container="row" flex-align="center">
        <div ng-view flex-item="9">
            <?php //Templates ?>
        </div>
    </div>
</nav>


</body>
</html>

