<?php
/* @var $this TipeUserController */
/* @var $model TipeUser */

$this->breadcrumbs=array(
	'Tipe Users'=>array('index'),
	$model->auto_code,
);

$this->menu=array(
	array('label'=>'List TipeUser', 'url'=>array('index')),
	array('label'=>'Create TipeUser', 'url'=>array('create')),
	array('label'=>'Update TipeUser', 'url'=>array('update', 'id'=>$model->auto_code)),
	array('label'=>'Delete TipeUser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->auto_code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipeUser', 'url'=>array('admin')),
);
?>

<h1>View TipeUser #<?php echo $model->auto_code; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'auto_code',
		'nama_tipe',
		'create_date',
		'create_by',
		'edit_date',
		'edit_by',
		'is_delete',
		'delete_date',
		'delete_by',
	),
)); ?>
