<?php
/* @var $this AttendanceController */
/* @var $data Attendance */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('attdNo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->attdNo), array('view', 'id'=>$data->attdNo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empID')); ?>:</b>
	<?php echo CHtml::encode($data->empID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('arrive')); ?>:</b>
	<?php echo CHtml::encode($data->arrive); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lunchOut')); ?>:</b>
	<?php echo CHtml::encode($data->lunchOut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lunchIn')); ?>:</b>
	<?php echo CHtml::encode($data->lunchIn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('leave')); ?>:</b>
	<?php echo CHtml::encode($data->leave); ?>
	<br />


</div>