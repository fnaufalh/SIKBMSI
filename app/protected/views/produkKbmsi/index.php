<?php
/* @var $this ProdukKbmsiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Produk Kbmsis',
);

$this->menu=array(
	array('label'=>'Create ProdukKbmsi', 'url'=>array('create')),
	array('label'=>'Manage ProdukKbmsi', 'url'=>array('admin')),
);
?>

<h1>Produk Kbmsis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
