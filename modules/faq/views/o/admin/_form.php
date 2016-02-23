<?php
/**
 * @var $this AdminController
 * @var $model Faqs
 * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra.sudaryanto@gmail.com>
 * @copyright Copyright (c) 2014 Ommu Platform (ommu.co)
 * @link http://company.ommu.co
 * @contact (+62)856-299-4114
 *
 */
?>

<?php $form=$this->beginWidget('application.components.system.OActiveForm', array(
	'id'=>'faqs-form',
	'enableAjaxValidation'=>true,
	//'htmlOptions' => array('enctype' => 'multipart/form-data')
)); ?>

<div class="dialog-content">

	<fieldset>

		<?php //begin.Messages ?>
		<div id="ajax-message">
			<?php echo $form->errorSummary($model); ?>
		</div>
		<?php //begin.Messages ?>
		
		<div class="clearfix">
			<?php echo $form->labelEx($model,'cat_id'); ?>
			<div class="desc">
				<?php if(FaqCategory::getCategory('group') != null) {
					echo $form->dropDownList($model,'cat_id', FaqCategory::getCategory('group'));
				} else {
					echo $form->dropDownList($model,'cat_id', array('prompt'=>Phrase::trans(11019,1)));
				}?>
				<?php echo $form->error($model,'cat_id'); ?>
			</div>
		</div>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'questions'); ?>
			<div class="desc">
				<?php
				$model->questions = Phrase::trans($model->question, 2);
				echo $form->textArea($model,'questions',array('maxlength'=>128,'class'=>'span-11 smaller')); ?>
				<?php echo $form->error($model,'questions'); ?>
			</div>
		</div>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'answers'); ?>
			<div class="desc">
				<?php
				$model->answers = Phrase::trans($model->answer, 2);
				echo $form->textArea($model,'answers',array('class'=>'span-11 medium')); ?>
				<?php echo $form->error($model,'answers'); ?>
			</div>
		</div>

		<div class="clearfix publish">
			<?php echo $form->labelEx($model,'publish'); ?>
			<div class="desc">
				<?php echo $form->checkBox($model,'publish'); ?>
				<?php echo $form->labelEx($model,'publish'); ?>
				<?php echo $form->error($model,'publish'); ?>
			</div>
		</div>

	</fieldset>
</div>
<div class="dialog-submit">
	<?php echo CHtml::submitButton($model->isNewRecord ? Phrase::trans(1,0) : Phrase::trans(2,0) ,array('onclick' => 'setEnableSave()')); ?>
	<?php echo CHtml::button(Phrase::trans(4,0), array('id'=>'closed')); ?>
</div>
<?php $this->endWidget(); ?>
