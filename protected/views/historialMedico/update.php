<?php
$this->breadcrumbs=array(
	'Historial Medicos'=>array('index'),
	$model->id_historial=>array('view','id'=>$model->id_historial),
	'Update',
);

$this->menu=array(
	array('label'=>'List HistorialMedico','url'=>array('index')),
	array('label'=>'Create HistorialMedico','url'=>array('create')),
	array('label'=>'View HistorialMedico','url'=>array('view','id'=>$model->id_historial)),
	array('label'=>'Manage HistorialMedico','url'=>array('admin')),
);
?>

<h1>Update HistorialMedico <?php echo $model->id_historial; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>