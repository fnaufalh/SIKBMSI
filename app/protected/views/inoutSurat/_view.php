<?php
/* @var $this InoutSuratController */
/* @var $data InoutSurat */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('auto_code')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->auto_code), array('view', 'id'=>$data->auto_code)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomor_surat')); ?>:</b>
	<?php echo CHtml::encode($data->nomor_surat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul_perihal')); ?>:</b>
	<?php echo CHtml::encode($data->judul_perihal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dikeluarkan_oleh')); ?>:</b>
	<?php echo CHtml::encode($data->dikeluarkan_oleh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_diterbitkan')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_diterbitkan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
	<?php echo CHtml::encode($data->create_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_by')); ?>:</b>
	<?php echo CHtml::encode($data->create_by); ?>
	<br />

	<?php /*
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