<?php
/* @var $this VCardController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vcards',
);

$this->menu=array(
	array('label'=>'Create VCard', 'url'=>array('create')),
	array('label'=>'Manage VCard', 'url'=>array('admin')),
);
?>

<h1>Vcards</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
