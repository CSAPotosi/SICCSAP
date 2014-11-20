<?php
$this->breadcrumbs=array(
	'Diagnostico Consultas',
);

$this->menu=array(
	array('label'=>'Create DiagnosticoConsulta','url'=>array('create')),
	array('label'=>'Manage DiagnosticoConsulta','url'=>array('admin')),
);
?>

<h1>Diagnostico Consultas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
