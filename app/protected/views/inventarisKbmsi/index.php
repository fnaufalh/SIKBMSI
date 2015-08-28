<?php
/* @var $this InventarisKbmsiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inventaris Kbmsis',
);

$this->menu=array(
	array('label'=>'Create InventarisKbmsi', 'url'=>array('create')),
	array('label'=>'Manage InventarisKbmsi', 'url'=>array('admin')),
);
?>

<h1>Inventaris Kbmsis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
