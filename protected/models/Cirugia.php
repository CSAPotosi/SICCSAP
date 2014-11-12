<?php

/**
 * This is the model class for table "cirugia".
 *
 * The followings are the available columns in table 'cirugia':
 * @property integer $id_cirugia
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property integer $id_quirofano
 * @property integer $id_historial
 * @property integer $id_internacion
 *
 * The followings are the available model relations:
 * @property Quirofano $idQuirofano
 * @property HistorialMedico $idHistorial
 * @property Internacion $idInternacion
 */
class Cirugia extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cirugia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_quirofano, id_historial, id_internacion', 'numerical', 'integerOnly'=>true),
			array('fecha_inicio, fecha_fin', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cirugia, fecha_inicio, fecha_fin, id_quirofano, id_historial, id_internacion', 'safe', 'on'=>'search'),
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
			'idQuirofano' => array(self::BELONGS_TO, 'Quirofano', 'id_quirofano'),
			'idHistorial' => array(self::BELONGS_TO, 'HistorialMedico', 'id_historial'),
			'idInternacion' => array(self::BELONGS_TO, 'Internacion', 'id_internacion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cirugia' => 'Id Cirugia',
			'fecha_inicio' => 'Fecha Inicio',
			'fecha_fin' => 'Fecha Fin',
			'id_quirofano' => 'Id Quirofano',
			'id_historial' => 'Id Historial',
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

		$criteria->compare('id_cirugia',$this->id_cirugia);
		$criteria->compare('fecha_inicio',$this->fecha_inicio,true);
		$criteria->compare('fecha_fin',$this->fecha_fin,true);
		$criteria->compare('id_quirofano',$this->id_quirofano);
		$criteria->compare('id_historial',$this->id_historial);
		$criteria->compare('id_internacion',$this->id_internacion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cirugia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
