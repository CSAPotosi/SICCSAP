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

	<?php echo $form->textFieldRow($model,'id_paciente',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'ocupacion_paciente',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'grupo_sanguineo_paciente',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'nombre_responsable',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'telefono_responsable',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'relacion_responsable_paciente',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'tipo_paciente',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'estado_paciente',array('class'=>'span5','maxlength'=>2)); ?>

	<?php echo $form->textFieldRow($model,'fecha_muerte',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_empresa',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
