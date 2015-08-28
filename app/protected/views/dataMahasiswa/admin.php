<?php
/* @var $this DataMahasiswaController */
/* @var $model DataMahasiswa */

$this->breadcrumbs=array(
	'Data Mahasiswas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List DataMahasiswa', 'url'=>array('index')),
	array('label'=>'Create DataMahasiswa', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#data-mahasiswa-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Data Mahasiswas</h1>

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
	'id'=>'data-mahasiswa-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'auto_code',
		'nim',
		'nama',
		'email',
		'no_hp',
		'no_telp',
		/*
		'alamat',
		'tgl_lahir',
		'is_lulus',
		'create_date',
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
