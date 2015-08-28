<?php
/* @var $this UserSiKbmsiController */
/* @var $data UserSiKbmsi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('auto_code')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->auto_code), array('view', 'id'=>$data->auto_code)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_user')); ?>:</b>
	<?php echo CHtml::encode($data->nama_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipe_user')); ?>:</b>
	<?php echo CHtml::encode($data->tipe_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
	<?php echo CHtml::encode($data->is_active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
	<?php echo CHtml::encode($data->create_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('create_by')); ?>:</b>
	<?php echo CHtml::encode($data->create_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edit_date')); ?>:</b>
	<?php echo CHtml::encode($data->edit_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edit_by')); ?>:</b>
	<?php echo CHtml::encode($data->edit_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_deleted')); ?>:</b>
	<?php echo CHtml::encode($data->is_deleted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('delete_date')); ?>:</b>
	<?php echo CHtml::encode($data->delete_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('delete_by')); ?>:</b>
	<?php echo CHtml::encode($data->delete_by); ?>
	<br />

	*/ ?>

</div>