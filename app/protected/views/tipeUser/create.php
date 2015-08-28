<?php
/* @var $this TipeUserController */
/* @var $model TipeUser */

$this->breadcrumbs=array(
	'Tipe Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipeUser', 'url'=>array('index')),
	array('label'=>'Manage TipeUser', 'url'=>array('admin')),
);
?>

<h1>Create TipeUser</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>