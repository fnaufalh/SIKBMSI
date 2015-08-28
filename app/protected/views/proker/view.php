<?php
/* @var $this ProkerController */
/* @var $model Proker */

$this->breadcrumbs=array(
	'Prokers'=>array('index'),
	$model->auto_code,
);

$this->menu=array(
	array('label'=>'List Proker', 'url'=>array('index')),
	array('label'=>'Create Proker', 'url'=>array('create')),
	array('label'=>'Update Proker', 'url'=>array('update', 'id'=>$model->auto_code)),
	array('label'=>'Delete Proker', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->auto_code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Proker', 'url'=>array('admin')),
);
?>

<h1>View Proker #<?php echo $model->auto_code; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'auto_code',
		'nama_proker',
		'department',
		'pj_proker',
		'is_event',
		'nama_event',
		'tempat',
		'tgl_dilaksanakan',
		'tgl_berakhir',
		'create_date',
		'create_by',
		'edit_date',
		'edit_by',
		'is_delete',
		'delete_date',
		'delete_by',
	),
)); ?>
