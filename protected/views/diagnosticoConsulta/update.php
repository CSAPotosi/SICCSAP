<?php
$this->breadcrumbs=array(
	'Diagnostico Consultas'=>array('index'),
	$model->id_diagnostico=>array('view','id'=>$model->id_diagnostico),
	'Update',
);

$this->menu=array(
	array('label'=>'List DiagnosticoConsulta','url'=>array('index')),
	array('label'=>'Create DiagnosticoConsulta','url'=>array('create')),
	array('label'=>'View DiagnosticoConsulta','url'=>array('view','id'=>$model->id_diagnostico)),
	array('label'=>'Manage DiagnosticoConsulta','url'=>array('admin')),
);
?>

<h1>Update DiagnosticoConsulta <?php echo $model->id_diagnostico; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>