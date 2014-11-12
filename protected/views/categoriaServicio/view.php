<?php
$this->breadcrumbs=array(
	'Categoria Servicios'=>array('index'),
	$model->id_categoria_servicio,
);

$this->menu=array(
	array('label'=>'List CategoriaServicio','url'=>array('index')),
	array('label'=>'Create CategoriaServicio','url'=>array('create')),
	array('label'=>'Update CategoriaServicio','url'=>array('update','id'=>$model->id_categoria_servicio)),
	array('label'=>'Delete CategoriaServicio','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_categoria_servicio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CategoriaServicio','url'=>array('admin')),
);
?>

<h1>View CategoriaServicio #<?php echo $model->id_categoria_servicio; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_categoria_servicio',
		'titulo_categoria_servicio',
		'descripcion_categoria_servicio',
	),
)); ?>
