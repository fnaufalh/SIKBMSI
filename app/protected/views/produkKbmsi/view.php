<?php
/* @var $this ProdukKbmsiController */
/* @var $model ProdukKbmsi */

$this->breadcrumbs=array(
	'Produk Kbmsis'=>array('index'),
	$model->auto_code,
);

$this->menu=array(
	array('label'=>'List ProdukKbmsi', 'url'=>array('index')),
	array('label'=>'Create ProdukKbmsi', 'url'=>array('create')),
	array('label'=>'Update ProdukKbmsi', 'url'=>array('update', 'id'=>$model->auto_code)),
	array('label'=>'Delete ProdukKbmsi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->auto_code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProdukKbmsi', 'url'=>array('admin')),
);
?>

<h1>View ProdukKbmsi #<?php echo $model->auto_code; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'auto_code',
		'nama_produk',
		'is_individu',
		'tahun',
		'deskripsi',
		'anggota',
		'create_date',
		'create_by',
		'edit_date',
		'edit_by',
		'is_delete',
		'delete_date',
		'delete_by',
	),
)); ?>
