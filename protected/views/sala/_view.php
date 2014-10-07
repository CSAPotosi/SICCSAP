<?php
/* @var $this SalaController */
/* @var $data Sala */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sala')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_sala), array('view', 'id'=>$data->id_sala)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_sala')); ?>:</b>
	<?php echo CHtml::encode($data->numero_sala); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ubicacion_sala')); ?>:</b>
	<?php echo CHtml::encode($data->ubicacion_sala); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_sala')); ?>:</b>
	<?php echo CHtml::encode($data->estado_sala); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_servicio')); ?>:</b>
	<?php echo CHtml::encode($data->id_servicio); ?>
	<br />


</div>