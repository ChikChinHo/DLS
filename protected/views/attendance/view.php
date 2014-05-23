<?php
/* @var $this AttendanceController */
/* @var $model Attendance */

$this->breadcrumbs=array(
	'Attendances'=>array('index'),
	$model->attdNo,
);

$this->menu=array(
	array('label'=>'List Attendance', 'url'=>array('index')),
	array('label'=>'Create Attendance', 'url'=>array('create')),
	array('label'=>'Update Attendance', 'url'=>array('update', 'id'=>$model->attdNo)),
	array('label'=>'Delete Attendance', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->attdNo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Attendance', 'url'=>array('admin')),
);
?>

<h1>View Attendance #<?php echo $model->attdNo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'attdNo',
		'empID',
		'date',
		'arrive',
		'lunchOut',
		'lunchIn',
		'leave',
	),
)); ?>
