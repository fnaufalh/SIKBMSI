<?php
/* @var $this SertifikasiMahasiswaController */
/* @var $model SertifikasiMahasiswa */

$this->breadcrumbs=array(
	'Sertifikasi Mahasiswas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SertifikasiMahasiswa', 'url'=>array('index')),
	array('label'=>'Create SertifikasiMahasiswa', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sertifikasi-mahasiswa-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Sertifikasi Mahasiswas</h1>

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
	'id'=>'sertifikasi-mahasiswa-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'auto_code',
		'kode_sertifikasi',
		'kode_mahasiswa',
		'tgl_diambil',
		'create_date',
		'create_by',
		/*
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
