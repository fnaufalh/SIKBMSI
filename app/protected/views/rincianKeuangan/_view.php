<?php
/* @var $this RincianKeuanganController */
/* @var $data RincianKeuangan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('auto_code')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->auto_code), array('view', 'id'=>$data->auto_code)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_rekap')); ?>:</b>
	<?php echo CHtml::encode($data->kode_rekap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rincian')); ?>:</b>
	<?php echo CHtml::encode($data->rincian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_satuan')); ?>:</b>
	<?php echo CHtml::encode($data->harga_satuan); ?>
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