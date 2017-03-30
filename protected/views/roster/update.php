<?php
/* @var $this RosterController */
/* @var $model RosterItem */

$this->breadcrumbs=array(
	'Roster Items'=>array('index'),
	$model->rosterID=>array('view','id'=>$model->rosterID),
	'Update',
);

$this->menu=array(
	array('label'=>'List RosterItem', 'url'=>array('index')),
	array('label'=>'Create RosterItem', 'url'=>array('create')),
	array('label'=>'View RosterItem', 'url'=>array('view', 'id'=>$model->rosterID)),
	array('label'=>'Manage RosterItem', 'url'=>array('admin')),
);
?>

<h1>Update RosterItem <?php echo $model->rosterID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>