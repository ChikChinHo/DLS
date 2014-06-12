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
		<?php
        //$empID = Yii::app()->user->id;
        $result= Yii::app()->db->createCommand("SELECT * FROM `employee` ORDER By empID DESC")->queryAll();
       // var_dump($result);
       //echo  $sql = "SELECT * FROM `employee` ORDER By 'empID' DESC";
       // echo $result[0]['empID'];
        $newEmpID = $result[0]['empID'] + 1;
        echo $form->textField($model,'empID',array('size'=>10,'maxlength'=>10, 'value'=>$newEmpID, 'readOnly'=>true,)); ?>
        <?php $example = "Generate by system.  Not allow to change.";echo "<br/>".$example; ?>

        <?php echo $form->error($model,'empID'); ?>
	</div><br>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php
        $jobType = array('FT'=>'FT', 'PT'=>'PT');
        echo $form->radioButtonList($model,'type',$jobType,array('separator'=>' '));
        //echo $form->textField($model,'type',array('size'=>2,'maxlength'=>2));
        ?>
        <?php $example = "example: PT / FT";echo "<br/>".$example; ?>
        <?php echo $form->error($model,'type'); ?>
	</div><br/>

	<div class="row">
		<?php echo $form->labelEx($model,'entryDate'); ?>
        <?php
        //echo $form->textField($model,'entryDate');
        $form->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model'=>$model,
            'attribute'=>'entryDate',
            'name'=>$model->entryDate,    // This is how it works for me.
            'value'=>$model->entryDate,
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
        <?php $example = "example: 2014-12-31";echo "<br/>".$example; ?>

        <?php echo $form->error($model,'entryDate'); ?>
	</div><br/>

	<div class="row">
		<?php echo $form->labelEx($model,'postition'); ?>
		<?php echo $form->textField($model,'postition',array('size'=>20,'maxlength'=>20)); ?>
        <?php $example = "example: Manager/Supervisor";echo "<br/>".$example; ?>
        <?php echo $form->error($model,'postition'); ?>
	</div><br>

	<div class="row">
		<?php echo $form->labelEx($model,'firstName'); ?>
		<?php echo $form->textField($model,'firstName',array('size'=>20,'maxlength'=>20)); ?>
        <?php $example = "example: Tai Man";echo "<br/>".$example; ?>
        <?php echo $form->error($model,'firstName'); ?>
	</div><br>

	<div class="row">
		<?php echo $form->labelEx($model,'lastName'); ?>
		<?php echo $form->textField($model,'lastName',array('size'=>20,'maxlength'=>20)); ?>
        <?php $example = "example: Chan";echo "<br/>".$example; ?>
        <?php echo $form->error($model,'lastName'); ?>
	</div><br>

	<div class="row">
		<?php echo $form->labelEx($model,'deptID'); ?>
		<?php
        $listData = CHTML::listData(Department::model()->findAll(),'deptID','deptName');
        echo $form->dropDownList($model,'deptID',$listData);
        //echo $form->textField($model,'deptID',array('size'=>10,'maxlength'=>10));
        ?>
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
		<?php
        $listData = CHTML::listData(Salary::model()->findAll(),'grade','value');
        echo $form->dropDownList($model,'grade',$listData);

        //echo $form->textField($model,'grade',array('size'=>2,'maxlength'=>2));
        ?>
		<?php echo $form->error($model,'grade'); ?>
	</div>

	<div class="row buttons">
		<?php
        echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save');
        //$result= Yii::app()->db->createCommand("INSERT INTO `logging5`.`testTable` (`TestPK`, `TestName`) VALUES ('2', 'name1');")->queryAll();
        ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->