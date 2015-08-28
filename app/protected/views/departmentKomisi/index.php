<?php
/* @var $this DepartmentKomisiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Department Komisis',
);

$this->menu=array(
	array('label'=>'Create DepartmentKomisi', 'url'=>array('create')),
	array('label'=>'Manage DepartmentKomisi', 'url'=>array('admin')),
);
?>

<h1>Department Komisis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
