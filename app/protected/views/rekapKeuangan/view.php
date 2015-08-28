<?php
/* @var $this RekapKeuanganController */
/* @var $model RekapKeuangan */

$this->breadcrumbs=array(
	'Rekap Keuangans'=>array('index'),
	$model->auto_code,
);

$this->menu=array(
	array('label'=>'List RekapKeuangan', 'url'=>array('index')),
	array('label'=>'Create RekapKeuangan', 'url'=>array('create')),
	array('label'=>'Update RekapKeuangan', 'url'=>array('update', 'id'=>$model->auto_code)),
	array('label'=>'Delete RekapKeuangan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->auto_code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RekapKeuangan', 'url'=>array('admin')),
);
?>

<h1>View RekapKeuangan #<?php echo $model->auto_code; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'auto_code',
		'rekap_keuangan',
		'create_date',
		'create_by',
		'edit_date',
		'edit_by',
		'is_delete',
		'delete_date',
		'delete_by',
	),
)); ?>
