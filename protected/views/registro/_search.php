<?php
/* @var $this RegistroController */
/* @var $model Registro */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_registro'); ?>
		<?php echo $form->textField($model,'id_registro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_empleado'); ?>
		<?php echo $form->textField($model,'id_empleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_horario'); ?>
		<?php echo $form->textField($model,'id_horario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_departamento'); ?>
		<?php echo $form->textField($model,'id_departamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_de_registro'); ?>
		<?php echo $form->textField($model,'fecha_de_registro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora_ingreso'); ?>
		<?php echo $form->textField($model,'hora_ingreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora_salida'); ?>
		<?php echo $form->textField($model,'hora_salida'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'excepcion'); ?>
		<?php echo $form->textField($model,'excepcion',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->