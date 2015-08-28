<?php
/* @var $this AlumniController */
/* @var $model Alumni */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'alumni-form',
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
		<?php echo $form->labelEx($model,'tahun_lulus'); ?>
		<?php echo $form->textField($model,'tahun_lulus',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'tahun_lulus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ipk'); ?>
		<?php echo $form->textField($model,'ipk'); ?>
		<?php echo $form->error($model,'ipk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'judul_skripsi'); ?>
		<?php echo $form->textField($model,'judul_skripsi',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'judul_skripsi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usaha_kerja'); ?>
		<?php echo $form->textField($model,'usaha_kerja',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'usaha_kerja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_usaha_kerja'); ?>
		<?php echo $form->textField($model,'nama_usaha_kerja',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_usaha_kerja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat_usaha_kerja'); ?>
		<?php echo $form->textArea($model,'alamat_usaha_kerja',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'alamat_usaha_kerja'); ?>
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