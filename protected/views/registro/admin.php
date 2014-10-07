<?php
/* @var $this RegistroController */
/* @var $model Registro */

$this->breadcrumbs=array(
	'Registros'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Registro', 'url'=>array('index')),
	array('label'=>'Create Registro', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#registro-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Registros</h1>

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
	'id'=>'registro-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_registro',
        array(
            'name'=>'id_empleado',
            'value'=>'$data->empleado->nombre',
        ),
        array(
            'name'=>'id_horario',
            'value'=>'$data->horario->nombre',
        ),
        array(
            'name'=>'id_departamento',
            'value'=>'$data->departamento->nombre',
        ),
		'fecha_de_registro',
		'hora_ingreso',
		'hora_salida',
		'excepcion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
