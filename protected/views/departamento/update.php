<?php
/* @var $this DepartamentoController */
/* @var $model Departamento */

$this->breadcrumbs=array(
	'Departamentos'=>array('index'),
	$model->id_departamento=>array('view','id'=>$model->id_departamento),
	'Update',
);

$this->menu=array(
	array('label'=>'List Departamento', 'url'=>array('index')),
	array('label'=>'Create Departamento', 'url'=>array('create')),
	array('label'=>'View Departamento', 'url'=>array('view', 'id'=>$model->id_departamento)),
	array('label'=>'Manage Departamento', 'url'=>array('admin')),
);
?>

<h1>Update Departamento <?php echo $model->id_departamento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>