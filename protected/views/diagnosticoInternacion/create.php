<?php
$this->breadcrumbs=array(
	'Diagnostico Internacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DiagnosticoInternacion','url'=>array('index')),
	array('label'=>'Manage DiagnosticoInternacion','url'=>array('admin')),
);
?>

<h1>Create DiagnosticoInternacion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>