<?php
/* @var $this UserSiKbmsiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Si Kbmsis',
);

$this->menu=array(
	array('label'=>'Create UserSiKbmsi', 'url'=>array('create')),
	array('label'=>'Manage UserSiKbmsi', 'url'=>array('admin')),
);
?>

<h1>User Si Kbmsis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
