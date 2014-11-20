<?php

/**
 * This is the model class for table "registro".
 *
 * The followings are the available columns in table 'registro':
 * @property integer $id_registro
 * @property integer $id_empleado
 * @property string $fecha_de_registro
 * @property string $hora_ingreso
 * @property string $hora_salida
 * @property string $excepcion
 *
 * The followings are the available model relations:
 * @property Empleado $idEmpleado
 */
class Registro extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'registro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_empleado', 'numerical', 'integerOnly'=>true),
			array('excepcion', 'length', 'max'=>20),
			array('fecha_de_registro, hora_ingreso, hora_salida', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_registro, id_empleado, fecha_de_registro, hora_ingreso, hora_salida, excepcion', 'safe', 'on'=>'search'),
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
			'idEmpleado' => array(self::BELONGS_TO, 'Empleado', 'id_empleado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_registro' => 'Id Registro',
			'id_empleado' => 'Id Empleado',
			'fecha_de_registro' => 'Fecha De Registro',
			'hora_ingreso' => 'Hora Ingreso',
			'hora_salida' => 'Hora Salida',
			'excepcion' => 'Excepcion',
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

		$criteria->compare('id_registro',$this->id_registro);
		$criteria->compare('id_empleado',$this->id_empleado);
		$criteria->compare('fecha_de_registro',$this->fecha_de_registro,true);
		$criteria->compare('hora_ingreso',$this->hora_ingreso,true);
		$criteria->compare('hora_salida',$this->hora_salida,true);
		$criteria->compare('excepcion',$this->excepcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Registro the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
