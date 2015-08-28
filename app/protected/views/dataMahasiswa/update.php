<?php
/* @var $this DataMahasiswaController */
/* @var $model DataMahasiswa */

$this->breadcrumbs=array(
	'Data Mahasiswas'=>array('index'),
	$model->auto_code=>array('view','id'=>$model->auto_code),
	'Update',
);

$this->menu=array(
	array('label'=>'List DataMahasiswa', 'url'=>array('index')),
	array('label'=>'Create DataMahasiswa', 'url'=>array('create')),
	array('label'=>'View DataMahasiswa', 'url'=>array('view', 'id'=>$model->auto_code)),
	array('label'=>'Manage DataMahasiswa', 'url'=>array('admin')),
);
?>

<h1>Update DataMahasiswa <?php echo $model->auto_code; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>