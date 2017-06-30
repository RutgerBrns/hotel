<?php 
    	$begin = new DateTime( '2017-07-01' );
		$end = new DateTime( '2017-07-30' );

		$interval = DateInterval::createFromDateString('1 day');
		$period = new DatePeriod($begin, $interval, $end);
?>

<div class="container">
    <div class="row">    	

		<?php foreach($period as $dt ) : ?>
			<div class="col-xs-6 col-sm-4 col-md-2 col-lg-1 day">
 				<p><?php echo $dt->format( "l Y-m-d \n" ); ?></p>
 			</div>
 		<?php endforeach; ?>
 	</div>
</div>

<style type="text/css">
	
.day {
	background-color: lightblue;
	color: white;
	border: solid 3px white;
	height: 10rem;
}

.day:hover{
	background-color: blue;	
}

</style>


    	