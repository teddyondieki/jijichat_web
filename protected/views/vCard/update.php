<?php
/* @var $this VCardController */
/* @var $model VCard */

$this->breadcrumbs=array(
	'Vcards'=>array('index'),
	$model->username=>array('view','id'=>$model->username),
	'Update',
);

$this->menu=array(
	array('label'=>'List VCard', 'url'=>array('index')),
	array('label'=>'Create VCard', 'url'=>array('create')),
	array('label'=>'View VCard', 'url'=>array('view', 'id'=>$model->username)),
	array('label'=>'Manage VCard', 'url'=>array('admin')),
);
?>

<h1>Update VCard <?php echo $model->username; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>