<?php
/* @var $this PengurusEbpmsiController */
/* @var $model PengurusEbpmsi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pengurus-ebpmsi-form',
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
		<?php echo $form->labelEx($model,'kode_mahasiswa'); ?>
		<?php echo $form->textField($model,'kode_mahasiswa',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'kode_mahasiswa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_emsi'); ?>
		<?php echo $form->textField($model,'is_emsi',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'is_emsi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'posisi'); ?>
		<?php echo $form->textField($model,'posisi',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'posisi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'department_komisi'); ?>
		<?php echo $form->textField($model,'department_komisi',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'department_komisi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_aktif'); ?>
		<?php echo $form->textField($model,'tanggal_aktif',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'tanggal_aktif'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_nonaktif'); ?>
		<?php echo $form->textField($model,'tanggal_nonaktif',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'tanggal_nonaktif'); ?>
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
		<?php echo $form->labelEx($model,'is_delete'); ?>
		<?php echo $form->textField($model,'is_delete',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'is_delete'); ?>
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