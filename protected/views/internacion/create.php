<?php
$this->breadcrumbs=array(
	'Internacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Internacion','url'=>array('index')),
	array('label'=>'Manage Internacion','url'=>array('admin')),
);
?>

<h1>Create Internacion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>