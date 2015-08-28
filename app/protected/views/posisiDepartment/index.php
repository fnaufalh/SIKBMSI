<?php
/* @var $this PosisiDepartmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Posisi Departments',
);

$this->menu=array(
	array('label'=>'Create PosisiDepartment', 'url'=>array('create')),
	array('label'=>'Manage PosisiDepartment', 'url'=>array('admin')),
);
?>

<h1>Posisi Departments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
