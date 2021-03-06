<?php
/* @var $this EmployeeController */
/* @var $model Employee */

$this->breadcrumbs=array(
	'Employees'=>array('index'),
	$model->empID,
);

$this->menu=array(
	array('label'=>'Back', 'url'=>array('index')),
	array('label'=>'Create Employee', 'url'=>array('create')),
	array('label'=>'Update Employee', 'url'=>array('update', 'id'=>$model->empID)),
	array('label'=>'Delete Employee', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->empID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Employee', 'url'=>array('admin')),
);
?>

<h1>View Employee #<?php echo $model->empID; ?></h1>

<?php

//echo Yii::app()->request->url;
$userID = Yii::app()->user->id;
//echo $userID;
$isMatch = explode("view&id=", Yii::app()->request->url);
//print_r($isMatch);
//echo $isMatch[1];
$isMatch = strcmp($userID, $isMatch[1]);

if (1+1==2) {
    $this->widget('zii.widgets.CDetailView', array(
        'data' => $model,
        'attributes' => array(
            'empID',
            'type',
            'entryDate',
            'postition',
            'firstName',
            'lastName',
            'deptID',
            'bankNo',
            'cardNo1',
            'cardNo2',
            'grade',
        ),
    ));
} ?>
