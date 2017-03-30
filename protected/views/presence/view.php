<?php
/* @var $this PresenceController */
/* @var $model Presence */

$this->breadcrumbs=array(
	'Presences'=>array('index'),
	$model->username,
);

$this->menu=array(
	array('label'=>'List Presence', 'url'=>array('index')),
	array('label'=>'Create Presence', 'url'=>array('create')),
	array('label'=>'Update Presence', 'url'=>array('update', 'id'=>$model->username)),
	array('label'=>'Delete Presence', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->username),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Presence', 'url'=>array('admin')),
);
?>

<h1>View Presence #<?php echo $model->username; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'username',
		'offlinePresence',
		'offlineDate',
	),
)); ?>
