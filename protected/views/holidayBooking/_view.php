<?php
/* @var $this HolidayBookingController */
/* @var $data HolidayBooking */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('holiday_booking_no')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->holiday_booking_no), array('view', 'id'=>$data->holiday_booking_no)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userid')); ?>:</b>
	<?php echo CHtml::encode($data->userid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>