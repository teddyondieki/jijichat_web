<?php
/* @var $this RosterController */
/* @var $model RosterItem */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'rosterID'); ?>
		<?php echo $form->textField($model,'rosterID',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jid'); ?>
		<?php echo $form->textField($model,'jid',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sub'); ?>
		<?php echo $form->textField($model,'sub'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ask'); ?>
		<?php echo $form->textField($model,'ask'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recv'); ?>
		<?php echo $form->textField($model,'recv'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nick'); ?>
		<?php echo $form->textField($model,'nick',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->