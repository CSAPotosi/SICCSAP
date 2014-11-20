<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'programacion-cita-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'fecha_de_registro',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fecha',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'hora',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_paciente',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_medico',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
