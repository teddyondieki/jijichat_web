<?php
/* @var $this RosterController */
/* @var $data RosterItem */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rosterID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rosterID), array('view', 'id'=>$data->rosterID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jid')); ?>:</b>
	<?php echo CHtml::encode($data->jid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub')); ?>:</b>
	<?php echo CHtml::encode($data->sub); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ask')); ?>:</b>
	<?php echo CHtml::encode($data->ask); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recv')); ?>:</b>
	<?php echo CHtml::encode($data->recv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nick')); ?>:</b>
	<?php echo CHtml::encode($data->nick); ?>
	<br />


</div>