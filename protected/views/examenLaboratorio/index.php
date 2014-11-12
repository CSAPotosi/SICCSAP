<?php
$this->breadcrumbs=array(
	'Examen Laboratorios',
);

$this->menu=array(
	array('label'=>'Create ExamenLaboratorio','url'=>array('create')),
	array('label'=>'Manage ExamenLaboratorio','url'=>array('admin')),
);
?>

<h1>Examen Laboratorios</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
