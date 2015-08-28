<?php
/* @var $this PosisiDepartmentController */
/* @var $model PosisiDepartment */

$this->breadcrumbs=array(
	'Posisi Departments'=>array('index'),
	$model->auto_code,
);

$this->menu=array(
	array('label'=>'List PosisiDepartment', 'url'=>array('index')),
	array('label'=>'Create PosisiDepartment', 'url'=>array('create')),
	array('label'=>'Update PosisiDepartment', 'url'=>array('update', 'id'=>$model->auto_code)),
	array('label'=>'Delete PosisiDepartment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->auto_code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PosisiDepartment', 'url'=>array('admin')),
);
?>

<h1>View PosisiDepartment #<?php echo $model->auto_code; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'auto_code',
		'posisi',
		'create_date',
		'create_by',
		'edit_date',
		'edit_by',
		'is_delete',
		'delete_date',
		'delete_by',
	),
)); ?>
