<?php
$this->breadcrumbs=array(
	'Historial Internacions',
);

$this->menu=array(
	array('label'=>'Create HistorialInternacion','url'=>array('create')),
	array('label'=>'Manage HistorialInternacion','url'=>array('admin')),
);
?>

<h1>Historial Internacions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
