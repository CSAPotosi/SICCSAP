<?php
/* @var $this TurnoController */
/* @var $model Turno */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'turno-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horario_entrada'); ?>
		<?php echo $form->textField($model,'horario_entrada'); ?>
		<?php echo $form->error($model,'horario_entrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horario_salida'); ?>
		<?php echo $form->textField($model,'horario_salida'); ?>
		<?php echo $form->error($model,'horario_salida'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,'horario'); ?>
        <?php echo $form->dropDownList($model,'id_horario',CHtml::listData(horario::model()->findAll(),"id_horario","nombre")); ?>
        <?php echo $form->error($model,'id_horario'); ?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->