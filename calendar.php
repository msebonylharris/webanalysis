<?php
	$date=getdate();	
	$month=substr( $date['month'], 0, 3 );
	$day = $date['mday'];
	$year = $date['year'];
?>

<!-- calendar HTML -->
<div class="calender">
	<p class="month">
		<?php echo( $month ); ?>
	</p>
	<p class="date">
		<?php echo( $day ); ?>
	</p>
	<p class="year">
		<?php echo( $year ); ?>
	</p>
</div>