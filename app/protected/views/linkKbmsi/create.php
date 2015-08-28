<?php
/* @var $this LinkKbmsiController */
/* @var $model LinkKbmsi */

$this->breadcrumbs=array(
	'Link Kbmsis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LinkKbmsi', 'url'=>array('index')),
	array('label'=>'Manage LinkKbmsi', 'url'=>array('admin')),
);
?>

<h1>Create LinkKbmsi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>