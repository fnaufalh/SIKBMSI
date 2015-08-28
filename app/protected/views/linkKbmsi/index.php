<?php
/* @var $this LinkKbmsiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Link Kbmsis',
);

$this->menu=array(
	array('label'=>'Create LinkKbmsi', 'url'=>array('create')),
	array('label'=>'Manage LinkKbmsi', 'url'=>array('admin')),
);
?>

<h1>Link Kbmsis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
