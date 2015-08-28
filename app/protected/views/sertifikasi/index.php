<?php
/* @var $this SertifikasiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sertifikasis',
);

$this->menu=array(
	array('label'=>'Create Sertifikasi', 'url'=>array('create')),
	array('label'=>'Manage Sertifikasi', 'url'=>array('admin')),
);
?>

<h1>Sertifikasis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
