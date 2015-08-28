<?php
/* @var $this RekapKeuanganController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rekap Keuangans',
);

$this->menu=array(
	array('label'=>'Create RekapKeuangan', 'url'=>array('create')),
	array('label'=>'Manage RekapKeuangan', 'url'=>array('admin')),
);
?>

<h1>Rekap Keuangans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
