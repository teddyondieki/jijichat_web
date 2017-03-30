<?php
/* @var $this PresenceController */
/* @var $model Presence */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'presence-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'offlinePresence'); ?>
		<?php echo $form->textArea($model,'offlinePresence',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'offlinePresence'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'offlineDate'); ?>
		<?php echo $form->textField($model,'offlineDate',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'offlineDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->