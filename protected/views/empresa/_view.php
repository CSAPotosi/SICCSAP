<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_empresa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_empresa),array('view','id'=>$data->id_empresa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nit_empresa')); ?>:</b>
	<?php echo CHtml::encode($data->nit_empresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_empresa')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_empresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ubicacion_empresa')); ?>:</b>
	<?php echo CHtml::encode($data->ubicacion_empresa); ?>
	<br />


</div>