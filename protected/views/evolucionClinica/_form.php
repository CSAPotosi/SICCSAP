<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'evolucion-clinica-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'fecha_revision',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'estado_paciente',array('class'=>'span5','maxlength'=>25)); ?>

	<?php echo $form->textAreaRow($model,'observaciones',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'recomendaciones',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'id_internacion',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
