<?php
/* @var $this UserStatusController */
/* @var $model UserStatus */

$this->breadcrumbs=array(
	'User Statuses'=>array('index'),
	$model->username,
);

$this->menu=array(
	array('label'=>'List UserStatus', 'url'=>array('index')),
	array('label'=>'Create UserStatus', 'url'=>array('create')),
	array('label'=>'Update UserStatus', 'url'=>array('update', 'id'=>$model->username)),
	array('label'=>'Delete UserStatus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->username),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserStatus', 'url'=>array('admin')),
);
?>

<h1>View UserStatus #<?php echo $model->username; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'username',
		'jid',
		'resource',
		'online',
		'statusMessage',
		'lastIpAddress',
		'lastSeenDate',
	),
)); ?>
