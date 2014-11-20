<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_diagnostico')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_diagnostico),array('view','id'=>$data->id_diagnostico)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enfermedad')); ?>:</b>
	<?php echo CHtml::encode($data->enfermedad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tratamiento')); ?>:</b>
	<?php echo CHtml::encode($data->tratamiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ritmo_cardiaco')); ?>:</b>
	<?php echo CHtml::encode($data->ritmo_cardiaco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('frecuencia_respiratoria')); ?>:</b>
	<?php echo CHtml::encode($data->frecuencia_respiratoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('temperatura')); ?>:</b>
	<?php echo CHtml::encode($data->temperatura); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('precion_arterial')); ?>:</b>
	<?php echo CHtml::encode($data->precion_arterial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peso')); ?>:</b>
	<?php echo CHtml::encode($data->peso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('talla')); ?>:</b>
	<?php echo CHtml::encode($data->talla); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_historial_consulta')); ?>:</b>
	<?php echo CHtml::encode($data->id_historial_consulta); ?>
	<br />

	*/ ?>

</div>