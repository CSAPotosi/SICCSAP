<?php
/* @var $this TipoSalaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Salas',
);

$this->menu=array(
	array('label'=>'Create TipoSala', 'url'=>array('create')),
	array('label'=>'Manage TipoSala', 'url'=>array('admin')),
);
?>

<h1>Tipo Salas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
