<?php
/* @var $this TipeUserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipe Users',
);

$this->menu=array(
	array('label'=>'Create TipeUser', 'url'=>array('create')),
	array('label'=>'Manage TipeUser', 'url'=>array('admin')),
);
?>

<h1>Tipe Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
