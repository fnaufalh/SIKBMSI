<?php
/* @var $this SertifikasiMahasiswaController */
/* @var $model SertifikasiMahasiswa */

$this->breadcrumbs=array(
	'Sertifikasi Mahasiswas'=>array('index'),
	$model->auto_code,
);

$this->menu=array(
	array('label'=>'List SertifikasiMahasiswa', 'url'=>array('index')),
	array('label'=>'Create SertifikasiMahasiswa', 'url'=>array('create')),
	array('label'=>'Update SertifikasiMahasiswa', 'url'=>array('update', 'id'=>$model->auto_code)),
	array('label'=>'Delete SertifikasiMahasiswa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->auto_code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SertifikasiMahasiswa', 'url'=>array('admin')),
);
?>

<h1>View SertifikasiMahasiswa #<?php echo $model->auto_code; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'auto_code',
		'kode_sertifikasi',
		'kode_mahasiswa',
		'tgl_diambil',
		'create_date',
		'create_by',
		'edit_date',
		'edit_by',
		'is_delete',
		'delete_date',
		'delete_by',
	),
)); ?>
