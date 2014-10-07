<?php

/**
 * This is the model class for table "cuenta".
 *
 * The followings are the available columns in table 'cuenta':
 * @property integer $id_cuenta
 * @property string $codigo
 * @property string $descripcion
 * @property string $estado
 * @property string $auxiliar
 * @property string $cuenta_padre
 */
class Cuenta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cuenta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo, cuenta_padre', 'length', 'max'=>15),
			array('descripcion', 'length', 'max'=>100),
			array('estado', 'length', 'max'=>1),
			array('auxiliar', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cuenta, codigo, descripcion, estado, auxiliar, cuenta_padre', 'safe', 'on'=>'search'),
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
			'id_cuenta' => 'Id Cuenta',
			'codigo' => 'Codigo',
			'descripcion' => 'Descripcion',
			'estado' => 'Estado',
			'auxiliar' => 'Auxiliar',
			'cuenta_padre' => 'Cuenta Padre',
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
        $sort=new CSort();
        $sort->defaultOrder='codigo ASC';
		$criteria->compare('id_cuenta',$this->id_cuenta);
		$criteria->compare('codigo',$this->codigo,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('auxiliar',$this->auxiliar,true);
		$criteria->compare('cuenta_padre',$this->cuenta_padre,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'sort'=>$sort,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cuenta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
