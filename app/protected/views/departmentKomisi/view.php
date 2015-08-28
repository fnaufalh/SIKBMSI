<?php
/* @var $this DepartmentKomisiController */
/* @var $model DepartmentKomisi */

$this->breadcrumbs=array(
	'Department Komisis'=>array('index'),
	$model->auto_code,
);

$this->menu=array(
	array('label'=>'List DepartmentKomisi', 'url'=>array('index')),
	array('label'=>'Create DepartmentKomisi', 'url'=>array('create')),
	array('label'=>'Update DepartmentKomisi', 'url'=>array('update', 'id'=>$model->auto_code)),
	array('label'=>'Delete DepartmentKomisi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->auto_code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DepartmentKomisi', 'url'=>array('admin')),
);
?>

<h1>View DepartmentKomisi #<?php echo $model->auto_code; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'auto_code',
		'nama',
		'create_date',
		'create_by',
		'edit_date',
		'edit_by',
		'is_delete',
		'delete_date',
		'delete_by',
	),
)); ?>
