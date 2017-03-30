<?php
/* @var $this UserStatusController */
/* @var $model UserStatus */

$this->breadcrumbs=array(
	'User Statuses'=>array('index'),
	$model->username=>array('view','id'=>$model->username),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserStatus', 'url'=>array('index')),
	array('label'=>'Create UserStatus', 'url'=>array('create')),
	array('label'=>'View UserStatus', 'url'=>array('view', 'id'=>$model->username)),
	array('label'=>'Manage UserStatus', 'url'=>array('admin')),
);
?>

<h1>Update UserStatus <?php echo $model->username; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>