<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empleado-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'dni'); ?>
		<?php echo $form->textField($model,'dni',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'dni'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nit'); ?>
		<?php echo $form->textField($model,'nit',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombres'); ?>
		<?php echo $form->textField($model,'nombres',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellidos'); ?>
		<?php echo $form->textField($model,'apellidos',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'apellidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sexo'); ?>
		<?php echo $form->dropDownList($model,'sexo',array('M'=>'Masculino','F'=>'Femenino')); ?>
		<?php echo $form->error($model,'sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'localidad'); ?>
		<?php echo $form->textField($model,'localidad',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'localidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pais'); ?>
		<?php echo $form->textField($model,'pais',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'pais'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'celular'); ?>
		<?php echo $form->textField($model,'celular',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'celular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_de_nacimiento'); ?>
        <?php
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
		<?php echo $form->error($model,'fecha_de_nacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fotografia'); ?>
		<?php echo $form->textField($model,'fotografia',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'fotografia'); ?>
	</div>



	<div class="row">
		<?php echo $form->labelEx($model,'estado_civil'); ?>
		<?php echo $form->dropDownList($model,'estado_civil',array("1"=>"Soltero","2"=>"Casado","3"=>"Divorciado","4"=>"Viudo","5"=>"Union Libre")); ?>
		<?php echo $form->error($model,'estado_civil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_de_contratacion'); ?>
		<?php
        $this->widget("zii.widgets.jui.CJuiDatePicker",array(
                "attribute"=>"fecha_de_contratacion",
                "model"=>$model,
                "language"=>"es",
                "options"=>array(
                    "dateFormat"=>"dd-mm-yy"
                )
        ));
        ?>
		<?php echo $form->error($model,'fecha_de_contratacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cargo'); ?>
		<?php echo $form->textField($model,'cargo',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'cargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Departamento'); ?>
		<?php echo $form->dropDownList($model,'id_departamento',CHtml::listData(departamento::model()->findAll(),"id_departamento","nombre")); ?>
		<?php echo $form->error($model,'id_departamento'); ?>
	</div>


    <?php if (!$model->isNewRecord):?>
        <div class="row">
            <?php echo $form->labelEx($model,'estado'); ?>
            <?php echo $form->dropDownList($model,'estado',array('A'=>'Activo','I'=>'Inactivo')); ?>
            <?php echo $form->error($model,'estado'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'motivo_cambio_estado'); ?>
            <?php echo $form->textField($model,'motivo_cambio_estado',array('size'=>60,'maxlength'=>128)); ?>
            <?php echo $form->error($model,'motivo_cambio_estado'); ?>
        </div>
    <?php endif; ?>
    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->