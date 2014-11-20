<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'historial-internacion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'fecha_admicion',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fehca_egreso',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'motivo_egreso',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'motivo_ingreso',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'id_historial',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
