<?php
/* @var $this SertifikasiController */
/* @var $model Sertifikasi */

$this->breadcrumbs=array(
	'Sertifikasis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sertifikasi', 'url'=>array('index')),
	array('label'=>'Manage Sertifikasi', 'url'=>array('admin')),
);
?>

<h1>Create Sertifikasi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>