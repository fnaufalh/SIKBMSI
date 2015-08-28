<?php
/* @var $this DepartmentKomisiController */
/* @var $model DepartmentKomisi */

$this->breadcrumbs=array(
	'Department Komisis'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List DepartmentKomisi', 'url'=>array('index')),
	array('label'=>'Create DepartmentKomisi', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#department-komisi-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Department Komisis</h1>

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
	'id'=>'department-komisi-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'auto_code',
		'nama',
		'create_date',
		'create_by',
		'edit_date',
		'edit_by',
		/*
		'is_delete',
		'delete_date',
		'delete_by',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
