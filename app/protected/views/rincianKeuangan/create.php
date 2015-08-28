<?php
/* @var $this RincianKeuanganController */
/* @var $model RincianKeuangan */

$this->breadcrumbs=array(
	'Rincian Keuangans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RincianKeuangan', 'url'=>array('index')),
	array('label'=>'Manage RincianKeuangan', 'url'=>array('admin')),
);
?>

<h1>Create RincianKeuangan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>