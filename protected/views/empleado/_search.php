<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id_persona',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'dni',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'nit',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'nombres',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'apellidos',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'direccion',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'sexo',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'localidad',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'pais',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'telefono',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'celular',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'fecha_de_nacimiento',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fotografia',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'estado_civil',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'id_empleado',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_horario',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fecha_de_contratacion',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'cargo',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'id_departamento',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'estado',array('class'=>'span5','maxlength'=>15)); ?>

	<?php echo $form->textFieldRow($model,'motivo_cambio_estado',array('class'=>'span5','maxlength'=>128)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
