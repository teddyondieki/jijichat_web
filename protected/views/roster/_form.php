<?php
/* @var $this RosterController */
/* @var $model RosterItem */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'roster-item-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rosterID'); ?>
		<?php echo $form->textField($model,'rosterID',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'rosterID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jid'); ?>
		<?php echo $form->textField($model,'jid',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'jid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sub'); ?>
		<?php echo $form->textField($model,'sub'); ?>
		<?php echo $form->error($model,'sub'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ask'); ?>
		<?php echo $form->textField($model,'ask'); ?>
		<?php echo $form->error($model,'ask'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recv'); ?>
		<?php echo $form->textField($model,'recv'); ?>
		<?php echo $form->error($model,'recv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nick'); ?>
		<?php echo $form->textField($model,'nick',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nick'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->