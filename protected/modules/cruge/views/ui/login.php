
<?php if(Yii::app()->user->hasFlash('loginflash')): ?>
<div class="flash-error">
	<?php echo Yii::app()->user->getFlash('loginflash'); ?>
</div>
<?php else: ?>
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'logon-form',
	'enableClientValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
    'htmlOptions'=>array(
        'class'=>'form-inline',
    ),
)); ?>


        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <?php echo $form->textField($model,'username',array('placeholder'=>'Nombre de Usuario','class'=>'form-control')); ?>
                <?php echo $form->error($model,'username'); ?>
            </div>
        </div>
        <br/>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-key"></i></div>
                <?php echo $form->passwordField($model,'password',array('placeholder'=>'Password','class'=>'form-control')); ?>
                <?php echo $form->error($model,'password'); ?>
            </div>
        </div>
        <br/>


        <input type="submit" value="Iniciar Sesion" class="btn btn-default btn-lg"/>


	<?php
		//	si el componente CrugeConnector existe lo usa:
		//
		if(Yii::app()->getComponent('crugeconnector') != null){
		if(Yii::app()->crugeconnector->hasEnabledClients){ 
	?>
	<div class='crugeconnector'>
		<span><?php echo CrugeTranslator::t('logon', 'You also can login with');?>:</span>
		<ul>
		<?php 
			$cc = Yii::app()->crugeconnector;
			foreach($cc->enabledClients as $key=>$config){
				$image = CHtml::image($cc->getClientDefaultImage($key));
				echo "<li>".CHtml::link($image,
					$cc->getClientLoginUrl($key))."</li>";
			}
		?>
		</ul>
	</div>
	<?php }} ?>
	

<?php $this->endWidget(); ?>
</div>
<?php endif; ?>
