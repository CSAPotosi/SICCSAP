<?php
/* @var $this EspecialidadController */
/* @var $data Especialidad */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_especialidad')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_especialidad), array('view', 'id'=>$data->id_especialidad)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_especialidad')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_especialidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>