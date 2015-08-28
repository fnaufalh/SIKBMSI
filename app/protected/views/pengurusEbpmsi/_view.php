<?php
/* @var $this PengurusEbpmsiController */
/* @var $data PengurusEbpmsi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('auto_code')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->auto_code), array('view', 'id'=>$data->auto_code)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_mahasiswa')); ?>:</b>
	<?php echo CHtml::encode($data->kode_mahasiswa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_emsi')); ?>:</b>
	<?php echo CHtml::encode($data->is_emsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('posisi')); ?>:</b>
	<?php echo CHtml::encode($data->posisi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('department_komisi')); ?>:</b>
	<?php echo CHtml::encode($data->department_komisi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_aktif')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_aktif); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_nonaktif')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_nonaktif); ?>
	<br />

	<?php /*
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