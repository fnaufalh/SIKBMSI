<?php
/* @var $this RincianKeuanganController */
/* @var $model RincianKeuangan */

$this->breadcrumbs=array(
	'Rincian Keuangans'=>array('index'),
	$model->auto_code,
);

$this->menu=array(
	array('label'=>'List RincianKeuangan', 'url'=>array('index')),
	array('label'=>'Create RincianKeuangan', 'url'=>array('create')),
	array('label'=>'Update RincianKeuangan', 'url'=>array('update', 'id'=>$model->auto_code)),
	array('label'=>'Delete RincianKeuangan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->auto_code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RincianKeuangan', 'url'=>array('admin')),
);
?>

<h1>View RincianKeuangan #<?php echo $model->auto_code; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'auto_code',
		'kode_rekap',
		'rincian',
		'jumlah',
		'harga_satuan',
		'create_date',
		'create_by',
		'edit_date',
		'edit_by',
		'is_delete',
		'delete_date',
		'delete_by',
	),
)); ?>
