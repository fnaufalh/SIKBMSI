<?php
/* @var $this RekapKeuanganController */
/* @var $model RekapKeuangan */

$this->breadcrumbs=array(
	'Rekap Keuangans'=>array('index'),
	$model->auto_code=>array('view','id'=>$model->auto_code),
	'Update',
);

$this->menu=array(
	array('label'=>'List RekapKeuangan', 'url'=>array('index')),
	array('label'=>'Create RekapKeuangan', 'url'=>array('create')),
	array('label'=>'View RekapKeuangan', 'url'=>array('view', 'id'=>$model->auto_code)),
	array('label'=>'Manage RekapKeuangan', 'url'=>array('admin')),
);
?>

<h1>Update RekapKeuangan <?php echo $model->auto_code; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>