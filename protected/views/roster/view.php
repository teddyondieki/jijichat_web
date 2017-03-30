<?php
/* @var $this RosterController */
/* @var $model RosterItem */

$this->breadcrumbs=array(
	'Roster Items'=>array('index'),
	$model->rosterID,
);

$this->menu=array(
	array('label'=>'List RosterItem', 'url'=>array('index')),
	array('label'=>'Create RosterItem', 'url'=>array('create')),
	array('label'=>'Update RosterItem', 'url'=>array('update', 'id'=>$model->rosterID)),
	array('label'=>'Delete RosterItem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rosterID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RosterItem', 'url'=>array('admin')),
);
?>

<h1>View RosterItem #<?php echo $model->rosterID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'rosterID',
		'username',
		'jid',
		'sub',
		'ask',
		'recv',
		'nick',
	),
)); ?>
