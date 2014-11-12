<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_categoria_servicio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_categoria_servicio),array('view','id'=>$data->id_categoria_servicio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo_categoria_servicio')); ?>:</b>
	<?php echo CHtml::encode($data->titulo_categoria_servicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_categoria_servicio')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_categoria_servicio); ?>
	<br />


</div>