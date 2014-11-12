<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_quirofano')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_quirofano),array('view','id'=>$data->id_quirofano)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_quirofano')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_quirofano); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_quirofano')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_quirofano); ?>
	<br />


</div>