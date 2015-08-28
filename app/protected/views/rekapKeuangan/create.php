<?php
/* @var $this RekapKeuanganController */
/* @var $model RekapKeuangan */

$this->breadcrumbs=array(
	'Rekap Keuangans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RekapKeuangan', 'url'=>array('index')),
	array('label'=>'Manage RekapKeuangan', 'url'=>array('admin')),
);
?>

<h1>Create RekapKeuangan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>