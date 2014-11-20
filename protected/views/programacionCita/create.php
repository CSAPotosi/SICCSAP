<?php
$this->breadcrumbs=array(
	'Programacion Citas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProgramacionCita','url'=>array('index')),
	array('label'=>'Manage ProgramacionCita','url'=>array('admin')),
);
?>

<h1>Create ProgramacionCita</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>