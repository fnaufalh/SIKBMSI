<?php
/* @var $this InventarisKbmsiController */
/* @var $model InventarisKbmsi */

$this->breadcrumbs=array(
	'Inventaris Kbmsis'=>array('index'),
	$model->auto_code=>array('view','id'=>$model->auto_code),
	'Update',
);

$this->menu=array(
	array('label'=>'List InventarisKbmsi', 'url'=>array('index')),
	array('label'=>'Create InventarisKbmsi', 'url'=>array('create')),
	array('label'=>'View InventarisKbmsi', 'url'=>array('view', 'id'=>$model->auto_code)),
	array('label'=>'Manage InventarisKbmsi', 'url'=>array('admin')),
);
?>

<h1>Update InventarisKbmsi <?php echo $model->auto_code; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>