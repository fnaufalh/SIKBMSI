<?php
/* @var $this DepartmentKomisiController */
/* @var $model DepartmentKomisi */

$this->breadcrumbs=array(
	'Department Komisis'=>array('index'),
	$model->auto_code=>array('view','id'=>$model->auto_code),
	'Update',
);

$this->menu=array(
	array('label'=>'List DepartmentKomisi', 'url'=>array('index')),
	array('label'=>'Create DepartmentKomisi', 'url'=>array('create')),
	array('label'=>'View DepartmentKomisi', 'url'=>array('view', 'id'=>$model->auto_code)),
	array('label'=>'Manage DepartmentKomisi', 'url'=>array('admin')),
);
?>

<h1>Update DepartmentKomisi <?php echo $model->auto_code; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>