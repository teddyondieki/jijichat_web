<?php
/* @var $this UserStatusController */
/* @var $model UserStatus */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jid'); ?>
		<?php echo $form->textField($model,'jid',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resource'); ?>
		<?php echo $form->textField($model,'resource',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'online'); ?>
		<?php echo $form->textField($model,'online'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusMessage'); ?>
		<?php echo $form->textField($model,'statusMessage',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastIpAddress'); ?>
		<?php echo $form->textField($model,'lastIpAddress',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastSeenDate'); ?>
		<?php echo $form->textField($model,'lastSeenDate',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->