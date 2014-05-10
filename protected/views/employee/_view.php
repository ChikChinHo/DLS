<?php
/* @var $this EmployeeController */
/* @var $data Employee */
?>


<?php
$userID = Yii::app()->user->id;
$currentID = CHtml::encode(CHtml::encode($data->empID), array('view', 'id'=>$data->empID));
if ($userID == $currentID) {
    //echo '<div class="view">';
}?>
<div class="border">

    <b><?php
        $userID = Yii::app()->user->id;
        $currentID = CHtml::encode(CHtml::encode($data->empID), array('view', 'id'=>$data->empID));
        if ($userID == $currentID) {
            echo CHtml::encode($data->getAttributeLabel('empID'));
            echo ":";
        } ?></b>
    <?php
    $userID = Yii::app()->user->id;
    $currentID = CHtml::encode(CHtml::encode($data->empID), array('view', 'id'=>$data->empID));
    if ($userID == $currentID) {
        echo CHtml::link(CHtml::encode($data->empID), array('view', 'id' => $data->empID));
    } ?>
    <?php //echo CHtml::encode(CHtml::encode($data->empID), array('view', 'id'=>$data->empID)); ?>
    <br />

    <b><?php
        $userID = Yii::app()->user->id;
        $currentID = CHtml::encode(CHtml::encode($data->empID), array('view', 'id'=>$data->empID));
        if ($userID == $currentID) {
            echo CHtml::encode($data->getAttributeLabel('type'));
        } ?></b>
    <?php
    $userID = Yii::app()->user->id;
    $currentID = CHtml::encode(CHtml::encode($data->empID), array('view', 'id'=>$data->empID));
    if ($userID == $currentID) {
        echo CHtml::encode($data->type);
    } ?>
    <br />

    <b><?php
        $userID = Yii::app()->user->id;
        $currentID = CHtml::encode(CHtml::encode($data->empID), array('view', 'id'=>$data->empID));
        if ($userID == $currentID) {
            echo CHtml::encode($data->getAttributeLabel('entryDate'));
        } ?></b>
    <?php
    $userID = Yii::app()->user->id;
    $currentID = CHtml::encode(CHtml::encode($data->empID), array('view', 'id'=>$data->empID));
    if ($userID == $currentID) {
        echo CHtml::encode($data->entryDate);
    } ?>
    <br />

    <b><?php
        $userID = Yii::app()->user->id;
        $currentID = CHtml::encode(CHtml::encode($data->empID), array('view', 'id'=>$data->empID));
        if ($userID == $currentID) {
            echo CHtml::encode($data->getAttributeLabel('postition'));
        } ?></b>
    <?php
    $userID = Yii::app()->user->id;
    $currentID = CHtml::encode(CHtml::encode($data->empID), array('view', 'id'=>$data->empID));
    if ($userID == $currentID) {
        echo CHtml::encode($data->postition);
    } ?>
    <br />

    <b><?php
        $userID = Yii::app()->user->id;
        $currentID = CHtml::encode(CHtml::encode($data->empID), array('view', 'id'=>$data->empID));
        if ($userID == $currentID) {
            echo CHtml::encode($data->getAttributeLabel('firstName'));
        } ?></b>
    <?php
    $userID = Yii::app()->user->id;
    $currentID = CHtml::encode(CHtml::encode($data->empID), array('view', 'id'=>$data->empID));
    if ($userID == $currentID) {
        echo CHtml::encode($data->firstName);
    } ?>
    <br />

    <b><?php
        $userID = Yii::app()->user->id;
        $currentID = CHtml::encode(CHtml::encode($data->empID), array('view', 'id'=>$data->empID));
        if ($userID == $currentID) {
            echo CHtml::encode($data->getAttributeLabel('lastName'));
        } ?></b>
    <?php
    $userID = Yii::app()->user->id;
    $currentID = CHtml::encode(CHtml::encode($data->empID), array('view', 'id'=>$data->empID));
    if ($userID == $currentID) {        echo CHtml::encode($data->lastName);
    } ?>
    <br />

    <b><?php
        $userID = Yii::app()->user->id;
        $currentID = CHtml::encode(CHtml::encode($data->empID), array('view', 'id'=>$data->empID));
        if ($userID == $currentID) {
            echo CHtml::encode($data->getAttributeLabel('deptID'));
        } ?></b>
    <?php
    $userID = Yii::app()->user->id;
    $currentID = CHtml::encode(CHtml::encode($data->empID), array('view', 'id'=>$data->empID));
    if ($userID == $currentID) {        echo CHtml::encode($data->deptID);
    } ?>
    <br />

    <?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('bankNo')); ?>:</b>
	<?php echo CHtml::encode($data->bankNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cardNo1')); ?>:</b>
	<?php echo CHtml::encode($data->cardNo1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cardNo2')); ?>:</b>
	<?php echo CHtml::encode($data->cardNo2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grade')); ?>:</b>
	<?php echo CHtml::encode($data->grade); ?>
	<br />

	*/ ?>

</div>