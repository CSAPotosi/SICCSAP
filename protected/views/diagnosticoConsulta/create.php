<?php
$this->breadcrumbs=array(
	'Diagnostico Consultas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DiagnosticoConsulta','url'=>array('index')),
	array('label'=>'Manage DiagnosticoConsulta','url'=>array('admin')),
);
?>

<h1>Create DiagnosticoConsulta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>