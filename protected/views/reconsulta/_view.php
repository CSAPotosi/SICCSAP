<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_reconsulta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_reconsulta),array('view','id'=>$data->id_reconsulta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_reconsulta')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_reconsulta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('evolucion')); ?>:</b>
	<?php echo CHtml::encode($data->evolucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_historial_consulta')); ?>:</b>
	<?php echo CHtml::encode($data->id_historial_consulta); ?>
	<br />


</div>