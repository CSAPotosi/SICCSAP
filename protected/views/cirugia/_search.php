<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id_cirugia',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fecha_inicio',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fecha_fin',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_quirofano',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_historial',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_internacion',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
