<?php
$this->breadcrumbs=array(
	'Registros',
);

$this->menu=array(
	array('label'=>'Create Registro','url'=>array('create')),
	array('label'=>'Manage Registro','url'=>array('admin')),
);
?>

<h1>Registros</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
