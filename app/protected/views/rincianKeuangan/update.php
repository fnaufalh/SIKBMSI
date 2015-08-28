<?php
/* @var $this RincianKeuanganController */
/* @var $model RincianKeuangan */

$this->breadcrumbs=array(
	'Rincian Keuangans'=>array('index'),
	$model->auto_code=>array('view','id'=>$model->auto_code),
	'Update',
);

$this->menu=array(
	array('label'=>'List RincianKeuangan', 'url'=>array('index')),
	array('label'=>'Create RincianKeuangan', 'url'=>array('create')),
	array('label'=>'View RincianKeuangan', 'url'=>array('view', 'id'=>$model->auto_code)),
	array('label'=>'Manage RincianKeuangan', 'url'=>array('admin')),
);
?>

<h1>Update RincianKeuangan <?php echo $model->auto_code; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>