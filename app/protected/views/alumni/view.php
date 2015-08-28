<?php
/* @var $this AlumniController */
/* @var $model Alumni */

$this->breadcrumbs=array(
	'Alumnis'=>array('index'),
	$model->auto_code,
);

$this->menu=array(
	array('label'=>'List Alumni', 'url'=>array('index')),
	array('label'=>'Create Alumni', 'url'=>array('create')),
	array('label'=>'Update Alumni', 'url'=>array('update', 'id'=>$model->auto_code)),
	array('label'=>'Delete Alumni', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->auto_code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Alumni', 'url'=>array('admin')),
);
?>

<h1>View Alumni #<?php echo $model->auto_code; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'auto_code',
		'kode_mahasiswa',
		'tahun_lulus',
		'ipk',
		'judul_skripsi',
		'usaha_kerja',
		'nama_usaha_kerja',
		'alamat_usaha_kerja',
		'create_date',
		'create_by',
		'edit_date',
		'edit_by',
		'is_delete',
		'delete_date',
		'delete_by',
	),
)); ?>
