<?php
/**
 * Faqs (faqs)
 * @var $this yii\web\View
 * @var $this app\modules\faq\controllers\FaqsController
 * @var $model app\modules\faq\models\search\Faqs
 * @var $form yii\widgets\ActiveForm
 * version: 0.0.1
 *
 * @copyright Copyright (c) 2018 ECC UGM (ecc.ft.ugm.ac.id)
 * @link http://ecc.ft.ugm.ac.id
 * @author Eko Hariyanto <haryeko29@gmail.com>
 * @created date 5 January 2018, 17:01 WIB
 * @contact (+62)857-4381-4273
 *
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="search-form">
	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>
		<?= $form->field($model, 'faq_id') ?>

		<?= $form->field($model, 'publish') ?>

		<?= $form->field($model, 'cat_id') ?>

		<?= $form->field($model, 'question') ?>

		<?= $form->field($model, 'answer') ?>

		<?= $form->field($model, 'orders') ?>

		<?= $form->field($model, 'creation_date') ?>

		<?= $form->field($model, 'creation_id') ?>

		<?= $form->field($model, 'modified_date') ?>

		<?= $form->field($model, 'modified_id') ?>

		<?= $form->field($model, 'updated_date') ?>

		<?= $form->field($model, 'slug') ?>

		<div class="form-group">
			<?php echo Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
			<?php echo Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
		</div>
	<?php ActiveForm::end(); ?>
</div>
