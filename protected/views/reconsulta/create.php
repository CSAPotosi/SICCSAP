<?php
$this->breadcrumbs=array(
	'Reconsultas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Reconsulta','url'=>array('index')),
	array('label'=>'Manage Reconsulta','url'=>array('admin')),
);
?>

<h1>Create Reconsulta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>