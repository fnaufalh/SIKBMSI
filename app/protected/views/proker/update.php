<?php
/* @var $this ProkerController */
/* @var $model Proker */

$this->breadcrumbs=array(
	'Prokers'=>array('index'),
	$model->auto_code=>array('view','id'=>$model->auto_code),
	'Update',
);

$this->menu=array(
	array('label'=>'List Proker', 'url'=>array('index')),
	array('label'=>'Create Proker', 'url'=>array('create')),
	array('label'=>'View Proker', 'url'=>array('view', 'id'=>$model->auto_code)),
	array('label'=>'Manage Proker', 'url'=>array('admin')),
);
?>

<h1>Update Proker <?php echo $model->auto_code; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>