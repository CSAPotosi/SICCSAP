<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id_categoria_servicio',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'titulo_categoria_servicio',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textAreaRow($model,'descripcion_categoria_servicio',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
