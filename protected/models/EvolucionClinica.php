<?php

/**
 * This is the model class for table "evolucion_clinica".
 *
 * The followings are the available columns in table 'evolucion_clinica':
 * @property integer $id_evolucion_clinica
 * @property string $fecha_revision
 * @property string $estado_paciente
 * @property string $observaciones
 * @property string $recomendaciones
 * @property integer $id_internacion
 *
 * The followings are the available model relations:
 * @property Internacion $idInternacion
 */
class EvolucionClinica extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'evolucion_clinica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_internacion', 'numerical', 'integerOnly'=>true),
			array('estado_paciente', 'length', 'max'=>25),
			array('fecha_revision, observaciones, recomendaciones', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_evolucion_clinica, fecha_revision, estado_paciente, observaciones, recomendaciones, id_internacion', 'safe', 'on'=>'search'),
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
			'idInternacion' => array(self::BELONGS_TO, 'Internacion', 'id_internacion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_evolucion_clinica' => 'Id Evolucion Clinica',
			'fecha_revision' => 'Fecha Revision',
			'estado_paciente' => 'Estado Paciente',
			'observaciones' => 'Observaciones',
			'recomendaciones' => 'Recomendaciones',
			'id_internacion' => 'Id Internacion',
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

		$criteria->compare('id_evolucion_clinica',$this->id_evolucion_clinica);
		$criteria->compare('fecha_revision',$this->fecha_revision,true);
		$criteria->compare('estado_paciente',$this->estado_paciente,true);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('recomendaciones',$this->recomendaciones,true);
		$criteria->compare('id_internacion',$this->id_internacion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EvolucionClinica the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
