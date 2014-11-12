<?php
$this->breadcrumbs=array(
	'Categoria Servicios',
);

$this->menu=array(
	array('label'=>'Create CategoriaServicio','url'=>array('create')),
	array('label'=>'Manage CategoriaServicio','url'=>array('admin')),
);
?>

<h1>Categoria Servicios</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
