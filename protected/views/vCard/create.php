<?php
/* @var $this VCardController */
/* @var $model VCard */

$this->breadcrumbs=array(
	'Vcards'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List VCard', 'url'=>array('index')),
	array('label'=>'Manage VCard', 'url'=>array('admin')),
);
?>

<h1>Create VCard</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>