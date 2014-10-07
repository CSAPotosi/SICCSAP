<?php
/* @var $this MedicoController */
/* @var $model Medico */

$this->breadcrumbs=array(
	'Medicos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Medico', 'url'=>array('index')),
	array('label'=>'Create Medico', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#medico-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Medicos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'medico-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_persona',
		'dni',
		'nit',
		'nombres',
		'apellidos',
		'direccion',
		/*
		'sexo',
		'localidad',
		'pais',
		'telefono',
		'celular',
		'email',
		'fecha_de_nacimiento',
		'fotografia',
		'estado_civil',
		'id_medico',
		'matricula',
		'colegiatura',
		'estado',
		'motivo_cambio_estado',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
