<?php
/* @var $this SalaController */
/* @var $model Sala */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_sala'); ?>
		<?php echo $form->textField($model,'id_sala'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero_sala'); ?>
		<?php echo $form->textField($model,'numero_sala'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ubicacion_sala'); ?>
		<?php echo $form->textField($model,'ubicacion_sala',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado_sala'); ?>
		<?php echo $form->textField($model,'estado_sala',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_servicio'); ?>
		<?php echo $form->textField($model,'id_servicio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->