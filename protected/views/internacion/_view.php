<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_internacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_internacion),array('view','id'=>$data->id_internacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_admision')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_admision); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('motivo_ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->motivo_ingreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_egreso')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_egreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('motivo_egreso')); ?>:</b>
	<?php echo CHtml::encode($data->motivo_egreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_historial')); ?>:</b>
	<?php echo CHtml::encode($data->id_historial); ?>
	<br />


</div>