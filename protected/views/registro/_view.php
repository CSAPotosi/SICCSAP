<?php
/* @var $this RegistroController */
/* @var $data Registro */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_registro')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_registro), array('view', 'id'=>$data->id_registro)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_empleado')); ?>:</b>
	<?php echo CHtml::encode($data->id_empleado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_horario')); ?>:</b>
	<?php echo CHtml::encode($data->id_horario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_departamento')); ?>:</b>
	<?php echo CHtml::encode($data->id_departamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_de_registro')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_de_registro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->hora_ingreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_salida')); ?>:</b>
	<?php echo CHtml::encode($data->hora_salida); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('excepcion')); ?>:</b>
	<?php echo CHtml::encode($data->excepcion); ?>
	<br />

	*/ ?>

</div>