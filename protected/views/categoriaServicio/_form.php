<?php $form=$this->beginWidget('CActiveForm',array(
	'id'=>'categoria-servicio-form',
	'enableAjaxValidation'=>false,
    'clientOptions'=>array('validateOnSubmit'=>true),
    'htmlOptions'=>array('class'=>'form-horizontal',),
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div class="form-group">
        <div class="col-sm-5">
            <?php echo $form->textField($model,'titulo_categoria_servicio',array('class'=>'form-control','maxlength'=>40,'placeholder'=>'Escriba un titulo')); ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-5">
            <?php echo $form->textArea($model,'descripcion_categoria_servicio',array('rows'=>6, 'cols'=>50, 'class'=>'form-control','placeholder'=>'Escriba una breve descripcion')); ?>
        </div>
    </div>



	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
