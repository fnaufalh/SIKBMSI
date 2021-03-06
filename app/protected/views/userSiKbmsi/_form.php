<?php
/* @var $this UserSiKbmsiController */
/* @var $model UserSiKbmsi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-si-kbmsi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'auto_code'); ?>
		<?php echo $form->textField($model,'auto_code',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'auto_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_user'); ?>
		<?php echo $form->textField($model,'nama_user',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipe_user'); ?>
		<?php echo $form->textField($model,'tipe_user',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'tipe_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_active'); ?>
		<?php echo $form->textField($model,'is_active',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'is_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
		<?php echo $form->error($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_by'); ?>
		<?php echo $form->textField($model,'create_by',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'create_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'edit_date'); ?>
		<?php echo $form->textField($model,'edit_date'); ?>
		<?php echo $form->error($model,'edit_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'edit_by'); ?>
		<?php echo $form->textField($model,'edit_by',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'edit_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_deleted'); ?>
		<?php echo $form->textField($model,'is_deleted',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'is_deleted'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'delete_date'); ?>
		<?php echo $form->textField($model,'delete_date'); ?>
		<?php echo $form->error($model,'delete_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'delete_by'); ?>
		<?php echo $form->textField($model,'delete_by',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'delete_by'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->