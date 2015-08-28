<?php
/* @var $this PengurusEbpmsiController */
/* @var $model PengurusEbpmsi */

$this->breadcrumbs=array(
	'Pengurus Ebpmsis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PengurusEbpmsi', 'url'=>array('index')),
	array('label'=>'Manage PengurusEbpmsi', 'url'=>array('admin')),
);
?>

<h1>Create PengurusEbpmsi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>