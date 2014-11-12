<?php
$this->breadcrumbs=array(
	'Evolucion Clinicas'=>array('index'),
	$model->id_evolucion_clinica=>array('view','id'=>$model->id_evolucion_clinica),
	'Update',
);

$this->menu=array(
	array('label'=>'List EvolucionClinica','url'=>array('index')),
	array('label'=>'Create EvolucionClinica','url'=>array('create')),
	array('label'=>'View EvolucionClinica','url'=>array('view','id'=>$model->id_evolucion_clinica)),
	array('label'=>'Manage EvolucionClinica','url'=>array('admin')),
);
?>

<h1>Update EvolucionClinica <?php echo $model->id_evolucion_clinica; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>