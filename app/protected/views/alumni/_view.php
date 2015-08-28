<?php
/* @var $this AlumniController */
/* @var $data Alumni */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('auto_code')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->auto_code), array('view', 'id'=>$data->auto_code)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_mahasiswa')); ?>:</b>
	<?php echo CHtml::encode($data->kode_mahasiswa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun_lulus')); ?>:</b>
	<?php echo CHtml::encode($data->tahun_lulus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ipk')); ?>:</b>
	<?php echo CHtml::encode($data->ipk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul_skripsi')); ?>:</b>
	<?php echo CHtml::encode($data->judul_skripsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usaha_kerja')); ?>:</b>
	<?php echo CHtml::encode($data->usaha_kerja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_usaha_kerja')); ?>:</b>
	<?php echo CHtml::encode($data->nama_usaha_kerja); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat_usaha_kerja')); ?>:</b>
	<?php echo CHtml::encode($data->alamat_usaha_kerja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
	<?php echo CHtml::encode($data->create_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_by')); ?>:</b>
	<?php echo CHtml::encode($data->create_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edit_date')); ?>:</b>
	<?php echo CHtml::encode($data->edit_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edit_by')); ?>:</b>
	<?php echo CHtml::encode($data->edit_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_delete')); ?>:</b>
	<?php echo CHtml::encode($data->is_delete); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('delete_date')); ?>:</b>
	<?php echo CHtml::encode($data->delete_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('delete_by')); ?>:</b>
	<?php echo CHtml::encode($data->delete_by); ?>
	<br />

	*/ ?>

</div>