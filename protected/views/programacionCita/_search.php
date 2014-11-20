<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id_programacion_cita',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fecha_de_registro',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fecha',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'hora',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_paciente',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_medico',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
