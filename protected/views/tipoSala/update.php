<?php
/* @var $this TipoSalaController */
/* @var $model TipoSala */

$this->breadcrumbs=array(
	'Tipo Salas'=>array('index'),
	$modelTipoSala->id_servicio=>array('view','id'=>$modelTipoSala->id_servicio),
	'Update',
);


?>

<h1>Update TipoSala <?php echo $modelTipoSala->id_servicio; ?></h1>

<?php $this->renderPartial('_form', array('modelTipoSala'=>$modelTipoSala,'modelCosto'=>$modelCosto)); ?>