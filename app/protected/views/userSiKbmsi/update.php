<?php
/* @var $this UserSiKbmsiController */
/* @var $model UserSiKbmsi */

$this->breadcrumbs=array(
	'User Si Kbmsis'=>array('index'),
	$model->auto_code=>array('view','id'=>$model->auto_code),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserSiKbmsi', 'url'=>array('index')),
	array('label'=>'Create UserSiKbmsi', 'url'=>array('create')),
	array('label'=>'View UserSiKbmsi', 'url'=>array('view', 'id'=>$model->auto_code)),
	array('label'=>'Manage UserSiKbmsi', 'url'=>array('admin')),
);
?>

<h1>Update UserSiKbmsi <?php echo $model->auto_code; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>