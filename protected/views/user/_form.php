<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
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
		<?php echo $form->labelEx($model,'plainPassword'); ?>
		<?php echo $form->textField($model,'plainPassword',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'plainPassword'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'encryptedPassword'); ?>
		<?php echo $form->textField($model,'encryptedPassword',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'encryptedPassword'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'creationDate'); ?>
		<?php echo $form->textField($model,'creationDate',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'creationDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modificationDate'); ?>
		<?php echo $form->textField($model,'modificationDate',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'modificationDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->