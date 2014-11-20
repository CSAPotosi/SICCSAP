<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_programacion_cita')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_programacion_cita),array('view','id'=>$data->id_programacion_cita)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_de_registro')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_de_registro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->id_paciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_medico')); ?>:</b>
	<?php echo CHtml::encode($data->id_medico); ?>
	<br />


</div>