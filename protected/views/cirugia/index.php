<?php
$this->breadcrumbs=array(
	'Cirugias',
);

$this->menu=array(
	array('label'=>'Create Cirugia','url'=>array('create')),
	array('label'=>'Manage Cirugia','url'=>array('admin')),
);
?>

<h1>Cirugias</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
