<?php
/* @var $this EmployeeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Employees',
);

if (Yii::app()->getModule('user')->isAdmin() == true) {
    $this->menu = array(
        array('label' => 'Create Employee', 'url' => array('create')),
        array('label' => 'Manage Employee', 'url' => array('admin')),
    );
}
?>

<h1>Employees index.php</h1>
<?php
$userID = Yii::app()->user->id;
$url = "index.php?r=employee/view&id=";
$urlProfile = "index.php?r=user/profile";
$urlNew = $url.$userID;
echo ("<a href=$urlNew>Please click here to view your personal information.");
echo ("<br><a href=$urlProfile>For you login account information, please click here.");

?>
<?php /*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php /*$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider2,
    'itemView'=>'_view',
));*/ ?>