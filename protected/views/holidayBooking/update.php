<?php
/* @var $this HolidayBookingController */
/* @var $model HolidayBooking */

$this->breadcrumbs=array(
	'Holiday Bookings'=>array('index'),
	$model->holiday_booking_no=>array('view','id'=>$model->holiday_booking_no),
	'Update',
);

$this->menu=array(
	array('label'=>'List HolidayBooking', 'url'=>array('index')),
	array('label'=>'Create HolidayBooking', 'url'=>array('create')),
	array('label'=>'View HolidayBooking', 'url'=>array('view', 'id'=>$model->holiday_booking_no)),
	array('label'=>'Manage HolidayBooking', 'url'=>array('admin')),
);
?>

<h1>Update HolidayBooking <?php echo $model->holiday_booking_no; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>