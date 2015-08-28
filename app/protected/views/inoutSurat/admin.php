<?php
/* @var $this InoutSuratController */
/* @var $model InoutSurat */

$this->breadcrumbs=array(
	'Inout Surats'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List InoutSurat', 'url'=>array('index')),
	array('label'=>'Create InoutSurat', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#inout-surat-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Inout Surats</h1>

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
	'id'=>'inout-surat-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'auto_code',
		'nomor_surat',
		'judul_perihal',
		'dikeluarkan_oleh',
		'tanggal_diterbitkan',
		'create_date',
		/*
		'create_by',
		'edit_date',
		'edit_by',
		'is_delete',
		'delete_date',
		'delete_by',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
