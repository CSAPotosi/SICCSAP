<?php $form=$this->beginWidget('CActiveForm',array(
	'id'=>'detalle-servicio-form',
	'enableAjaxValidation'=>false,
    'htmlOptions'=>array('class'=>'form-horizontal'),
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary(array($modelServicio,$modelCosto)); ?>

    <div class="form-group">
        <?php echo $form->labelEx($modelServicio,'titulo_detalle',array('class'=>'col-sm-2 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($modelServicio,'titulo_detalle',array('class'=>'form-control','placeholder'=>'Escribe el nombre del servicio')); ?>
        </div>
        <?php echo $form->error($modelServicio,'titulo_detalle',array('class'=>'label label-success')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($modelServicio,'descripcion_detalle',array('class'=>'col-sm-2 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textArea($modelServicio,'descripcion_detalle',array('class'=>'form-control','placeholder'=>'Escribe una breve descripcion')); ?>
        </div>
        <?php echo $form->error($modelServicio,'descripcion_detalle',array('class'=>'label label-success')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($modelServicio,'id_categoria_servicio',array('class'=>'col-sm-2 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->dropDownList($modelServicio,'id_categoria_servicio',CHtml::listData(CategoriaServicio::model()->findAll(),'id_categoria_servicio','titulo_categoria_servicio') ,array('class'=>'form-control','placeholder'=>'Escribe una breve descripcion')); ?>
        </div>
        <?php echo $form->error($modelServicio,'id_categoria_servicio',array('class'=>'label label-success')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($modelCosto,'monto',array('class'=>'col-sm-2 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($modelCosto,'monto',array('class'=>'form-control','placeholder'=>'Escribe el costo del servicio')); ?>
        </div>
        <?php echo $form->error($modelCosto,'monto',array('class'=>'label label-success')); ?>
    </div>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$modelServicio->isNewRecord ? 'Create' : 'Save',
            'htmlOptions'=>array('class'=>'btn-lg col-sm-3'),
		)); ?>
	</div>

<?php $this->endWidget(); ?>
