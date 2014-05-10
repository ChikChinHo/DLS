<?php
/* @var $this HolidayBookingController */
/* @var $model HolidayBooking */

$this->breadcrumbs=array(
	'Holiday Bookings'=>array('index'),
	$model->holiday_booking_no,
);

$this->menu=array(
	array('label'=>'List HolidayBooking', 'url'=>array('index')),
	array('label'=>'Create HolidayBooking', 'url'=>array('create')),
	array('label'=>'Update HolidayBooking', 'url'=>array('update', 'id'=>$model->holiday_booking_no)),
	array('label'=>'Delete HolidayBooking', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->holiday_booking_no),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HolidayBooking', 'url'=>array('admin')),
);
?>

<h1>View HolidayBooking #<?php echo $model->holiday_booking_no; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'holiday_booking_no',
		'userid',
		'date',
		'status',
	),
)); ?>
