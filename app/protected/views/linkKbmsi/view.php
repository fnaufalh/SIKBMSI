<?php
/* @var $this LinkKbmsiController */
/* @var $model LinkKbmsi */

$this->breadcrumbs=array(
	'Link Kbmsis'=>array('index'),
	$model->auto_code,
);

$this->menu=array(
	array('label'=>'List LinkKbmsi', 'url'=>array('index')),
	array('label'=>'Create LinkKbmsi', 'url'=>array('create')),
	array('label'=>'Update LinkKbmsi', 'url'=>array('update', 'id'=>$model->auto_code)),
	array('label'=>'Delete LinkKbmsi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->auto_code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LinkKbmsi', 'url'=>array('admin')),
);
?>

<h1>View LinkKbmsi #<?php echo $model->auto_code; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'auto_code',
		'nama_instansi_link',
		'telp',
		'alamat',
		'kota',
		'create_date',
		'create_by',
		'edit_date',
		'edit_by',
		'is_delete',
		'delete_date',
		'delete_by',
	),
)); ?>
