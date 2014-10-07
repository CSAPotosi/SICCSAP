<?php

/**
 * This is the model class for table "sala".
 *
 * The followings are the available columns in table 'sala':
 * @property integer $id_sala
 * @property integer $numero_sala
 * @property string $ubicacion_sala
 * @property string $estado_sala
 * @property integer $id_servicio
 *
 * The followings are the available model relations:
 * @property TipoSala $idServicio
 */
class Sala extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sala';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('numero_sala, id_servicio', 'numerical', 'integerOnly'=>true),
			array('ubicacion_sala', 'length', 'max'=>128),
			array('estado_sala', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_sala, numero_sala, ubicacion_sala, estado_sala, id_servicio', 'safe', 'on'=>'search'),
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
			'idServicio' => array(self::BELONGS_TO, 'TipoSala', 'id_servicio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_sala' => 'Id Sala',
			'numero_sala' => 'Numero Sala',
			'ubicacion_sala' => 'Ubicacion Sala',
			'estado_sala' => 'Estado Sala',
			'id_servicio' => 'Tipo de Sala',
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

		$criteria->compare('id_sala',$this->id_sala);
		$criteria->compare('numero_sala',$this->numero_sala);
		$criteria->compare('ubicacion_sala',$this->ubicacion_sala,true);
		$criteria->compare('estado_sala',$this->estado_sala,true);
		$criteria->compare('id_servicio',$this->id_servicio);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sala the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
