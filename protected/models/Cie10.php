<?php

/**
 * This is the model class for table "cie10".
 *
 * The followings are the available columns in table 'cie10':
 * @property string $codigo_cie10
 * @property string $titulo_cie10
 * @property string $descripcion_cie10
 * @property string $codigo_padre
 *
 * The followings are the available model relations:
 * @property DiagnosticoInternacionCie10[] $diagnosticoInternacionCie10s
 */
class Cie10 extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cie10';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo_cie10', 'required'),
			array('codigo_cie10, codigo_padre', 'length', 'max'=>10),
			array('titulo_cie10', 'length', 'max'=>256),
			array('descripcion_cie10', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codigo_cie10, titulo_cie10, descripcion_cie10, codigo_padre', 'safe', 'on'=>'search'),
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
			'diagnosticoInternacionCie10s' => array(self::HAS_MANY, 'DiagnosticoInternacionCie10', 'codigo_cie10'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'codigo_cie10' => 'Codigo Cie10',
			'titulo_cie10' => 'Titulo Cie10',
			'descripcion_cie10' => 'Descripcion Cie10',
			'codigo_padre' => 'Codigo Padre',
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

		$criteria->compare('codigo_cie10',$this->codigo_cie10,true);
		$criteria->compare('titulo_cie10',$this->titulo_cie10,true);
		$criteria->compare('descripcion_cie10',$this->descripcion_cie10,true);
		$criteria->compare('codigo_padre',$this->codigo_padre,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cie10 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
