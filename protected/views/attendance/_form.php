<?php
/* @var $this AttendanceController */
/* @var $model Attendance */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'attendance-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'attdNo'); ?>
		<?php echo $form->textField($model,'attdNo'); ?>
		<?php echo $form->error($model,'attdNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'empID'); ?>
		<?php echo $form->textField($model,'empID',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'empID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'arrive'); ?>
		<?php echo $form->textField($model,'arrive'); ?>
		<?php echo $form->error($model,'arrive'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lunchOut'); ?>
		<?php echo $form->textField($model,'lunchOut'); ?>
		<?php echo $form->error($model,'lunchOut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lunchIn'); ?>
		<?php echo $form->textField($model,'lunchIn'); ?>
		<?php echo $form->error($model,'lunchIn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'leave'); ?>
		<?php echo $form->textField($model,'leave'); ?>
		<?php echo $form->error($model,'leave'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->