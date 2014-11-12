<?php
$this->breadcrumbs=array(
	'Categoria Servicios'=>array('index'),
	$model->id_categoria_servicio=>array('view','id'=>$model->id_categoria_servicio),
	'Update',
);

$this->menu=array(
	array('label'=>'List CategoriaServicio','url'=>array('index')),
	array('label'=>'Create CategoriaServicio','url'=>array('create')),
	array('label'=>'View CategoriaServicio','url'=>array('view','id'=>$model->id_categoria_servicio)),
	array('label'=>'Manage CategoriaServicio','url'=>array('admin')),
);
?>

<h1>Update CategoriaServicio <?php echo $model->id_categoria_servicio; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>