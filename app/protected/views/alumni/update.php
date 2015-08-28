<?php
/* @var $this AlumniController */
/* @var $model Alumni */

$this->breadcrumbs=array(
	'Alumnis'=>array('index'),
	$model->auto_code=>array('view','id'=>$model->auto_code),
	'Update',
);

$this->menu=array(
	array('label'=>'List Alumni', 'url'=>array('index')),
	array('label'=>'Create Alumni', 'url'=>array('create')),
	array('label'=>'View Alumni', 'url'=>array('view', 'id'=>$model->auto_code)),
	array('label'=>'Manage Alumni', 'url'=>array('admin')),
);
?>

<h1>Update Alumni <?php echo $model->auto_code; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>