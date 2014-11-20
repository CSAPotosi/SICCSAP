<?php
$this->breadcrumbs=array(
	'Historial Internacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HistorialInternacion','url'=>array('index')),
	array('label'=>'Manage HistorialInternacion','url'=>array('admin')),
);
?>

<h1>Create HistorialInternacion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>