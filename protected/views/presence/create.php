<?php
/* @var $this PresenceController */
/* @var $model Presence */

$this->breadcrumbs=array(
	'Presences'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Presence', 'url'=>array('index')),
	array('label'=>'Manage Presence', 'url'=>array('admin')),
);
?>

<h1>Create Presence</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>