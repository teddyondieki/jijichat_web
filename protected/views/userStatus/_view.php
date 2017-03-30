<?php
/* @var $this UserStatusController */
/* @var $data UserStatus */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->username), array('view', 'id'=>$data->username)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jid')); ?>:</b>
	<?php echo CHtml::encode($data->jid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resource')); ?>:</b>
	<?php echo CHtml::encode($data->resource); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('online')); ?>:</b>
	<?php echo CHtml::encode($data->online); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusMessage')); ?>:</b>
	<?php echo CHtml::encode($data->statusMessage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastIpAddress')); ?>:</b>
	<?php echo CHtml::encode($data->lastIpAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastSeenDate')); ?>:</b>
	<?php echo CHtml::encode($data->lastSeenDate); ?>
	<br />


</div>