<?php
/* @var $this PosisiDepartmentController */
/* @var $model PosisiDepartment */

$this->breadcrumbs=array(
	'Posisi Departments'=>array('index'),
	$model->auto_code=>array('view','id'=>$model->auto_code),
	'Update',
);

$this->menu=array(
	array('label'=>'List PosisiDepartment', 'url'=>array('index')),
	array('label'=>'Create PosisiDepartment', 'url'=>array('create')),
	array('label'=>'View PosisiDepartment', 'url'=>array('view', 'id'=>$model->auto_code)),
	array('label'=>'Manage PosisiDepartment', 'url'=>array('admin')),
);
?>

<h1>Update PosisiDepartment <?php echo $model->auto_code; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>