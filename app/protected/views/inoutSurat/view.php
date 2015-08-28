<?php
/* @var $this InoutSuratController */
/* @var $model InoutSurat */

$this->breadcrumbs=array(
	'Inout Surats'=>array('index'),
	$model->auto_code,
);

$this->menu=array(
	array('label'=>'List InoutSurat', 'url'=>array('index')),
	array('label'=>'Create InoutSurat', 'url'=>array('create')),
	array('label'=>'Update InoutSurat', 'url'=>array('update', 'id'=>$model->auto_code)),
	array('label'=>'Delete InoutSurat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->auto_code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InoutSurat', 'url'=>array('admin')),
);
?>

<h1>View InoutSurat #<?php echo $model->auto_code; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'auto_code',
		'nomor_surat',
		'judul_perihal',
		'dikeluarkan_oleh',
		'tanggal_diterbitkan',
		'create_date',
		'create_by',
		'edit_date',
		'edit_by',
		'is_delete',
		'delete_date',
		'delete_by',
	),
)); ?>
