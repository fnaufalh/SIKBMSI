<?php
/* @var $this PengurusEbpmsiController */
/* @var $model PengurusEbpmsi */

$this->breadcrumbs=array(
	'Pengurus Ebpmsis'=>array('index'),
	$model->auto_code=>array('view','id'=>$model->auto_code),
	'Update',
);

$this->menu=array(
	array('label'=>'List PengurusEbpmsi', 'url'=>array('index')),
	array('label'=>'Create PengurusEbpmsi', 'url'=>array('create')),
	array('label'=>'View PengurusEbpmsi', 'url'=>array('view', 'id'=>$model->auto_code)),
	array('label'=>'Manage PengurusEbpmsi', 'url'=>array('admin')),
);
?>

<h1>Update PengurusEbpmsi <?php echo $model->auto_code; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>