<?php

/**
 * This is the model class for table "categoria_servicio".
 *
 * The followings are the available columns in table 'categoria_servicio':
 * @property integer $id_categoria_servicio
 * @property string $titulo_categoria_servicio
 * @property string $descripcion_categoria_servicio
 *
 * The followings are the available model relations:
 * @property DetalleServicio[] $detalleServicios
 */
class CategoriaServicio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'categoria_servicio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('titulo_categoria_servicio', 'length', 'max'=>128),
			array('descripcion_categoria_servicio', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_categoria_servicio, titulo_categoria_servicio, descripcion_categoria_servicio', 'safe', 'on'=>'search'),
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
			'detalleServicios' => array(self::HAS_MANY, 'DetalleServicio', 'id_categoria_servicio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_categoria_servicio' => 'Id Categoria Servicio',
			'titulo_categoria_servicio' => 'Titulo Categoria Servicio',
			'descripcion_categoria_servicio' => 'Descripcion Categoria Servicio',
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

		$criteria->compare('id_categoria_servicio',$this->id_categoria_servicio);
		$criteria->compare('titulo_categoria_servicio',$this->titulo_categoria_servicio,true);
		$criteria->compare('descripcion_categoria_servicio',$this->descripcion_categoria_servicio,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CategoriaServicio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
