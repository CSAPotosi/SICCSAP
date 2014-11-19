<?php
/* @var $this SalaController */
/* @var $model Sala */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sala-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'htmlOptions'=>array('class'=>'form-horizontal'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
        <?php echo $form->labelEx($model,'numero_sala',array('class'=>'col-sm-2 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'numero_sala',array('class'=>'form-control','placeholder'=>'Escribe el numero de sala')); ?>
        </div>
        <?php echo $form->error($model,'numero_sala',array('class'=>'label label-success')); ?>
	</div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'ubicacion_sala',array('class'=>'col-sm-2 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'ubicacion_sala',array('class'=>'form-control','placeholder'=>'Escribe la ubicacion de sala')); ?>
        </div>
        <?php echo $form->error($model,'ubicacion_sala',array('class'=>'label label-success')); ?>
    </div>

    <?php if(!$model->isNewRecord):?>
        <div class="form-group">
            <?php echo $form->labelEx($model,'estado_sala',array('class'=>'col-sm-2 control-label')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model,'estado_sala',array('size'=>15,'maxlength'=>15)); ?>
            </div>
            <?php echo $form->error($model,'estado_sala',array('class'=>'label label-success')); ?>
        </div>
    <?php endif; ?>

	<div class="form-group">
        <?php echo $form->labelEx($model,'id_servicio',array('class'=>'col-sm-2 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->dropDownList($model,'id_servicio',CHtml::listData( TipoSala::model()->findAll(),'id_servicio','nombre_tipo_sala'),array('class'=>'form-control')); ?>
        </div>
        <?php echo $form->error($model,'id_servicio',array('class'=>'label label-success')); ?>
	</div>

    <div class="form-actions">
        <?php
        $this->widget('bootstrap.widgets.TbButton',array(
            'buttonType'=>'submit',
            'type'=>'primary',
            'label'=>$model->isNewRecord? 'Create':'Save',
            'htmlOptions'=>array('class'=>'btn-lg col-sm-3'),
        ))
        ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->