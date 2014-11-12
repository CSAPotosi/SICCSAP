<?php
$this->breadcrumbs=array(
	'Diagnostico Internacions',
);

$this->menu=array(
	array('label'=>'Create DiagnosticoInternacion','url'=>array('create')),
	array('label'=>'Manage DiagnosticoInternacion','url'=>array('admin')),
);
?>

<h1>Diagnostico Internacions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
