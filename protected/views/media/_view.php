<?php
/* @var $this MediaController */
/* @var $data Media */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('File')); ?>:</b>
	<?php echo CHtml::encode($data->File); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creationDate')); ?>:</b>
	<?php echo CHtml::encode($data->creationDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modificationDate')); ?>:</b>
	<?php echo CHtml::encode($data->modificationDate); ?>
	<br />


</div>