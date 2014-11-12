<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'cirugia-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'fecha_inicio',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fecha_fin',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_quirofano',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_historial',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_internacion',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
