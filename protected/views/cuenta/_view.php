<?php
/* @var $this CuentaController */
/* @var $data Cuenta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cuenta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cuenta), array('view', 'id'=>$data->id_cuenta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::encode($data->codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('auxiliar')); ?>:</b>
	<?php echo CHtml::encode($data->auxiliar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cuenta_padre')); ?>:</b>
	<?php echo CHtml::encode($data->cuenta_padre); ?>
	<br />


</div>