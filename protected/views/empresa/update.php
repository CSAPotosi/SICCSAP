<?php
$this->breadcrumbs=array(
	'Empresas'=>array('index'),
	$model->id_empresa=>array('view','id'=>$model->id_empresa),
	'Update',
);

$this->menu=array(
	array('label'=>'List Empresa','url'=>array('index')),
	array('label'=>'Create Empresa','url'=>array('create')),
	array('label'=>'View Empresa','url'=>array('view','id'=>$model->id_empresa)),
	array('label'=>'Manage Empresa','url'=>array('admin')),
);
?>

<h1>Update Empresa <?php echo $model->id_empresa; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>