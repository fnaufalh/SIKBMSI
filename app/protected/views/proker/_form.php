<?php
/* @var $this ProkerController */
/* @var $model Proker */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proker-form',
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
		<?php echo $form->labelEx($model,'nama_proker'); ?>
		<?php echo $form->textField($model,'nama_proker',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_proker'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'department'); ?>
		<?php echo $form->textField($model,'department',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'department'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pj_proker'); ?>
		<?php echo $form->textField($model,'pj_proker',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pj_proker'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_event'); ?>
		<?php echo $form->textField($model,'is_event',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'is_event'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_event'); ?>
		<?php echo $form->textField($model,'nama_event',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_event'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tempat'); ?>
		<?php echo $form->textField($model,'tempat',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'tempat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_dilaksanakan'); ?>
		<?php echo $form->textField($model,'tgl_dilaksanakan'); ?>
		<?php echo $form->error($model,'tgl_dilaksanakan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_berakhir'); ?>
		<?php echo $form->textField($model,'tgl_berakhir'); ?>
		<?php echo $form->error($model,'tgl_berakhir'); ?>
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