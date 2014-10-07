<?php
/* @var $this TipoSalaController */
/* @var $modelTipoSala TipoSala */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tipo-sala-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary(array($modelTipoSala,$modelCosto)); ?>

	
	<div class="row">
		<?php echo $form->labelEx($modelTipoSala,'nombre_tipo_sala'); ?>
		<?php echo $form->textField($modelTipoSala,'nombre_tipo_sala',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($modelTipoSala,'nombre_tipo_sala'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelTipoSala,'descripcion_tipo_sala'); ?>
		<?php echo $form->textField($modelTipoSala,'descripcion_tipo_sala',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($modelTipoSala,'descripcion_tipo_sala'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($modelCosto,'monto'); ?>
        <?php echo $form->textField($modelCosto,'monto'); ?>
        <?php echo $form->error($modelCosto,'monto'); ?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($modelTipoSala->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->