<?php

/**
 * This is the model class for table "historial_costo".
 *
 * The followings are the available columns in table 'historial_costo':
 * @property integer $id_historial_costo
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property double $monto
 * @property integer $id_servicio
 */
class HistorialCosto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'historial_costo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('monto', 'required'),
			array('id_servicio', 'numerical', 'integerOnly'=>true),
			array('monto', 'numerical'),
			array('fecha_fin', 'safe'),
            array('fecha_inicio','default','value'=>date('d-m-Y')),
            array('monto','default','value'=>0),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_historial_costo, fecha_inicio, fecha_fin, monto, id_servicio, tipo_servicio', 'safe', 'on'=>'search'),
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
			'id_historial_costo' => 'Id Historial Costo',
			'fecha_inicio' => 'Fecha Inicio',
			'fecha_fin' => 'Fecha Fin',
			'monto' => 'Monto',
			'id_servicio' => 'Id Servicio',
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

		$criteria->compare('id_historial_costo',$this->id_historial_costo);
		$criteria->compare('fecha_inicio',$this->fecha_inicio,true);
		$criteria->compare('fecha_fin',$this->fecha_fin,true);
		$criteria->compare('monto',$this->monto);
		$criteria->compare('id_servicio',$this->id_servicio);
        $criteria->compare('tipo_servicio',$this->tipo_servicio,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HistorialCosto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
