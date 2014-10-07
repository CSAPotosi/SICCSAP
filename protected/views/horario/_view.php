<?php
/* @var $this HorarioController */
/* @var $data Horario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_horario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_horario), array('view', 'id'=>$data->id_horario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>