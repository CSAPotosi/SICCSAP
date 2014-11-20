<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'diagnostico-consulta-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'enfermedad',array('class'=>'span5','maxlength'=>15)); ?>

	<?php echo $form->textFieldRow($model,'tratamiento',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'observaciones',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'ritmo_cardiaco',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'frecuencia_respiratoria',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'temperatura',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'precion_arterial',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'peso',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'talla',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'id_historial_consulta',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
