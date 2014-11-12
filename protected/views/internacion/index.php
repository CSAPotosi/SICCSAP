<?php
$this->breadcrumbs=array(
	'Internacions',
);

$this->menu=array(
	array('label'=>'Create Internacion','url'=>array('create')),
	array('label'=>'Manage Internacion','url'=>array('admin')),
);
?>

<h1>Internacions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
