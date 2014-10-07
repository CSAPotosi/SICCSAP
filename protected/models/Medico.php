<?php

/**
 * This is the model class for table "medico".
 *
 * The followings are the available columns in table 'medico':
 * @property integer $id_persona
 * @property string $dni
 * @property string $nit
 * @property string $nombres
 * @property string $apellidos
 * @property string $direccion
 * @property string $sexo
 * @property string $localidad
 * @property string $pais
 * @property string $telefono
 * @property string $celular
 * @property string $email
 * @property string $fecha_de_nacimiento
 * @property string $fotografia
 * @property string $estado_civil
 * @property integer $id_medico
 * @property string $matricula
 * @property string $colegiatura
 * @property string $estado
 * @property string $motivo_cambio_estado
 *
 * The followings are the available model relations:
 * @property MedicoEspecialidad[] $medicoEspecialidads
 */
class Medico extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'medico';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('apellidos', 'required'),
			array('dni, nit, telefono, celular, estado_civil, matricula', 'length', 'max'=>20),
			array('nombres, apellidos, direccion, email', 'length', 'max'=>100),
			array('sexo, estado', 'length', 'max'=>1),
			array('localidad, pais', 'length', 'max'=>40),
			array('fotografia, motivo_cambio_estado', 'length', 'max'=>128),
			array('colegiatura', 'length', 'max'=>50),
			array('fecha_de_nacimiento', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_persona, dni, nit, nombres, apellidos, direccion, sexo, localidad, pais, telefono, celular, email, fecha_de_nacimiento, fotografia, estado_civil, id_medico, matricula, colegiatura, estado, motivo_cambio_estado', 'safe', 'on'=>'search'),
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
			'medicoEspecialidads' => array(self::HAS_MANY, 'MedicoEspecialidad', 'id_medico'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */


	public function attributeLabels()
	{
		return array(
			'id_persona' => 'Id Persona',
			'dni' => 'Dni',
			'nit' => 'Nit',
			'nombres' => 'Nombres',
			'apellidos' => 'Apellidos',
			'direccion' => 'Direccion',
			'sexo' => 'Sexo',
			'localidad' => 'Localidad',
			'pais' => 'Pais',
			'telefono' => 'Telefono',
			'celular' => 'Celular',
			'email' => 'Email',
			'fecha_de_nacimiento' => 'Fecha De Nacimiento',
			'fotografia' => 'Fotografia',
			'estado_civil' => 'Estado Civil',
			'id_medico' => 'Id Medico',
			'matricula' => 'Matricula',
			'colegiatura' => 'Colegiatura',
			'estado' => 'Estado',
			'motivo_cambio_estado' => 'Motivo Cambio Estado',
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

		$criteria->compare('id_persona',$this->id_persona);
		$criteria->compare('dni',$this->dni,true);
		$criteria->compare('nit',$this->nit,true);
		$criteria->compare('nombres',$this->nombres,true);
		$criteria->compare('apellidos',$this->apellidos,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('localidad',$this->localidad,true);
		$criteria->compare('pais',$this->pais,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('fecha_de_nacimiento',$this->fecha_de_nacimiento,true);
		$criteria->compare('fotografia',$this->fotografia,true);
		$criteria->compare('estado_civil',$this->estado_civil,true);
		$criteria->compare('id_medico',$this->id_medico);
		$criteria->compare('matricula',$this->matricula,true);
		$criteria->compare('colegiatura',$this->colegiatura,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('motivo_cambio_estado',$this->motivo_cambio_estado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Medico the static model class
	 */


	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function  getItemsSexo(){
        return array(
            'M'=>'Masculino',
            'F'=>'Femenino',
        );
    }
}
