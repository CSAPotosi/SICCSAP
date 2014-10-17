<?php
/* @var $this CuentaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cuentas',
);

$this->menu=array(
	array('label'=>'Create Cuenta', 'url'=>array('create')),
	array('label'=>'Manage Cuenta', 'url'=>array('admin')),
);
?>

<h1>Cuentas</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'rowCssClassExpression'=>'$data->getcssclass()',
    'columns'=>array(
        'codigo:text:Código',
        'descripcion:text:Descripción',
        array('class'=>'CButtonColumn','header'=>'Operaciones'),
        array(
            'class'=>'CLinkColumn',
            'label'=>'link',
            'urlExpression'=>'"?r=cuenta/crear&id=".$data->codigo',
            'header'=>'Author'
        ),
    )
	//'itemView'=>'_view',
));
