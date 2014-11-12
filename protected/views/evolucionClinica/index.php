<?php
$this->breadcrumbs=array(
	'Evolucion Clinicas',
);

$this->menu=array(
	array('label'=>'Create EvolucionClinica','url'=>array('create')),
	array('label'=>'Manage EvolucionClinica','url'=>array('admin')),
);
?>

<h1>Evolucion Clinicas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
