<?php
/* @var $this TipoSalaController */
/* @var $modelTipoSala TipoSala */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tipo-sala-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'htmlOptions'=>array('class'=>'form-horizontal'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary(array($modelTipoSala,$modelCosto),'','',array('class'=>'miclase')); ?>

    <div class="form-group">
            <?php echo $form->labelEx($modelTipoSala,'nombre_tipo_sala',array('class'=>'col-sm-2 control-label')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($modelTipoSala,'nombre_tipo_sala',array('class'=>'form-control','placeholder'=>'Escribe el nombre de tipo de sala')); ?>
            </div>

            <?php echo $form->error($modelTipoSala,'nombre_tipo_sala',array('class'=>'label label-success')); ?>
    </div>

    <div class="form-group">
            <?php echo $form->labelEx($modelTipoSala,'descripcion_tipo_sala',array('class'=>'col-sm-2 control-label')); ?>
            <div class="col-sm-8">
                <?php echo $form->textArea($modelTipoSala,'descripcion_tipo_sala',array('class'=>'form-control','placeholder'=>'Escribe una breve descripcion')); ?>
            </div>
            <?php echo $form->error($modelTipoSala,'descripcion_tipo_sala'); ?>
    </div>

    <div class="form-group">
            <?php echo $form->labelEx($modelCosto,'monto',array('class'=>'col-sm-2 control-label')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($modelCosto,'monto',array('class'=>'form-control')); ?>
            </div>
            <?php echo $form->error($modelCosto,'monto',array('class'=>'label label-success')); ?>
    </div>


    <div class="form-actions">
        <?php
            $this->widget('bootstrap.widgets.TbButton',array(
                'buttonType'=>'submit',
                'type'=>'primary',
                'label'=>$modelTipoSala->isNewRecord? 'Create':'Save',
                'htmlOptions'=>array('class'=>'btn-lg col-sm-3'),
            ))
        ?>
    </div>


<?php $this->endWidget(); ?>

</div><!-- form -->