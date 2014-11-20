<?php
$this->breadcrumbs=array(
	'Recetas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Receta','url'=>array('index')),
	array('label'=>'Manage Receta','url'=>array('admin')),
);
?>

<h1>Create Receta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>