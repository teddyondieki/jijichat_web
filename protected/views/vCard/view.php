<?php
/* @var $this VCardController */
/* @var $model VCard */

$this->breadcrumbs=array(
	'Vcards'=>array('index'),
	$model->username,
);

$this->menu=array(
	array('label'=>'List VCard', 'url'=>array('index')),
	array('label'=>'Create VCard', 'url'=>array('create')),
	array('label'=>'Update VCard', 'url'=>array('update', 'id'=>$model->username)),
	array('label'=>'Delete VCard', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->username),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage VCard', 'url'=>array('admin')),
);
?>

<h1>View VCard #<?php echo $model->username; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'username',
		'vcard',
	),
)); ?>
