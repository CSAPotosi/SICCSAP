<?php
/* @var $this TipoSalaController */
/* @var $model TipoSala */

$this->breadcrumbs=array(
	'Tipo Salas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TipoSala', 'url'=>array('index')),
	array('label'=>'Create TipoSala', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tipo-sala-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tipo Salas</h1>

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
	'id'=>'tipo-sala-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_servicio',
		'fecha_creacion_servicio',
		'fecha_modificacion_servicio',
		'nombre_tipo_sala',
		'descripcion_tipo_sala',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
