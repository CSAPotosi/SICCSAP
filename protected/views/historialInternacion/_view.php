<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_historial_internacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_historial_internacion),array('view','id'=>$data->id_historial_internacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_admicion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_admicion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fehca_egreso')); ?>:</b>
	<?php echo CHtml::encode($data->fehca_egreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('motivo_egreso')); ?>:</b>
	<?php echo CHtml::encode($data->motivo_egreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('motivo_ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->motivo_ingreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_historial')); ?>:</b>
	<?php echo CHtml::encode($data->id_historial); ?>
	<br />


</div>