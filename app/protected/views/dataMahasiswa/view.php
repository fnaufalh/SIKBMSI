<?php
/* @var $this DataMahasiswaController */
/* @var $model DataMahasiswa */

$this->breadcrumbs=array(
	'Data Mahasiswas'=>array('index'),
	$model->auto_code,
);

$this->menu=array(
	array('label'=>'List DataMahasiswa', 'url'=>array('index')),
	array('label'=>'Create DataMahasiswa', 'url'=>array('create')),
	array('label'=>'Update DataMahasiswa', 'url'=>array('update', 'id'=>$model->auto_code)),
	array('label'=>'Delete DataMahasiswa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->auto_code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DataMahasiswa', 'url'=>array('admin')),
);
?>

<h1>View DataMahasiswa #<?php echo $model->auto_code; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'auto_code',
		'nim',
		'nama',
		'email',
		'no_hp',
		'no_telp',
		'alamat',
		'tgl_lahir',
		'is_lulus',
		'create_date',
		'create_by',
		'edit_date',
		'edit_by',
		'is_delete',
		'delete_date',
		'delete_by',
	),
)); ?>
