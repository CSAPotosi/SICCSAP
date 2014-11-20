<?php
$this->breadcrumbs=array(
	'Programacion Citas',
);

$this->menu=array(
	array('label'=>'Create ProgramacionCita','url'=>array('create')),
	array('label'=>'Manage ProgramacionCita','url'=>array('admin')),
);
?>

<h1>Programacion Citas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
