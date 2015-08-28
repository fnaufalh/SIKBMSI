<?php
/* @var $this ProdukKbmsiController */
/* @var $model ProdukKbmsi */

$this->breadcrumbs=array(
	'Produk Kbmsis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProdukKbmsi', 'url'=>array('index')),
	array('label'=>'Manage ProdukKbmsi', 'url'=>array('admin')),
);
?>

<h1>Create ProdukKbmsi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>