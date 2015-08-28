<?php
/* @var $this InventarisKbmsiController */
/* @var $model InventarisKbmsi */

$this->breadcrumbs=array(
	'Inventaris Kbmsis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InventarisKbmsi', 'url'=>array('index')),
	array('label'=>'Manage InventarisKbmsi', 'url'=>array('admin')),
);
?>

<h1>Create InventarisKbmsi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>