<?php
$this->breadcrumbs=array(
	'Detalle Servicios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DetalleServicio','url'=>array('index')),
	array('label'=>'Manage DetalleServicio','url'=>array('admin')),
);
?>

<h1>Create DetalleServicio</h1>

<?php echo $this->renderPartial('_form', array('modelServicio'=>$modelServicio,'modelCosto'=>$modelCosto)); ?>