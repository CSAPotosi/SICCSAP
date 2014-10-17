<?php
/* @var $this CuentaController */
/* @var $model Cuenta */

$this->breadcrumbs=array(
    'Cuentas'=>array('index'),
    'Crear',
);

$this->menu=array(
    array('label'=>'List Cuenta', 'url'=>array('index')),
    array('label'=>'Manage Cuenta', 'url'=>array('admin')),
);
?>

    <h1>Create Cuenta</h1>

<?php $this->renderPartial('_form_cuenta', array('model'=>$model)); ?>