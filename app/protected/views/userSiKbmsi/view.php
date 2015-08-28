<?php
/* @var $this UserSiKbmsiController */
/* @var $model UserSiKbmsi */

$this->breadcrumbs=array(
	'User Si Kbmsis'=>array('index'),
	$model->auto_code,
);

$this->menu=array(
	array('label'=>'List UserSiKbmsi', 'url'=>array('index')),
	array('label'=>'Create UserSiKbmsi', 'url'=>array('create')),
	array('label'=>'Update UserSiKbmsi', 'url'=>array('update', 'id'=>$model->auto_code)),
	array('label'=>'Delete UserSiKbmsi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->auto_code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserSiKbmsi', 'url'=>array('admin')),
);
?>

<h1>View UserSiKbmsi #<?php echo $model->auto_code; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'auto_code',
		'username',
		'password',
		'nama_user',
		'tipe_user',
		'is_active',
		'create_date',
		'create_by',
		'edit_date',
		'edit_by',
		'is_deleted',
		'delete_date',
		'delete_by',
	),
)); ?>
