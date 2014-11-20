<?php
$this->breadcrumbs=array(
	'Reconsultas'=>array('index'),
	$model->id_reconsulta=>array('view','id'=>$model->id_reconsulta),
	'Update',
);

$this->menu=array(
	array('label'=>'List Reconsulta','url'=>array('index')),
	array('label'=>'Create Reconsulta','url'=>array('create')),
	array('label'=>'View Reconsulta','url'=>array('view','id'=>$model->id_reconsulta)),
	array('label'=>'Manage Reconsulta','url'=>array('admin')),
);
?>

<h1>Update Reconsulta <?php echo $model->id_reconsulta; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>