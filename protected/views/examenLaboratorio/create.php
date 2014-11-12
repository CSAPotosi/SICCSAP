<?php
$this->breadcrumbs=array(
	'Examen Laboratorios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ExamenLaboratorio','url'=>array('index')),
	array('label'=>'Manage ExamenLaboratorio','url'=>array('admin')),
);
?>

<h1>Create ExamenLaboratorio</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>