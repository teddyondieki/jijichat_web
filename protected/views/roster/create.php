<?php
/* @var $this RosterController */
/* @var $model RosterItem */

$this->breadcrumbs=array(
	'Roster Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RosterItem', 'url'=>array('index')),
	array('label'=>'Manage RosterItem', 'url'=>array('admin')),
);
?>

<h1>Create RosterItem</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>