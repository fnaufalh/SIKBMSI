<?php
/* @var $this ProkerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Prokers',
);

$this->menu=array(
	array('label'=>'Create Proker', 'url'=>array('create')),
	array('label'=>'Manage Proker', 'url'=>array('admin')),
);
?>

<h1>Prokers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
