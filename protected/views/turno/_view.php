<?php
/* @var $this TurnoController */
/* @var $data Turno */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_turno')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_turno), array('view', 'id'=>$data->id_turno)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horario_entrada')); ?>:</b>
	<?php echo CHtml::encode($data->horario_entrada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horario_salida')); ?>:</b>
	<?php echo CHtml::encode($data->horario_salida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_horario')); ?>:</b>
	<?php echo CHtml::encode($data->id_horario); ?>
	<br />


</div>