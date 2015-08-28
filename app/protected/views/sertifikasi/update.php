<?php
/* @var $this SertifikasiController */
/* @var $model Sertifikasi */

$this->breadcrumbs=array(
	'Sertifikasis'=>array('index'),
	$model->auto_code=>array('view','id'=>$model->auto_code),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sertifikasi', 'url'=>array('index')),
	array('label'=>'Create Sertifikasi', 'url'=>array('create')),
	array('label'=>'View Sertifikasi', 'url'=>array('view', 'id'=>$model->auto_code)),
	array('label'=>'Manage Sertifikasi', 'url'=>array('admin')),
);
?>

<h1>Update Sertifikasi <?php echo $model->auto_code; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>