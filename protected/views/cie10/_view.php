<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_cie10')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo_cie10),array('view','id'=>$data->codigo_cie10)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo_cie10')); ?>:</b>
	<?php echo CHtml::encode($data->titulo_cie10); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_cie10')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_cie10); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_padre')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_padre); ?>
	<br />


</div>