<?php
/* @var $this PresenceController */
/* @var $data Presence */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->username), array('view', 'id'=>$data->username)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offlinePresence')); ?>:</b>
	<?php echo CHtml::encode($data->offlinePresence); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offlineDate')); ?>:</b>
	<?php echo CHtml::encode($data->offlineDate); ?>
	<br />


</div>