<?php
/* @var $this DataMahasiswaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Data Mahasiswas',
);

$this->menu=array(
	array('label'=>'Create DataMahasiswa', 'url'=>array('create')),
	array('label'=>'Manage DataMahasiswa', 'url'=>array('admin')),
);
?>

<h1>Data Mahasiswas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
