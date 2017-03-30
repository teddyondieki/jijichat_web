<?php
/* @var $this VCardController */
/* @var $data VCard */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->username), array('view', 'id'=>$data->username)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vcard')); ?>:</b>
	<?php echo CHtml::encode($data->vcard); ?>
	<br />


</div>