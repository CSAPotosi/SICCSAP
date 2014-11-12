<?php
$this->breadcrumbs=array(
	'Diagnostico Internacions'=>array('index'),
	$model->id_diagnostico=>array('view','id'=>$model->id_diagnostico),
	'Update',
);

$this->menu=array(
	array('label'=>'List DiagnosticoInternacion','url'=>array('index')),
	array('label'=>'Create DiagnosticoInternacion','url'=>array('create')),
	array('label'=>'View DiagnosticoInternacion','url'=>array('view','id'=>$model->id_diagnostico)),
	array('label'=>'Manage DiagnosticoInternacion','url'=>array('admin')),
);
?>

<h1>Update DiagnosticoInternacion <?php echo $model->id_diagnostico; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>