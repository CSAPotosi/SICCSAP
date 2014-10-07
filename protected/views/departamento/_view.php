<?php
/* @var $this DepartamentoController */
/* @var $data Departamento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_departamento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_departamento), array('view', 'id'=>$data->id_departamento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ubicacion')); ?>:</b>
	<?php echo CHtml::encode($data->ubicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('piso')); ?>:</b>
	<?php echo CHtml::encode($data->piso); ?>
	<br />


</div>