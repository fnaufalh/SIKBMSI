<?php
/* @var $this InoutSuratController */
/* @var $model InoutSurat */

$this->breadcrumbs=array(
	'Inout Surats'=>array('index'),
	$model->auto_code=>array('view','id'=>$model->auto_code),
	'Update',
);

$this->menu=array(
	array('label'=>'List InoutSurat', 'url'=>array('index')),
	array('label'=>'Create InoutSurat', 'url'=>array('create')),
	array('label'=>'View InoutSurat', 'url'=>array('view', 'id'=>$model->auto_code)),
	array('label'=>'Manage InoutSurat', 'url'=>array('admin')),
);
?>

<h1>Update InoutSurat <?php echo $model->auto_code; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>