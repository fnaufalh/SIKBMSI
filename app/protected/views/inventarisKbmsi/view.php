<?php
/* @var $this InventarisKbmsiController */
/* @var $model InventarisKbmsi */

$this->breadcrumbs=array(
	'Inventaris Kbmsis'=>array('index'),
	$model->auto_code,
);

$this->menu=array(
	array('label'=>'List InventarisKbmsi', 'url'=>array('index')),
	array('label'=>'Create InventarisKbmsi', 'url'=>array('create')),
	array('label'=>'Update InventarisKbmsi', 'url'=>array('update', 'id'=>$model->auto_code)),
	array('label'=>'Delete InventarisKbmsi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->auto_code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InventarisKbmsi', 'url'=>array('admin')),
);
?>

<h1>View InventarisKbmsi #<?php echo $model->auto_code; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'auto_code',
		'nama_inventaris',
		'tahun',
		'tempat',
		'is_active',
		'create_date',
		'create_by',
		'edit_date',
		'edit_by',
		'is_delete',
		'delete_date',
		'delete_by',
	),
)); ?>
