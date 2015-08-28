<?php
/* @var $this PengurusEbpmsiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pengurus Ebpmsis',
);

$this->menu=array(
	array('label'=>'Create PengurusEbpmsi', 'url'=>array('create')),
	array('label'=>'Manage PengurusEbpmsi', 'url'=>array('admin')),
);
?>

<h1>Pengurus Ebpmsis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
