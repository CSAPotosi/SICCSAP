<?php
/* @var $this MedicoController */
/* @var $modelM Medico */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'medico-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary(array($modelM)); ?>
    <fieldset>
        <legend>Datos personales</legend>

        <div class="row">
            <?php echo $form->labelEx($modelM,'fotografia'); ?>
            <?php echo $form->fileField($modelM,'fotografia',array('size'=>60,'maxlength'=>128)); ?>
            <?php echo $form->error($modelM,'fotografia'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($modelM,'dni'); ?>
            <?php echo $form->textField($modelM,'dni',array('size'=>20,'maxlength'=>20)); ?>
            <?php echo $form->error($modelM,'dni'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($modelM,'nit'); ?>
            <?php echo $form->textField($modelM,'nit',array('size'=>20,'maxlength'=>20)); ?>
            <?php echo $form->error($modelM,'nit'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($modelM,'nombres'); ?>
            <?php echo $form->textField($modelM,'nombres',array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($modelM,'nombres'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($modelM,'apellidos'); ?>
            <?php echo $form->textField($modelM,'apellidos',array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($modelM,'apellidos'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($modelM,'direccion'); ?>
            <?php echo $form->textField($modelM,'direccion',array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($modelM,'direccion'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($modelM,'sexo'); ?>
            <?php echo $form->radioButtonList($modelM,'sexo',$modelM->getItemsSexo(),array('template'=>'{input}{label}')); ?>
            <?php echo $form->error($modelM,'sexo'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($modelM,'localidad'); ?>
            <?php echo $form->textField($modelM,'localidad',array('size'=>40,'maxlength'=>40)); ?>
            <?php echo $form->error($modelM,'localidad'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($modelM,'pais'); ?>
            <?php echo $form->textField($modelM,'pais',array('size'=>40,'maxlength'=>40)); ?>
            <?php echo $form->error($modelM,'pais'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($modelM,'telefono'); ?>
            <?php echo $form->textField($modelM,'telefono',array('size'=>20,'maxlength'=>20)); ?>
            <?php echo $form->error($modelM,'telefono'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($modelM,'celular'); ?>
            <?php echo $form->textField($modelM,'celular',array('size'=>20,'maxlength'=>20)); ?>
            <?php echo $form->error($modelM,'celular'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($modelM,'email'); ?>
            <?php echo $form->textField($modelM,'email',array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($modelM,'email'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($modelM,'fecha_de_nacimiento'); ?>
            <?php echo $form->dateField($modelM,'fecha_de_nacimiento'); ?>
            <?php echo $form->error($modelM,'fecha_de_nacimiento'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($modelM,'estado_civil'); ?>
            <?php echo $form->textField($modelM,'estado_civil',array('size'=>20,'maxlength'=>20)); ?>
            <?php echo $form->error($modelM,'estado_civil'); ?>
        </div>
    </fieldset>
    <fieldset>
        <legend>Datos del profesional</legend>
        <div class="row">
            <?php echo $form->labelEx($modelM,'matricula'); ?>
            <?php echo $form->textField($modelM,'matricula',array('size'=>20,'maxlength'=>20)); ?>
            <?php echo $form->error($modelM,'matricula'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($modelM,'colegiatura'); ?>
            <?php echo $form->textField($modelM,'colegiatura',array('size'=>50,'maxlength'=>50)); ?>
            <?php echo $form->error($modelM,'colegiatura'); ?>
        </div>

        <a href="#" id="addEspecialidad">Nueva especialidad</a>

        <div class="row" id="especialidad">
            <?php foreach($items as $item): ?>
            <?php echo $form->labelEx($item,'[]id_especialidad'); ?>
            <?php echo $form->dropDownList($item,'[]id_especialidad',CHtml::listData( Especialidad::model()->findAll(),'id_especialidad','nombre_especialidad')); ?>
            <?php echo $form->error($item,'[]id_especialidad'); ?>
            <?php endforeach; ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($modelM,'estado'); ?>
            <?php echo $form->textField($modelM,'estado',array('size'=>1,'maxlength'=>1)); ?>
            <?php echo $form->error($modelM,'estado'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($modelM,'motivo_cambio_estado'); ?>
            <?php echo $form->textField($modelM,'motivo_cambio_estado',array('size'=>60,'maxlength'=>128)); ?>
            <?php echo $form->error($modelM,'motivo_cambio_estado'); ?>
        </div>
    </fieldset>
	<div class="row buttons">
		<?php echo CHtml::submitButton($modelM->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

<script>
    $(document).ready(function(){

        $("#addEspecialidad").click(function(e){
            e.preventDefault();
            var label='<?php echo $form->labelEx(MedicoEspecialidad::model(),"[]id_especialidad"); ?>';
            var lista='<?php echo str_replace("\n","",$form->dropDownList(MedicoEspecialidad::model(),"[]id_especialidad",CHtml::listData( Especialidad::model()->findAll(),"id_especialidad","nombre_especialidad"))); ?>';
            $("#especialidad").append(label);
            $("#especialidad").append(lista);
        });
    });
</script>

</div><!-- form -->