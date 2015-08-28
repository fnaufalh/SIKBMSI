<?php
/* @var $this SertifikasiMahasiswaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sertifikasi Mahasiswas',
);

$this->menu=array(
	array('label'=>'Create SertifikasiMahasiswa', 'url'=>array('create')),
	array('label'=>'Manage SertifikasiMahasiswa', 'url'=>array('admin')),
);
?>

<h1>Sertifikasi Mahasiswas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
