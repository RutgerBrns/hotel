<?php var_dump($booking); ?>
<div class="container">
  	<h3>Basic Table</h3>
  	<table class="table">
		<thead>
			<tr>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th>id</th>
				<td><?php echo $booking->id; ?></td>
			</tr>

			<tr>
				<th>apartment_id</th>
				<td><?php echo $booking->apartment_id; ?></td>
			</tr>

			<tr>
				<th>checkin_date</th>
				<td>
				<?php 
					$checkin_date = date_create('$booking->checkin_date');
					echo date_format($checkin_date, 'Y-m-d');
				?>
				 </td>
			</tr>

			<tr>
				<th>checkin_time</th>
				<td><?php echo $booking->checkin_time; ?></td>
			</tr>

			<tr>
				<th>departure_date</th>
				<td><?php echo $booking->departure_date; ?></td>
			</tr>

			<tr>
				<th>adults</th>
				<td><?php echo $booking->adults; ?></td>
			</tr>

			<tr>
				<th>kids</th>
				<td><?php echo $booking->kids; ?></td>
			</tr>

			<tr>
				<th>breakfast</th>
				<td><?php echo $booking->breakfast; ?></td>
			</tr>

			<tr>
				<th>comments</th>
				<td><?php echo $booking->comments; ?></td>
			</tr>
		</tbody>
	</table>

</div>
