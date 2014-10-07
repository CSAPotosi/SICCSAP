<?php
/* @var $this TipoSalaController */
/* @var $data TipoSala */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_servicio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_servicio), array('view', 'id'=>$data->id_servicio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion_servicio')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion_servicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_modificacion_servicio')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_modificacion_servicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_tipo_sala')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_tipo_sala); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_tipo_sala')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_tipo_sala); ?>
	<br />


</div>