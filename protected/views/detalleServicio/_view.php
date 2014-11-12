<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_servicio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_servicio),array('view','id'=>$data->id_servicio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo_detalle')); ?>:</b>
	<?php echo CHtml::encode($data->titulo_detalle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_detalle')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_detalle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_categoria_servicio')); ?>:</b>
	<?php echo CHtml::encode($data->id_categoria_servicio); ?>
	<br />


</div>