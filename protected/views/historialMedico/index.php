<?php
$this->breadcrumbs=array(
	'Historial Medicos',
);

$this->menu=array(
	array('label'=>'Create HistorialMedico','url'=>array('create')),
	array('label'=>'Manage HistorialMedico','url'=>array('admin')),
);
?>

<h1>Historial Medicos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
