<?php
/* @var $this PresenceController */
/* @var $model Presence */

$this->breadcrumbs=array(
	'Presences'=>array('index'),
	$model->username=>array('view','id'=>$model->username),
	'Update',
);

$this->menu=array(
	array('label'=>'List Presence', 'url'=>array('index')),
	array('label'=>'Create Presence', 'url'=>array('create')),
	array('label'=>'View Presence', 'url'=>array('view', 'id'=>$model->username)),
	array('label'=>'Manage Presence', 'url'=>array('admin')),
);
?>

<h1>Update Presence <?php echo $model->username; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>