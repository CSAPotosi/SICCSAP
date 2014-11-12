<?php
$this->breadcrumbs=array(
	'Categoria Servicios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CategoriaServicio','url'=>array('index')),
	array('label'=>'Manage CategoriaServicio','url'=>array('admin')),
);
?>

<h1>Create CategoriaServicio</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>