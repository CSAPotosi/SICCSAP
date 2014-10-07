<?php
/* @var $this SalaController */
/* @var $model Sala */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sala-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'numero_sala'); ?>
		<?php echo $form->textField($model,'numero_sala'); ?>
		<?php echo $form->error($model,'numero_sala'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ubicacion_sala'); ?>
		<?php echo $form->textField($model,'ubicacion_sala',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'ubicacion_sala'); ?>
	</div>
    <?php if(!$model->isNewRecord):?>
	<div class="row">
		<?php echo $form->labelEx($model,'estado_sala'); ?>
		<?php echo $form->textField($model,'estado_sala',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'estado_sala'); ?>
	</div>
    <?php endif; ?>
	<div class="row">
		<?php echo $form->labelEx($model,'id_servicio'); ?>
		<?php echo $form->dropDownList($model,'id_servicio',CHtml::listData( TipoSala::model()->findAll(),'id_servicio','nombre_tipo_sala')); ?>
		<?php echo $form->error($model,'id_servicio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->