<?php
$this->breadcrumbs=array(
	'Quirofanos',
);

$this->menu=array(
	array('label'=>'Create Quirofano','url'=>array('create')),
	array('label'=>'Manage Quirofano','url'=>array('admin')),
);
?>

<h1>Quirofanos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
