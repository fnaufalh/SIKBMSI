<?php
/* @var $this InoutSuratController */
/* @var $model InoutSurat */

$this->breadcrumbs=array(
	'Inout Surats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InoutSurat', 'url'=>array('index')),
	array('label'=>'Manage InoutSurat', 'url'=>array('admin')),
);
?>

<h1>Create InoutSurat</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>