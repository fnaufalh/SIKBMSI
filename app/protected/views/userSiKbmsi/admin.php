<?php
/* @var $this UserSiKbmsiController */
/* @var $model UserSiKbmsi */

$this->breadcrumbs=array(
	'User Si Kbmsis'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List UserSiKbmsi', 'url'=>array('index')),
	array('label'=>'Create UserSiKbmsi', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-si-kbmsi-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage User Si Kbmsis</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-si-kbmsi-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'auto_code',
		'username',
		'password',
		'nama_user',
		'tipe_user',
		'is_active',
		/*
		'create_date',
		'create_by',
		'edit_date',
		'edit_by',
		'is_deleted',
		'delete_date',
		'delete_by',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
