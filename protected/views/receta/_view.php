<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_receta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_receta),array('view','id'=>$data->id_receta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tratamiento')); ?>:</b>
	<?php echo CHtml::encode($data->tratamiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_diagnostico')); ?>:</b>
	<?php echo CHtml::encode($data->id_diagnostico); ?>
	<br />


</div>