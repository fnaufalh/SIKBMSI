<?php
/* @var $this SertifikasiMahasiswaController */
/* @var $model SertifikasiMahasiswa */

$this->breadcrumbs=array(
	'Sertifikasi Mahasiswas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SertifikasiMahasiswa', 'url'=>array('index')),
	array('label'=>'Manage SertifikasiMahasiswa', 'url'=>array('admin')),
);
?>

<h1>Create SertifikasiMahasiswa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>