<?php
$this->breadcrumbs=array(
	'Examen Laboratorios'=>array('index'),
	$model->id_servicio=>array('view','id'=>$model->id_servicio),
	'Update',
);

$this->menu=array(
	array('label'=>'List ExamenLaboratorio','url'=>array('index')),
	array('label'=>'Create ExamenLaboratorio','url'=>array('create')),
	array('label'=>'View ExamenLaboratorio','url'=>array('view','id'=>$model->id_servicio)),
	array('label'=>'Manage ExamenLaboratorio','url'=>array('admin')),
);
?>

<h1>Update ExamenLaboratorio <?php echo $model->id_servicio; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>