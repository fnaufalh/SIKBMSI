<?php
/* @var $this LinkKbmsiController */
/* @var $model LinkKbmsi */

$this->breadcrumbs=array(
	'Link Kbmsis'=>array('index'),
	$model->auto_code=>array('view','id'=>$model->auto_code),
	'Update',
);

$this->menu=array(
	array('label'=>'List LinkKbmsi', 'url'=>array('index')),
	array('label'=>'Create LinkKbmsi', 'url'=>array('create')),
	array('label'=>'View LinkKbmsi', 'url'=>array('view', 'id'=>$model->auto_code)),
	array('label'=>'Manage LinkKbmsi', 'url'=>array('admin')),
);
?>

<h1>Update LinkKbmsi <?php echo $model->auto_code; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>