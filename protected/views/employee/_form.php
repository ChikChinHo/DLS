<?php
/* @var $this EmployeeController */
/* @var $model Employee */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'empID'); ?>
		<?php echo $form->textField($model,'empID',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'empID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entryDate'); ?>
		<?php echo $form->textField($model,'entryDate'); ?>
		<?php echo $form->error($model,'entryDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postition'); ?>
		<?php echo $form->textField($model,'postition',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'postition'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'firstName'); ?>
		<?php echo $form->textField($model,'firstName',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'firstName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastName'); ?>
		<?php echo $form->textField($model,'lastName',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'lastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deptID'); ?>
		<?php echo $form->textField($model,'deptID',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'deptID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bankNo'); ?>
		<?php echo $form->textField($model,'bankNo',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'bankNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cardNo1'); ?>
		<?php echo $form->textField($model,'cardNo1',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'cardNo1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cardNo2'); ?>
		<?php echo $form->textField($model,'cardNo2',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'cardNo2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grade'); ?>
		<?php echo $form->textField($model,'grade',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'grade'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->