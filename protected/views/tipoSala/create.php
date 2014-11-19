<?php
/* @var $this TipoSalaController */
/* @var $model TipoSala */

$this->breadcrumbs=array(
	'Tipo Salas'=>array('index'),
	'Create',
);


?>

<h1>Create TipoSala</h1>

<?php $this->renderPartial('_form', array('modelTipoSala'=>$modelTipoSala,'modelCosto'=>$modelCosto)); ?>