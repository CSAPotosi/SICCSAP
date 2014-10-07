<?php
/* @var $this TurnoController */
/* @var $model Turno */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_turno'); ?>
		<?php echo $form->textField($model,'id_turno'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'horario_entrada'); ?>
		<?php echo $form->textField($model,'horario_entrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'horario_salida'); ?>
		<?php echo $form->textField($model,'horario_salida'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_horario'); ?>
		<?php echo $form->textField($model,'id_horario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->