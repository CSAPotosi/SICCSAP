<?php
$this->breadcrumbs=array(
	'Historial Internacions'=>array('index'),
	$model->id_historial_internacion=>array('view','id'=>$model->id_historial_internacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List HistorialInternacion','url'=>array('index')),
	array('label'=>'Create HistorialInternacion','url'=>array('create')),
	array('label'=>'View HistorialInternacion','url'=>array('view','id'=>$model->id_historial_internacion)),
	array('label'=>'Manage HistorialInternacion','url'=>array('admin')),
);
?>

<h1>Update HistorialInternacion <?php echo $model->id_historial_internacion; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>