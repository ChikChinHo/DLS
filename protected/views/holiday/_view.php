<?php
/* @var $this HolidayController */
/* @var $data Holiday */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Date')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Date), array('view', 'id'=>$data->Date)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Type')); ?>:</b>
	<?php echo CHtml::encode($data->Type); ?>
	<br />


</div>