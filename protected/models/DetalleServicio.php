<?php

/**
 * This is the model class for table "detalle_servicio".
 *
 * The followings are the available columns in table 'detalle_servicio':
 * @property integer $id_servicio
 * @property string $fecha_creacion_servicio
 * @property string $fecha_modificacion_servicio
 * @property string $titulo_detalle
 * @property string $descripcion_detalle
 * @property integer $id_categoria_servicio
 *
 * The followings are the available model relations:
 * @property CategoriaServicio $idCategoriaServicio
 */
class DetalleServicio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'detalle_servicio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_categoria_servicio', 'numerical', 'integerOnly'=>true),
			array('titulo_detalle', 'length', 'max'=>128),
			array('fecha_creacion_servicio, fecha_modificacion_servicio, descripcion_detalle', 'safe'),
            array('fecha_creacion_servicio','default','value'=>date('d-m-Y')),
            array('tipo_servicio','default','value'=>'servicio'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_servicio, fecha_creacion_servicio, fecha_modificacion_servicio, titulo_detalle, descripcion_detalle, id_categoria_servicio', 'safe', 'on'=>'search'),
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
			'idCategoriaServicio' => array(self::BELONGS_TO, 'CategoriaServicio', 'id_categoria_servicio'),
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
			'titulo_detalle' => 'Titulo Detalle',
			'descripcion_detalle' => 'Descripcion Detalle',
			'id_categoria_servicio' => 'Id Categoria Servicio',
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
		$criteria->compare('titulo_detalle',$this->titulo_detalle,true);
		$criteria->compare('descripcion_detalle',$this->descripcion_detalle,true);
		$criteria->compare('id_categoria_servicio',$this->id_categoria_servicio);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DetalleServicio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
