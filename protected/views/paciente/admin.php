<?php
$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Paciente','url'=>array('index')),
	array('label'=>'Create Paciente','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('paciente-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Pacientes</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'paciente-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_persona',
		'dni',
		'nit',
		'nombres',
		'apellidos',
		'direccion',

		'sexo',
		'localidad',
		'pais',
		'telefono',
		'celular',
		'email',
		'fecha_de_nacimiento',
		'fotografia',
		'estado_civil',
		'id_paciente',
		'ocupacion_paciente',
		'grupo_sanguineo_paciente',
		'nombre_responsable',
		'telefono_responsable',
		'relacion_responsable_paciente',
		'tipo_paciente',
		'estado_paciente',
		'fecha_muerte',
        array(
            'name'=>'id_empresa',
            'value'=>'$data->empresa->nombre_empresa',
        ),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
