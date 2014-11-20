<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'turno-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
    <?php echo $form->labelEx($model,'nombre'); ?>
	<?php echo $form->textField($model,'nombre',array('class'=>'span5','maxlength'=>50)); ?>
    <?php echo $form->labelEx($model,'horario de entrada'); ?>
	<?php echo $form->textField($model,'hora_ingreso',array('class'=>'span5')); ?>
    <?php echo $form->labelEx($model,'horario de salida'); ?>
	<?php echo $form->textField($model,'hora_salida',array('class'=>'span5')); ?>
    <?php echo $form->labelEx($model,'horario'); ?>
    <?php echo $form->dropDownList($model,'id_horario',CHtml::listData(horario::model()->findAll(),"id_horario","nombre")); ?>

<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
