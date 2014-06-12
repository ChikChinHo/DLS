<?php
/* @var $this AttendanceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Attendances',
);

$this->menu=array(
	array('label'=>'Create Attendance', 'url'=>array('create')),
	array('label'=>'Manage Attendance', 'url'=>array('admin')),
);
?>

<h1>Attendances</h1>

<?php
$currentMonth = date("m");
//$currentMonth = date('02');
$currentYear = date("Y");
//$currentYear = date('2013');
$conditionYearMonth = "'".$currentYear."-".$currentMonth."-%"."'";
$empID = Yii::app()->user->id;
$result= Yii::app()->db->createCommand("SELECT * FROM `attendance` where empID = $empID AND date LIKE $conditionYearMonth")->queryAll();
//echo $sql = "SELECT * FROM `attendance` where empID = $empID AND date LIKE $conditionYearMonth";
//print_r($result[0]['empID']);
//print_r($result);
//echo count($result);
$totalWorkHours = 0;
$hasResult = array_filter($result);
if ($hasResult == true) {
    $arrive = strtotime($result[0]['arrive']);
    $lunchOut = strtotime($result[0]['lunchOut']);
    $lunchIn = strtotime($result[0]['lunchIn']);
    $leave = strtotime($result[0]['leave']);
//echo (($lunchOut - $arrive) + ($leave - $lunchIn))/60/60;

    for ($i = 0; $i < count($result); $i++) {
        $arrive = strtotime($result[$i]['arrive']);
        $lunchOut = strtotime($result[$i]['lunchOut']);
        $lunchIn = strtotime($result[$i]['lunchIn']);
        $leave = strtotime($result[$i]['leave']);

        $WorkHours = ($lunchOut - $arrive) + ($leave - $lunchIn);
        $totalWorkHours = $totalWorkHours + $WorkHours;
        //echo $totalWorkHours."\n";
        echo $leave - $lunchIn;
    }
}
//echo $totalWorkHours/60/60;
$totalString = "Total working hours in ".date('M').": ";
$this->widget('zii.widgets.CDetailView', array(
    'data'=>$result,
    'attributes'=>array(
         array('name'=>$totalString, 'value'=>round($totalWorkHours/60/60)." hour(s)",),
        //array('name'=>$totalString, 'value'=>round($totalWorkHours/60/60)." hour(s)",),


    ),
));
    $model = new attendance('Search');
$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$model->search(),
    //  'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
)); ?>
