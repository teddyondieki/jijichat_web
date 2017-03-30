<?php
/* @var $this RosterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Roster Items',
);

$this->menu=array(
	array('label'=>'Create RosterItem', 'url'=>array('create')),
	array('label'=>'Manage RosterItem', 'url'=>array('admin')),
);
?>

<h1>Roster Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
