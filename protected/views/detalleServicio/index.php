<?php
$this->breadcrumbs=array(
	'Detalle Servicios',
);

$this->menu=array(
	array('label'=>'Create DetalleServicio','url'=>array('create')),
	array('label'=>'Manage DetalleServicio','url'=>array('admin')),
);
?>

<h1>Detalle Servicios</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
