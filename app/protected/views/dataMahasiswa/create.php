<?php
/* @var $this DataMahasiswaController */
/* @var $model DataMahasiswa */

$this->breadcrumbs=array(
	'Data Mahasiswas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DataMahasiswa', 'url'=>array('index')),
	array('label'=>'Manage DataMahasiswa', 'url'=>array('admin')),
);
?>

<h1>Create DataMahasiswa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>