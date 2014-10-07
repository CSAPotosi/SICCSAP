<?php
/* @var $this TipoSalaController */
/* @var $model TipoSala */

$this->breadcrumbs=array(
	'Tipo Salas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoSala', 'url'=>array('index')),
	array('label'=>'Manage TipoSala', 'url'=>array('admin')),
);
?>

<h1>Create TipoSala</h1>

<?php $this->renderPartial('_form', array('modelTipoSala'=>$modelTipoSala,'modelCosto'=>$modelCosto)); ?>