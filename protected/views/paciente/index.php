<?php
$this->breadcrumbs=array(
	'Pacientes',
);


$this->menu=array(
	array('label'=>'Crear un Paciente Nuevo','url'=>array('create')),
	array('label'=>'Editar Un Paciente','url'=>array('admin')),
);
?>

<h1>Pacientes</h1>
<input type="text" name="buscar" id="buscar" placeholder="Buscar"/>

<div id="resultados">
    <ul>
    </ul>
</div>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
