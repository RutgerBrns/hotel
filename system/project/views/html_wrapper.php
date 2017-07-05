<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i|Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <title><?php echo $title; ?> | <?php echo config::get('site_title'); ?></title>
</head>
<body>



	    <?php echo $top_navigation; ?>


		<div class="wrapper">
	    <?php echo $page_layout; ?>
	    </div>

	    <?php echo $footer; ?>



</body>
</html>