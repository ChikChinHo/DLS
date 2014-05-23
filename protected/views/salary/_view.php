<?php
/* @var $this SalaryController */
/* @var $data Salary */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('grade')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->grade), array('view', 'id'=>$data->grade)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value')); ?>:</b>
	<?php echo CHtml::encode($data->value); ?>
	<br />


</div>