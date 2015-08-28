<?php
/* @var $this SertifikasiMahasiswaController */
/* @var $model SertifikasiMahasiswa */

$this->breadcrumbs=array(
	'Sertifikasi Mahasiswas'=>array('index'),
	$model->auto_code=>array('view','id'=>$model->auto_code),
	'Update',
);

$this->menu=array(
	array('label'=>'List SertifikasiMahasiswa', 'url'=>array('index')),
	array('label'=>'Create SertifikasiMahasiswa', 'url'=>array('create')),
	array('label'=>'View SertifikasiMahasiswa', 'url'=>array('view', 'id'=>$model->auto_code)),
	array('label'=>'Manage SertifikasiMahasiswa', 'url'=>array('admin')),
);
?>

<h1>Update SertifikasiMahasiswa <?php echo $model->auto_code; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>