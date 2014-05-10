<?php
/* @var $this HolidayBookingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Holiday Bookings',
);

$this->menu=array(
	array('label'=>'Make Holiday Booking', 'url'=>array('create')),
	array('label'=>'Manage HolidayBooking', 'url'=>array('admin')),
);
?>

<h1>Holiday Bookings</h1>

<?php
    $model = new HolidayBooking('Search');
    $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$model->search(),
      //  'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
