<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <title><?php echo $title; ?> | <?php echo config::get('site_title'); ?></title>
</head>
<body>



	    <?php echo $top_navigation; ?>

	    <?php echo $page_layout; ?>

	    <?php echo $footer; ?>



</body>
</html>