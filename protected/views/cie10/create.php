<?php
$this->breadcrumbs=array(
	'Cie10s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cie10','url'=>array('index')),
	array('label'=>'Manage Cie10','url'=>array('admin')),
);
?>

<h1>Create Cie10</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>