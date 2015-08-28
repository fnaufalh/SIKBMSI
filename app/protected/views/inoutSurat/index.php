<?php
/* @var $this InoutSuratController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inout Surats',
);

$this->menu=array(
	array('label'=>'Create InoutSurat', 'url'=>array('create')),
	array('label'=>'Manage InoutSurat', 'url'=>array('admin')),
);
?>

<h1>Inout Surats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
