<?php

/**
 * This is the model class for table "holiday_booking".
 *
 * The followings are the available columns in table 'holiday_booking':
 * @property integer $holiday_booking_no
 * @property string $userid
 * @property string $date
 * @property string $status
 */
class HolidayBooking extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'holiday_booking';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userid, date', 'required'),
			array('userid, status', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('holiday_booking_no, userid, date, status', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'holiday_booking_no' => 'Holiday Booking No',
			'userid' => 'Userid',
			'date' => 'Date',
			'status' => 'Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

/*		$criteria=new CDbCriteria;

		$criteria->compare('holiday_booking_no',$this->holiday_booking_no);
        if (Yii::app()->getModule('user')->isAdmin()) {
            $criteria->compare('userid', $this->userid, true);

        } else {
            $userid = Yii::app()->user->id;
            $criteria->condition = "userid = $userid";
        }
		$criteria->compare('date',$this->date,true);
        //$criteria->order = "date desc";
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,*/

        $criteria=new CDbCriteria;

        if (Yii::app()->getModule('user')->isAdmin() == false) {
            $userid = Yii::app()->user->id;
            $criteria->addCondition("userid = $userid");
        }
        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HolidayBooking the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
