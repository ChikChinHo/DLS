<?php
/* @var $this HolidayBookingController */
/* @var $model HolidayBooking */

$this->breadcrumbs=array(
	'Holiday Bookings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HolidayBooking', 'url'=>array('index')),
	array('label'=>'Manage HolidayBooking', 'url'=>array('admin')),
);
?>

<h1>Make Holiday Booking</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>