<?php $form=$this->beginWidget('CActiveForm',array(
	'id'=>'categoria-servicio-form',
	'enableAjaxValidation'=>false,
    'clientOptions'=>array('validateOnSubmit'=>true),
    'htmlOptions'=>array('class'=>'form-horizontal',),
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model,'titulo_categoria_servicio',array('class'=>'col-sm-2 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'titulo_categoria_servicio',array('class'=>'form-control','maxlength'=>40,'placeholder'=>'Escriba un titulo')); ?>
        </div>
        <?php echo $form->error($model,'titulo_categoria_servicio',array('class'=>'label label-success')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'descripcion_categoria_servicio',array('class'=>'col-sm-2 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textArea($model,'descripcion_categoria_servicio',array('rows'=>6, 'cols'=>50, 'class'=>'form-control','placeholder'=>'Escriba una breve descripcion')); ?>
        </div>
        <?php echo $form->error($model,'descripcion_categoria_servicio',array('class'=>'label label-success')); ?>
    </div>



	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
            'htmlOptions'=>array('class'=>'btn-lg col-sm-3'),
		)); ?>
	</div>

<?php $this->endWidget(); ?>
