<?php

/**
 * This is the model class for table "diagnostico_internacion".
 *
 * The followings are the available columns in table 'diagnostico_internacion':
 * @property integer $id_diagnostico
 * @property string $fecha_diagnostico
 * @property string $evaluacion_medica
 *
 * The followings are the available model relations:
 * @property DiagnosticoInternacionCie10[] $diagnosticoInternacionCie10s
 */
class DiagnosticoInternacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'diagnostico_internacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha_diagnostico, evaluacion_medica', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_diagnostico, fecha_diagnostico, evaluacion_medica', 'safe', 'on'=>'search'),
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
			'diagnosticoInternacionCie10s' => array(self::HAS_MANY, 'DiagnosticoInternacionCie10', 'id_diagnostico'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_diagnostico' => 'Id Diagnostico',
			'fecha_diagnostico' => 'Fecha Diagnostico',
			'evaluacion_medica' => 'Evaluacion Medica',
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

		$criteria->compare('id_diagnostico',$this->id_diagnostico);
		$criteria->compare('fecha_diagnostico',$this->fecha_diagnostico,true);
		$criteria->compare('evaluacion_medica',$this->evaluacion_medica,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DiagnosticoInternacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
