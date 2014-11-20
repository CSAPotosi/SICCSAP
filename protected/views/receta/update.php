<?php
$this->breadcrumbs=array(
	'Recetas'=>array('index'),
	$model->id_receta=>array('view','id'=>$model->id_receta),
	'Update',
);

$this->menu=array(
	array('label'=>'List Receta','url'=>array('index')),
	array('label'=>'Create Receta','url'=>array('create')),
	array('label'=>'View Receta','url'=>array('view','id'=>$model->id_receta)),
	array('label'=>'Manage Receta','url'=>array('admin')),
);
?>

<h1>Update Receta <?php echo $model->id_receta; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>