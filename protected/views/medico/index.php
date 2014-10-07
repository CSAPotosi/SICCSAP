<?php
/* @var $this MedicoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Medicos',
);

$this->menu=array(
	array('label'=>'Create Medico', 'url'=>array('create')),
	array('label'=>'Manage Medico', 'url'=>array('admin')),
);
?>

<h1>Medicos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
