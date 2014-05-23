<?php
/* @var $this AttendanceController */
/* @var $model Attendance */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'attdNo'); ?>
		<?php echo $form->textField($model,'attdNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'empID'); ?>
		<?php echo $form->textField($model,'empID',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'arrive'); ?>
		<?php echo $form->textField($model,'arrive'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lunchOut'); ?>
		<?php echo $form->textField($model,'lunchOut'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lunchIn'); ?>
		<?php echo $form->textField($model,'lunchIn'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'leave'); ?>
		<?php echo $form->textField($model,'leave'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->