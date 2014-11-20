<script>
    $(document).ready(function(){
        $('#Empleado_dni').keyup(function(){
            $('#Empleado_nit').attr('Value',$('#Empleado_dni').attr('Value'));
            $('#Empleado_id_empleado').attr('Value',$('#Empleado_dni').attr('Value'));
        });

    });

</script>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'empleado-form',
	'enableAjaxValidation'=>false,
    'clientOptions'=>array('validateOnSubmit'=> true,),
    'htmlOptions'=>array('class'=>"form-horizontal",),
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>
    <?php echo $form->errorSummary($model); ?>
<div class="form-group">

    <div class="col-sm-5">
        <?php echo $form->labelEx($model,'DNI', array('class'=>'col-sm-2')); ?>
        <?php echo $form->textFieldRow($model,'dni',array('class'=>'col-sm-3','class'=>'form-control','placeholder'=>"Dni")); ?>

    </div>
</div>
<div class="form-group">

    <div class="col-sm-5">
        <?php echo $form->textField($model,'nit',array('class'=>'form-control','placeholder'=>"Nit")); ?>
    </div>
</div>
<div class="form-group">

    <div class="col-sm-5">
        <?php echo $form->textField($model,'nombres',array('class'=>'form-control','placeholder'=>"nombres")); ?>
    </div>
</div>
<div class="form-group">

    <div class="col-sm-5">
        <?php echo $form->textField($model,'apellidos',array('class'=>'form-control','placeholder'=>"apellidos")); ?>
    </div>
</div>
<div class="form-group">

    <div class="col-sm-5">
        <?php echo $form->textField($model,'direccion',array('class'=>'form-control','placeholder'=>"Direccion")); ?>
    </div>
</div>
<div class="form-group">

    <div class="col-sm-5">
        <?php echo $form->labelEx($model,'Sexo'); ?>
        <?php echo $form->dropDownList($model,'sexo',array('M'=>'Masculino','F'=>'Femenino')); ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-5">
        <?php echo $form->textField($model,'localidad',array('class'=>'form-control','maxlength'=>40,'placeholder'=>"Localidad")); ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-5">
        <?php echo $form->textField($model,'pais',array('class'=>'form-control','placeholder'=>"Pais")); ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-5">
        <?php echo $form->textField($model,'telefono',array('class'=>'form-control','placeholder'=>"Telefono")); ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-5">
        <?php echo $form->textField($model,'celular',array('class'=>'form-control','placeholder'=>"Celular")); ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-5">
        <?php echo $form->textField($model,'email',array('class'=>'form-control','placeholder'=>"Email")); ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-5">
        <?php echo $form->labelEx($model,'Fecha de nacimiento'); ?>
        <?php
        $this->widget(
            'ext.jui.EJuiDateTimePicker',
            array(
                'model'     => $model,
                'attribute' => 'fecha_de_nacimiento',
                'language'=> 'es',//default Yii::app()->language
                'mode'    => 'datetime',//'datetime' or 'time' ('datetime' default)
                'options'   => array(
                    'dateFormat' => 'dd.mm.yy',
                    'timeFormat' => 'hh:mm tt',// default
                ),
            )
        );
        ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-5">
        <?php echo $form->labelEx($model,'Fotografia'); ?>
        <?php echo $form->textField($model,'fotografia',array('class'=>'form-control','placeholder'=>"fotografia")); ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-5">
        <?php echo $form->labelEx($model,'Estado Civil'); ?>
        <?php echo $form->dropDownList($model,'estado_civil',array("1"=>"Soltero","2"=>"Casado","3"=>"Divorciado","4"=>"Viudo","5"=>"Union Libre")); ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-5">
        <?php echo $form->textField($model,'id_empleado',array('class'=>'form-control','placeholder'=>"Codigo Empleado")); ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-5">
        <?php echo $form->dropDownList($model,'id_horario',CHtml::listData(horario::model()->findAll(),"id_horario","nombre")); ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-5">
        <?php echo $form->labelEx($model,'Fecha Contratacion'); ?>
        <?php
        $this->widget("zii.widgets.jui.CJuiDatePicker",array(
            "attribute"=>"fecha_de_contratacion",
            "model"=>$model,
            "language"=>"es",
            "options"=>array(
                "dateFormat"=>"dd-mm-yy"
            )
        ));
        ?>
    </div>
</div>


	<?php echo $form->textFieldRow($model,'cargo',array('class'=>'span5','maxlength'=>50)); ?>

    <?php echo $form->dropDownList($model,'id_departamento',CHtml::listData(departamento::model()->findAll(),"id_departamento","nombre")); ?>

	<?php echo $form->textFieldRow($model,'estado',array('class'=>'span5','maxlength'=>15)); ?>

	<?php echo $form->textFieldRow($model,'motivo_cambio_estado',array('class'=>'span5','maxlength'=>128)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
