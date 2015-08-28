<?php
/* @var $this TipeUserController */
/* @var $model TipeUser */

$this->breadcrumbs=array(
	'Tipe Users'=>array('index'),
	$model->auto_code=>array('view','id'=>$model->auto_code),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipeUser', 'url'=>array('index')),
	array('label'=>'Create TipeUser', 'url'=>array('create')),
	array('label'=>'View TipeUser', 'url'=>array('view', 'id'=>$model->auto_code)),
	array('label'=>'Manage TipeUser', 'url'=>array('admin')),
);
?>

<h1>Update TipeUser <?php echo $model->auto_code; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>