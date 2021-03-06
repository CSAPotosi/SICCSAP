<?php

/**
 * This is the model class for table "quirofano".
 *
 * The followings are the available columns in table 'quirofano':
 * @property integer $id_quirofano
 * @property string $nombre_quirofano
 * @property string $descripcion_quirofano
 *
 * The followings are the available model relations:
 * @property Cirugia[] $cirugias
 */
class Quirofano extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'quirofano';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_quirofano', 'length', 'max'=>30),
			array('descripcion_quirofano', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_quirofano, nombre_quirofano, descripcion_quirofano', 'safe', 'on'=>'search'),
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
			'cirugias' => array(self::HAS_MANY, 'Cirugia', 'id_quirofano'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_quirofano' => 'Id Quirofano',
			'nombre_quirofano' => 'Nombre Quirofano',
			'descripcion_quirofano' => 'Descripcion Quirofano',
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

		$criteria->compare('id_quirofano',$this->id_quirofano);
		$criteria->compare('nombre_quirofano',$this->nombre_quirofano,true);
		$criteria->compare('descripcion_quirofano',$this->descripcion_quirofano,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Quirofano the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
