<?php
$this->breadcrumbs=array(
	'Cie10s',
);

$this->menu=array(
	array('label'=>'Create Cie10','url'=>array('create')),
	array('label'=>'Manage Cie10','url'=>array('admin')),
);
?>

<h1>Cie10s</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
