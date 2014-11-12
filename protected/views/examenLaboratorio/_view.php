<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_servicio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_servicio),array('view','id'=>$data->id_servicio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_examen')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_examen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_examen')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_examen); ?>
	<br />


</div>