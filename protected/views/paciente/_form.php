<?php $form=$this->beginWidget('CActiveForm',array(
	'id'=>'paciente-form',
	'enableAjaxValidation'=>false,
    'clientOptions'=>array('validateOnSubmit'=> true,),
    'htmlOptions'=>array('class'=>"form-horizontal",),
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>
    <?php echo $form->errorSummary($model); ?>
<div class="form-group">

    <div class="col-sm-5">
        <?php echo $form->textField($model,'dni',array('class'=>'form-control','placeholder'=>"Dni")); ?>
    </div>
</div>
<div class="form-group">

    <div class="col-sm-5">
    <?php echo $form->textField($model,'nit',array('class'=>'form-control','maxlength'=>20, 'placeholder'=>"Nit")); ?>
    </div>
</div>
<div class="form-group">

    <div class="col-sm-5">
	<?php echo $form->textField($model,'nombres',array('class'=>'form-control','maxlength'=>100, 'placeholder'=>"Nombres")); ?>
    </div>
</div>
<div class="form-group">

    <div class="col-sm-5">
	<?php echo $form->textField($model,'apellidos',array('class'=>'form-control','maxlength'=>100, 'placeholder'=>"Apellidos")); ?>
    </div>
</div>
<div class="form-group">

    <div class="col-sm-5">
	<?php echo $form->textField($model,'direccion',array('class'=>'form-control','maxlength'=>100, 'placeholder'=>"Direccion")); ?>
    </div>
</div>
<div class="form-group">

    <div class="col-sm-5">
	<?php echo $form->dropDownList($model,'sexo',array('M'=>'Masculino','F'=>'Femenino'),array('class'=>'form-control')); ?>
    </div>
</div>
<div class="form-group">

    <div class="col-sm-5">
	<?php echo $form->textField($model,'localidad',array('class'=>'form-control','maxlength'=>40, 'placeholder'=>"Localidad")); ?>
    </div>
</div>
<div class="form-group">

    <div class="col-sm-5">
	<?php echo $form->textField($model,'pais',array('class'=>'form-control','maxlength'=>40, 'placeholder'=>"Pais")); ?>
    </div>
</div>
<div class="form-group">

    <div class="col-sm-5">
	<?php echo $form->textField($model,'telefono',array('class'=>'form-control','maxlength'=>20, 'placeholder'=>"Telefono")); ?>
    </div>
</div>
<div class="form-group">

    <div class="col-sm-5">
	<?php echo $form->textField($model,'celular',array('class'=>'form-control','maxlength'=>20, 'placeholder'=>"Celular")); ?>
    </div>
</div>
<div class="form-group">

    <div class="col-sm-5">
	<?php echo $form->textField($model,'email',array('class'=>'form-control','maxlength'=>100, 'placeholder'=>"Direcion Email")); ?>
    </div>
</div>
<div class="form-group">

    <div class="col-sm-5"><?php
    $this->widget(
        'ext.jui.EJuiDateTimePicker',
        array(
            'model'     => $model,
            'attribute' => 'fecha_de_nacimiento',
            'language'=> 'es',//default Yii::app()->language
            'mode'    => 'datetime',//'datetime' or 'time' ('datetime' default)
            'options'   => array(
                'dateFormat' => 'dd.mm.yy',
                'timeFormat' => 'hh:mm tt',// default
            ),
        )
    );
    ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-5">
	<?php echo $form->textField($model,'fotografia',array('class'=>'form-control','maxlength'=>100)); ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-5">
	<?php echo $form->dropDownList($model,'estado_civil',array("1"=>"Soltero","2"=>"Casado","3"=>"Divorciado","4"=>"Viudo","5"=>"Union Libre"),array('class'=>'form-control')); ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-5">
	<?php echo $form->textField($model,'ocupacion_paciente',array('class'=>'form-control','maxlength'=>50, 'placeholder'=>"Ocupacion del Paciente")); ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-5">
	<?php echo $form->dropDownList($model,'grupo_sanguineo_paciente',array("1"=>"O-","2"=>"O+","3"=>"A-","4"=>"A+","5"=>"B-","6"=>"B+","7"=>"AB-","8"=>"AB+"),array('class'=>'form-control')); ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-5">
	<h1>Datos de responsable del paciente</h1>
    <?php echo $form->textField($model,'nombre_responsable',array('class'=>'form-control','maxlength'=>128, 'placeholder'=>"Nombre responsable")); ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-5">
	<?php echo $form->textField($model,'telefono_responsable',array('class'=>'form-control','maxlength'=>30, 'placeholder'=>"Telefono del responsable")); ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-5">
	<?php echo $form->textField($model,'relacion_responsable_paciente',array('class'=>'form-control','maxlength'=>20, 'placeholder'=>"Relacion")); ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-5">
	<?php echo $form->dropDownList($model,'tipo_paciente',array("1"=>"Privado","2"=>"Asegurado"),array('class'=>'form-control')); ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-5">
	<?php echo $form->dropDownList($model,'estado_paciente',array("1"=>"Activo","2"=>"Inactivo"),array('class'=>'form-control')); ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-5">
<?php
$this->widget(
    'ext.jui.EJuiDateTimePicker',
    array(
        'model'     => $model,
        'attribute' => 'fecha_muerte',
        'language'=> 'es',//default Yii::app()->language
        'mode'    => 'datetime',//'datetime' or 'time' ('datetime' default)
        'options'   => array(
            'dateFormat' => 'dd.mm.yy',
            'timeFormat' => 'hh:mm tt',// default
        ),
    )
);
?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-5">
	<?php echo $form->textField($model,'id_empresa',CHtml::listData(empresa::model()->findAll(),"id_empresa","nombre_empresa")); ?>
    </div>
</div>
    </ul>
    </table>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>
<?php $this->endWidget(); ?>
