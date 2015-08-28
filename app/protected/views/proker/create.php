<?php
/* @var $this ProkerController */
/* @var $model Proker */

$this->breadcrumbs=array(
	'Prokers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Proker', 'url'=>array('index')),
	array('label'=>'Manage Proker', 'url'=>array('admin')),
);
?>

<h1>Create Proker</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>