<?php

/**
 * This is the model class for table "attendance".
 *
 * The followings are the available columns in table 'attendance':
 * @property integer $attdNo
 * @property string $empID
 * @property string $date
 * @property string $arrive
 * @property string $lunchOut
 * @property string $lunchIn
 * @property string $leave
 *
 * The followings are the available model relations:
 * @property Employee $emp
 */
class Attendance extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'attendance';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('attdNo, empID, date', 'required'),
			array('attdNo', 'numerical', 'integerOnly'=>true),
			array('empID', 'length', 'max'=>10),
			array('arrive, lunchOut, lunchIn, leave', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('attdNo, empID, date, arrive, lunchOut, lunchIn, leave', 'safe', 'on'=>'search'),
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
			'emp' => array(self::BELONGS_TO, 'Employee', 'empID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'attdNo' => 'Attd No',
			'empID' => 'Emp',
			'date' => 'Date',
			'arrive' => 'Arrive',
			'lunchOut' => 'Lunch Out',
			'lunchIn' => 'Lunch In',
			'leave' => 'Leave',
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

		$criteria=new CDbCriteria;

		$criteria->compare('attdNo',$this->attdNo);
		$criteria->compare('empID',$this->empID,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('arrive',$this->arrive,true);
		$criteria->compare('lunchOut',$this->lunchOut,true);
		$criteria->compare('lunchIn',$this->lunchIn,true);
		$criteria->compare('leave',$this->leave,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Attendance the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
