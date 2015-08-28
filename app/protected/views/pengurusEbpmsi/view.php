<?php
/* @var $this PengurusEbpmsiController */
/* @var $model PengurusEbpmsi */

$this->breadcrumbs=array(
	'Pengurus Ebpmsis'=>array('index'),
	$model->auto_code,
);

$this->menu=array(
	array('label'=>'List PengurusEbpmsi', 'url'=>array('index')),
	array('label'=>'Create PengurusEbpmsi', 'url'=>array('create')),
	array('label'=>'Update PengurusEbpmsi', 'url'=>array('update', 'id'=>$model->auto_code)),
	array('label'=>'Delete PengurusEbpmsi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->auto_code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PengurusEbpmsi', 'url'=>array('admin')),
);
?>

<h1>View PengurusEbpmsi #<?php echo $model->auto_code; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'auto_code',
		'kode_mahasiswa',
		'is_emsi',
		'posisi',
		'department_komisi',
		'tanggal_aktif',
		'tanggal_nonaktif',
		'create_date',
		'create_by',
		'edit_date',
		'edit_by',
		'is_delete',
		'delete_date',
		'delete_by',
	),
)); ?>
