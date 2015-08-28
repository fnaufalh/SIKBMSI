<?php
/* @var $this ProdukKbmsiController */
/* @var $model ProdukKbmsi */

$this->breadcrumbs=array(
	'Produk Kbmsis'=>array('index'),
	$model->auto_code=>array('view','id'=>$model->auto_code),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProdukKbmsi', 'url'=>array('index')),
	array('label'=>'Create ProdukKbmsi', 'url'=>array('create')),
	array('label'=>'View ProdukKbmsi', 'url'=>array('view', 'id'=>$model->auto_code)),
	array('label'=>'Manage ProdukKbmsi', 'url'=>array('admin')),
);
?>

<h1>Update ProdukKbmsi <?php echo $model->auto_code; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>