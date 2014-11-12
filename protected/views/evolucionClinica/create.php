<?php
$this->breadcrumbs=array(
	'Evolucion Clinicas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EvolucionClinica','url'=>array('index')),
	array('label'=>'Manage EvolucionClinica','url'=>array('admin')),
);
?>

<h1>Create EvolucionClinica</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>