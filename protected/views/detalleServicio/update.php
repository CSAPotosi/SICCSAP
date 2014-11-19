<?php
$this->breadcrumbs=array(
	'Detalle Servicios'=>array('index'),
	$modelServicio->id_servicio=>array('view','id'=>$modelServicio->id_servicio),
	'Update',
);

$this->menu=array(
	array('label'=>'List DetalleServicio','url'=>array('index')),
	array('label'=>'Create DetalleServicio','url'=>array('create')),
	array('label'=>'View DetalleServicio','url'=>array('view','id'=>$modelServicio->id_servicio)),
	array('label'=>'Manage DetalleServicio','url'=>array('admin')),
);
?>

<h1>Update DetalleServicio <?php echo $modelServicio->id_servicio; ?></h1>

<?php echo $this->renderPartial('_form',array('modelServicio'=>$modelServicio,'modelCosto'=>$modelCosto)); ?>