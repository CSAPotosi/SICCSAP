<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_evolucion_clinica')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_evolucion_clinica),array('view','id'=>$data->id_evolucion_clinica)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_revision')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_revision); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->estado_paciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recomendaciones')); ?>:</b>
	<?php echo CHtml::encode($data->recomendaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_internacion')); ?>:</b>
	<?php echo CHtml::encode($data->id_internacion); ?>
	<br />


</div>