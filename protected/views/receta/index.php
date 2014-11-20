<?php
$this->breadcrumbs=array(
	'Recetas',
);

$this->menu=array(
	array('label'=>'Create Receta','url'=>array('create')),
	array('label'=>'Manage Receta','url'=>array('admin')),
);
?>

<h1>Recetas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
