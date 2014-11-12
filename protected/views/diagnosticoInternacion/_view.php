<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_diagnostico')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_diagnostico),array('view','id'=>$data->id_diagnostico)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_diagnostico')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_diagnostico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('evaluacion_medica')); ?>:</b>
	<?php echo CHtml::encode($data->evaluacion_medica); ?>
	<br />


</div>