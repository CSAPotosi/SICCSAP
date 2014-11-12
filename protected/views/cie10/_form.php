<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'cie10-form',
	'enableAjaxValidation'=>false,
    'htmlOptions'=>array(),
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'codigo_cie10',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'titulo_cie10',array('class'=>'span5','maxlength'=>256)); ?>

	<?php echo $form->textAreaRow($model,'descripcion_cie10',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'codigo_padre',array('class'=>'span5','maxlength'=>10)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
