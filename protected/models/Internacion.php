<?php

/**
 * This is the model class for table "internacion".
 *
 * The followings are the available columns in table 'internacion':
 * @property integer $id_internacion
 * @property string $fecha_admision
 * @property string $motivo_ingreso
 * @property string $fecha_egreso
 * @property string $motivo_egreso
 * @property integer $id_historial
 *
 * The followings are the available model relations:
 * @property Cirugia[] $cirugias
 * @property HistorialMedico $idHistorial
 * @property EvolucionClinica[] $evolucionClinicas
 */
class Internacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'internacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_historial', 'numerical', 'integerOnly'=>true),
			array('motivo_ingreso, motivo_egreso', 'length', 'max'=>25),
			array('fecha_admision, fecha_egreso', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_internacion, fecha_admision, motivo_ingreso, fecha_egreso, motivo_egreso, id_historial', 'safe', 'on'=>'search'),
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
			'cirugias' => array(self::HAS_MANY, 'Cirugia', 'id_internacion'),
			'idHistorial' => array(self::BELONGS_TO, 'HistorialMedico', 'id_historial'),
			'evolucionClinicas' => array(self::HAS_MANY, 'EvolucionClinica', 'id_internacion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_internacion' => 'Id Internacion',
			'fecha_admision' => 'Fecha Admision',
			'motivo_ingreso' => 'Motivo Ingreso',
			'fecha_egreso' => 'Fecha Egreso',
			'motivo_egreso' => 'Motivo Egreso',
			'id_historial' => 'Id Historial',
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

		$criteria->compare('id_internacion',$this->id_internacion);
		$criteria->compare('fecha_admision',$this->fecha_admision,true);
		$criteria->compare('motivo_ingreso',$this->motivo_ingreso,true);
		$criteria->compare('fecha_egreso',$this->fecha_egreso,true);
		$criteria->compare('motivo_egreso',$this->motivo_egreso,true);
		$criteria->compare('id_historial',$this->id_historial);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Internacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
