<?php

/**
 * This is the model class for table "employee".
 *
 * The followings are the available columns in table 'employee':
 * @property string $empID
 * @property string $type
 * @property string $entryDate
 * @property string $postition
 * @property string $firstName
 * @property string $lastName
 * @property string $deptID
 * @property string $bankNo
 * @property string $cardNo1
 * @property string $cardNo2
 * @property string $grade
 *
 * The followings are the available model relations:
 * @property Attendance[] $attendances
 * @property Department $dept
 * @property Leave[] $leaves
 * @property Sickleave[] $sickleaves
 */
class Employee extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'employee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empID, type, entryDate, postition, firstName, lastName, deptID, bankNo, cardNo1, cardNo2, grade', 'required'),
			array('empID, deptID', 'length', 'max'=>10),
			array('type, grade', 'length', 'max'=>2),
			array('postition, firstName, lastName, cardNo1, cardNo2', 'length', 'max'=>20),
			array('bankNo', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('empID, type, entryDate, postition, firstName, lastName, deptID, bankNo, cardNo1, cardNo2, grade', 'safe', 'on'=>'search'),
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
			'attendances' => array(self::HAS_MANY, 'Attendance', 'empID'),
			'dept' => array(self::BELONGS_TO, 'Department', 'deptID'),
			'leaves' => array(self::HAS_MANY, 'Leave', 'empID'),
			'sickleaves' => array(self::HAS_MANY, 'Sickleave', 'empID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'empID' => 'Emp',
			'type' => 'Type',
			'entryDate' => 'Entry Date',
			'postition' => 'Postition',
			'firstName' => 'First Name',
			'lastName' => 'Last Name',
			'deptID' => 'Dept',
			'bankNo' => 'Bank No',
			'cardNo1' => 'Card No1',
			'cardNo2' => 'Card No2',
			'grade' => 'Grade',
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

		$criteria->compare('empID',$this->empID,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('entryDate',$this->entryDate,true);
		$criteria->compare('postition',$this->postition,true);
		$criteria->compare('firstName',$this->firstName,true);
		$criteria->compare('lastName',$this->lastName,true);
		$criteria->compare('deptID',$this->deptID,true);
		$criteria->compare('bankNo',$this->bankNo,true);
		$criteria->compare('cardNo1',$this->cardNo1,true);
		$criteria->compare('cardNo2',$this->cardNo2,true);
		$criteria->compare('grade',$this->grade,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Employee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
