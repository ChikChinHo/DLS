<?php
/* @var $this SalaryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Salaries',
);

$this->menu=array(
	array('label'=>'Create Salary', 'url'=>array('create'), 'visible'=>Yii::app()->getModule('user')->isAdmin()),
	array('label'=>'Manage Salary', 'url'=>array('admin'), 'visible'=>Yii::app()->getModule('user')->isAdmin()),
);
?>

<h1>Salaries</h1>
<?php
$testId = Yii::app()->user->id;
//echo "user id $testId";
$modelAttributesEmployee = Employee::model()->findByPk($testId);
$grade = $modelAttributesEmployee['grade'];
$jobType = $modelAttributesEmployee['type'];
//echo $jobType;
$salaryInPrice = Salary::model()->findByPk($grade);
$salaryInPrice = $salaryInPrice['value'];
//print_r($salaryInPrice);
if (strcasecmp($jobType, 'PT') == 0) {
    //echo "yes";
    $currentMonth = date("m");
//$currentMonth = date('02');
    $currentYear = date("Y");
//$currentYear = date('2013');
    $conditionYearMonth = "'".$currentYear."-".$currentMonth."-%"."'";
    $empID = Yii::app()->user->id;
    $result= Yii::app()->db->createCommand("SELECT * FROM `attendance` where empID = $empID AND date LIKE $conditionYearMonth")->queryAll();
//print_r($result[0]['empID']);
   // print_r($result);
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
            //echo $leave - $lunchIn;
        }
        $totalWorkHours = round($totalWorkHours/60/60);
        //echo $totalWorkHours;
        $salaryInPrice = (int)$salaryInPrice * (int)$totalWorkHours;
        //echo $salaryInPrice;
    }
}
//echo $totalWorkHours;
//echo $salaryInPrice;
//echo $jobType;
$isPT = strcmp($jobType, "PT");
//echo $isPT;
if ($isPT == 0) {
    if ($totalWorkHours == 0) {
       // $salaryInPrice = 0;
    }
}$currentMonth = date("M");
//echo $salaryInPrice;
$salaryMessage = "Estimated salary in ".$currentMonth.": ";
$this->widget('zii.widgets.CDetailView', array(
    'data'=>$salaryInPrice,
    'attributes'=>array(
        array('name'=>$salaryMessage, 'value'=>"HKD ".$salaryInPrice),

    ),
));

?>
<?php
/*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); */
/*$model = new Salary('Search');
$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$model->search(),
    //  'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
));*/
?>
