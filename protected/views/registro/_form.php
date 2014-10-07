<?php
/* @var $this RegistroController */
/* @var $model Registro */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registro-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'Empleado'); ?>
        <?php echo $form->dropDownList($model,'id_empleado',CHtml::listData(empleado::model()->findAll(),"id_empleado","nombres")); ?>
        <?php echo $form->error($model,'id_empleado'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'horario'); ?>
        <?php echo $form->dropDownList($model,'id_horario',CHtml::listData(horario::model()->findAll(),"id_horario","nombre")); ?>
        <?php echo $form->error($model,'id_horario'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'Departamento'); ?>
        <?php echo $form->dropDownList($model,'id_departamento',CHtml::listData(departamento::model()->findAll(),"id_departamento","nombre")); ?>
        <?php echo $form->error($model,'id_departamento'); ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_de_registro'); ?>
		<?php echo $form->textField($model,'fecha_de_registro'); ?>
		<?php echo $form->error($model,'fecha_de_registro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_ingreso'); ?>
		<?php echo $form->textField($model,'hora_ingreso'); ?>
		<?php echo $form->error($model,'hora_ingreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_salida'); ?>
		<?php echo $form->textField($model,'hora_salida'); ?>
		<?php echo $form->error($model,'hora_salida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'excepcion'); ?>
		<?php echo $form->textField($model,'excepcion',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'excepcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->