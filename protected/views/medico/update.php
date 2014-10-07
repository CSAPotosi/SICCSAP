<?php
/* @var $this MedicoController */
/* @var $model Medico */

$this->breadcrumbs=array(
	'Medicos'=>array('index'),
	$modelM->id_medico=>array('view','id'=>$modelM->id_medico),
	'Update',
);

$this->menu=array(
	array('label'=>'List Medico', 'url'=>array('index')),
	array('label'=>'Create Medico', 'url'=>array('create')),
	array('label'=>'View Medico', 'url'=>array('view', 'id'=>$modelM->id_medico)),
	array('label'=>'Manage Medico', 'url'=>array('admin')),
);
?>

<h1>Update Medico <?php echo $modelM->id_medico; ?></h1>

<?php $this->renderPartial('_form', array('modelM'=>$modelM,'items'=>$items)); ?>