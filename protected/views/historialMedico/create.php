<?php
$this->breadcrumbs=array(
	'Historial Medicos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HistorialMedico','url'=>array('index')),
	array('label'=>'Manage HistorialMedico','url'=>array('admin')),
);
?>

<h1>Create HistorialMedico</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>