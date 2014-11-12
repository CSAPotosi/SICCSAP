<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cirugia')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cirugia),array('view','id'=>$data->id_cirugia)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_fin')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_fin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_quirofano')); ?>:</b>
	<?php echo CHtml::encode($data->id_quirofano); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_historial')); ?>:</b>
	<?php echo CHtml::encode($data->id_historial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_internacion')); ?>:</b>
	<?php echo CHtml::encode($data->id_internacion); ?>
	<br />


</div>