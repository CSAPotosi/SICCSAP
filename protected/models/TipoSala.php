<?php

/**
 * This is the model class for table "tipo_sala".
 *
 * The followings are the available columns in table 'tipo_sala':
 * @property integer $id_servicio
 * @property string $fecha_creacion_servicio
 * @property string $fecha_modificacion_servicio
 * @property string $nombre_tipo_sala
 * @property string $descripcion_tipo_sala
 *
 * The followings are the available model relations:
 * @property Sala[] $salas
 */
class TipoSala extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tipo_sala';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_tipo_sala', 'required'),
			array('nombre_tipo_sala', 'length', 'max'=>50),
            array('tipo_servicio', 'length', 'max'=>20),
            array('tipo_servicio', 'default', 'value'=>'sala'),
			array('descripcion_tipo_sala', 'length', 'max'=>128),
			array('fecha_creacion_servicio, fecha_modificacion_servicio', 'safe'),
            array('fecha_creacion_servicio','default','value'=>date('d-m-Y')),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_servicio,tipo_servicio, fecha_creacion_servicio, fecha_modificacion_servicio, nombre_tipo_sala, descripcion_tipo_sala', 'safe', 'on'=>'search'),
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
			'salas' => array(self::HAS_MANY, 'Sala', 'id_servicio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_servicio' => 'Id Servicio',
			'fecha_creacion_servicio' => 'Fecha Creacion Servicio',
			'fecha_modificacion_servicio' => 'Fecha Modificacion Servicio',
			'nombre_tipo_sala' => 'Tipo Sala',
			'descripcion_tipo_sala' => 'Descripcion',
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

		$criteria->compare('id_servicio',$this->id_servicio);
		$criteria->compare('fecha_creacion_servicio',$this->fecha_creacion_servicio,true);
		$criteria->compare('fecha_modificacion_servicio',$this->fecha_modificacion_servicio,true);
		$criteria->compare('nombre_tipo_sala',$this->nombre_tipo_sala,true);
		$criteria->compare('descripcion_tipo_sala',$this->descripcion_tipo_sala,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TipoSala the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
