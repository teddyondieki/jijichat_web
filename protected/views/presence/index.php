<?php
/* @var $this PresenceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Presences',
);

$this->menu=array(
	array('label'=>'Create Presence', 'url'=>array('create')),
	array('label'=>'Manage Presence', 'url'=>array('admin')),
);
?>

<h1>Presences</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
