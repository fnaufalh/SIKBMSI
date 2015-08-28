<?php
/* @var $this PosisiDepartmentController */
/* @var $model PosisiDepartment */

$this->breadcrumbs=array(
	'Posisi Departments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PosisiDepartment', 'url'=>array('index')),
	array('label'=>'Manage PosisiDepartment', 'url'=>array('admin')),
);
?>

<h1>Create PosisiDepartment</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>