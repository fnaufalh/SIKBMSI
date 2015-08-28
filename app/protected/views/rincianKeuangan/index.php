<?php
/* @var $this RincianKeuanganController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rincian Keuangans',
);

$this->menu=array(
	array('label'=>'Create RincianKeuangan', 'url'=>array('create')),
	array('label'=>'Manage RincianKeuangan', 'url'=>array('admin')),
);
?>

<h1>Rincian Keuangans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
