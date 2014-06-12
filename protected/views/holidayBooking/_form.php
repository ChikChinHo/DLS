<?php
/* @var $this HolidayBookingController */
/* @var $model HolidayBooking */
/* @var $form CActiveForm */
?>
<head>
<script type="text/javascript">
    function showButton() {
        var btn=document.createElement("BUTTON");
        var t=document.createTextNode("CLICK ME");
        btn.appendChild(t);
    }
</script>
    </head>
<body><script>showButton()</script></body>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'holiday-booking-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->label($model,'Your user id'); ?>
		<?php echo $form->textField($model,'userid',array('size'=>20,'maxlength'=>20,'value'=>Yii::app()->user->id, 'readOnly'=>true)); ?>
		<?php echo $form->error($model,'userid'); ?>
	</div>
    <?php /*Yii::app()->clientScript->registerScript('script', <<<JS
    alert('my script');
JS
        , CClientScript::POS_READY);*/?>
    <?php
    //$result= Yii::app()->db->createCommand("SELECT count(date) as date FROM logging5.holiday_booking WHERE date = '2014-05-10'")->queryAll();
/*    $result= Yii::app()->db->createCommand("SELECT date, status
                                            FROM logging5.holiday_booking
                                            WHERE status = 'ACCEPTED'")->queryAll();*/
       //$some = $result[0]['date'];
       // echo $some;
        //rint_r($result);
        //if ($some >= 1 || $some < 0) {echo "yes";}
    ?>
	<div class="row">
		<?php
        echo $form->labelEx($model,'date');
        ?>(e.g. 2014-12-13)<br>
		<?php //echo $form->textField($model,'date'); ?>
        <?php
        $form->widget('zii.widgets.jui.CJuiDatePicker', array(
            'id'=>"userInputDate",
            'model'=>$model,
            'attribute'=>'date',
            'name'=>$model->date,    // This is how it works for me.
            'value'=>$model->date,
            'options'=>array('dateFormat'=>'yy-mm-dd',
                'altFormat'=>'dd-mm-yy',
                'changeMonth'=>'true',
                'changeYear'=>'true',
                'yearRange'=>'2014:2020',
                'showOn'=>'both',
                'buttonText'=>'Select a date'),
            'htmlOptions'=>array('size'=>'14'
            )
        ));
        echo CHtml::button("Check",array('title'=>"Edit",'id'=>"checkButton"));
        ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>20,'maxlength'=>20, 'readOnly'=>true)); ?>
		<?php echo $form->error($model,'status'); ?>

    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Save', array('tittle'=>"Submit", 'id'=>"submitButton"));

        ?>
	</div>
<!--    <a href=/index.php>Please click here to view your personal information.-->
    <!--<input type="button" id="toggler" value="Toggler" onClick="action();" />

    <input type="button" id="togglee" value="Togglee" />-->
    <?php Yii::app()->clientScript->registerScript('script', <<<JS
    $("#userInputDate").change( function() {
        //alert('alert');
        var userInputDate = document.getElementById('userInputDate').value;
        var todayDate = new Date();
        var isLarge = todayDate < Date.parse(userInputDate);
        if (isLarge == false) {
            alert("Cannot select date from past!");
            document.getElementById('HolidayBooking_status').value ='NOT ACCEPTED';
            document.getElementById('submitButton').style.visibility = 'hidden';
            }
    });
JS
        , CClientScript::POS_READY);?>


    <?php
    $result= Yii::app()->db->createCommand("SELECT date, status
                                            FROM logging5.holiday_booking
/*
                                            WHERE status = 'ACCEPTED'
*/
                                            ")->queryAll();
    $some = $result[0]['date'];
    //echo $some;
    $lengthOfResult = sizeof($result);
   // echo sizeof($result);
    //print_r($result);
    $jsonArray = json_encode($result);
    $re = '/^\d{4}-\d{1,2}-\d{1,2}$/';

    //print_r($jsonArray);
    Yii::app()->clientScript->registerScript('register_script_name', "
    var hidden = false;
    //alert('start');
    document.getElementById('submitButton').style.visibility = 'hidden';
    $('#checkButton').click(function action(){
    //alert('load);
    var result = $jsonArray;
    var resultLength = result.length;
    //alert(resultLength);
    var requestCount = null;
    var userInputDate = document.getElementById('userInputDate').value;
    //alert(userInputDate);
    for (var i = 0; i < result.length; i++) {
        if (result[i].date == userInputDate) {requestCount ++;}
    }
    //alert(requestCount);
    //alert(userInputDate);
    //alert(result[0].date);
    //return false;
        //hidden = !hidden
    //if (hidden) {document.getElementById('submitButton').style.visibility = 'hidden';}
    //else {document.getElementById('submitButton').style.visibility = 'visible';}
    var re = $re;
    var reTest = re.test(userInputDate);
    //alert(reTest);
    var todayDate = new Date();
    var userInputDateConverted = new Date();
    userInputDateConverted = Date.parse(userInputDate);
    //alert(todayDate);
    //alert(userInputDateConverted);
    var isLarge = todayDate < userInputDateConverted;
    //alert(isLarge);
    //if (userInputDate > todayDate) {alert('yes');};
    var alertMessageFull = 'Too many user requset for leave on '+userInputDate+'.  Please select another Day.';
    var alertMessageNull = 'Incorrect date format or no date was selected.  Please select a date first!';
    if (userInputDate == '' || reTest == false)
    {document.getElementById('submitButton').style.visibility = 'hidden'; alert(alertMessageNull);}
    else if (requestCount >= 1)
    {document.getElementById('submitButton').style.visibility = 'hidden'; alert(alertMessageFull);
    document.getElementById('HolidayBooking_status').value ='NOT ACCEPTED';}
    else if (reTest == true) {
            if (isLarge == true ) {
                alert(userInputDate);document.getElementById
                ('submitButton').style.visibility = 'visible'; document.getElementById('HolidayBooking_status').value = 'ACCEPTED';
            } else {
                alert(alertMessageNull);
                document.getElementById
                ('submitButton').style.visibility = 'hidden'; document.getElementById('HolidayBooking_status').value = 'NOT ACCEPTED';

            }
    }
    });
    ", CClientScript::POS_READY);?>


<?php $this->endWidget(); ?>

</div><!-- form -->