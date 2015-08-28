<?php
/* @var $this UserSiKbmsiController */
/* @var $model UserSiKbmsi */

$this->breadcrumbs=array(
	'User Si Kbmsis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserSiKbmsi', 'url'=>array('index')),
	array('label'=>'Manage UserSiKbmsi', 'url'=>array('admin')),
);
?>

<h1>Create UserSiKbmsi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>