<?php
/* @var $this HolidayController */
/* @var $model Holiday */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'holiday-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Date'); ?>
		<?php //echo $form->textField($model,'Date'); ?>
        <?php
        $form->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model'=>$model,
            'attribute'=>'date',
            'name'=>$model->date,    // This is how it works for me.
            'value'=>$model->date,
            'options'=>array('dateFormat'=>'yy-mm-dd',
                'altFormat'=>'dd-mm-yy',
                'changeMonth'=>'true',
                'changeYear'=>'true',
                //'yearRange'=>'1920:2010',
                'showOn'=>'both',
                'buttonText'=>'...'),
            'htmlOptions'=>array('size'=>'10'
            )
        ));
        ?>
		<?php echo $form->error($model,'Date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Type'); ?>
		<?php echo $form->textField($model,'Type',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->