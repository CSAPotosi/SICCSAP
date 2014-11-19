<?php

/**
 * This is the model class for table "examen_laboratorio".
 *
 * The followings are the available columns in table 'examen_laboratorio':
 * @property integer $id_servicio
 * @property string $tipo_servicio
 * @property string $fecha_creacion_servicio
 * @property string $fecha_modificacion_servicio
 * @property string $nombre_examen
 * @property string $descripcion_examen
 */
class ExamenLaboratorio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'examen_laboratorio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo_servicio', 'length', 'max'=>20),
			array('nombre_examen', 'length', 'max'=>128),
			array('fecha_creacion_servicio, fecha_modificacion_servicio, descripcion_examen', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_servicio, tipo_servicio, fecha_creacion_servicio, fecha_modificacion_servicio, nombre_examen, descripcion_examen', 'safe', 'on'=>'search'),
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
			'id_servicio' => 'Id Servicio',
			'tipo_servicio' => 'Tipo Servicio',
			'fecha_creacion_servicio' => 'Fecha Creacion Servicio',
			'fecha_modificacion_servicio' => 'Fecha Modificacion Servicio',
			'nombre_examen' => 'Nombre Examen',
			'descripcion_examen' => 'Descripcion Examen',
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
		$criteria->compare('tipo_servicio',$this->tipo_servicio,true);
		$criteria->compare('fecha_creacion_servicio',$this->fecha_creacion_servicio,true);
		$criteria->compare('fecha_modificacion_servicio',$this->fecha_modificacion_servicio,true);
		$criteria->compare('nombre_examen',$this->nombre_examen,true);
		$criteria->compare('descripcion_examen',$this->descripcion_examen,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ExamenLaboratorio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
