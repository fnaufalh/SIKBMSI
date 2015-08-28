<?php
/* @var $this DepartmentKomisiController */
/* @var $model DepartmentKomisi */

$this->breadcrumbs=array(
	'Department Komisis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DepartmentKomisi', 'url'=>array('index')),
	array('label'=>'Manage DepartmentKomisi', 'url'=>array('admin')),
);
?>

<h1>Create DepartmentKomisi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>