<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'registro-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'id_empleado',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fecha_de_registro',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'hora_ingreso',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'hora_salida',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'excepcion',array('class'=>'span5','maxlength'=>20)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
