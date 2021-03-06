<?php
/**
 * Faq Helpfuls (faq-helpful)
 * @var $this app\components\View
 * @var $this ommu\faq\controllers\HelpfulController
 * @var $model ommu\faq\models\FaqHelpful
 *
 * @author Eko Hariyanto <haryeko29@gmail.com>
 * @contact (+62)857-4381-4273
 * @copyright Copyright (c) 2018 OMMU (www.ommu.id)
 * @created date 9 January 2018, 08:35 WIB
 * @modified date 30 April 2018, 09:07 WIB
 * @modified by Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)856-299-4114
 * @link https://github.com/ommu/mod-faqs
 *
 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Faq Helpfuls'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

if (!$small) {
    $this->params['menu']['content'] = [
        ['label' => Yii::t('app', 'Delete'), 'url' => Url::to(['delete', 'id' => $model->id]), 'htmlOptions' => ['data-confirm' => Yii::t('app', 'Are you sure you want to delete this item?'), 'data-method' => 'post', 'class' => 'btn btn-danger'], 'icon' => 'trash'],
    ];
} ?>

<?php
$attributes = [
    'id',
    [
        'attribute' => 'category_search',
        'value' => isset($model->faq->category) ? $model->faq->category->title->message : '-',
    ],
    [
        'attribute' => 'faq_search',
        'value' => isset($model->faq->questionRltn) ? $model->faq->questionRltn->message : '-',
    ],
    [
        'attribute' => 'userDisplayname',
        'value' => isset($model->user) ? $model->user->displayname : '-',
    ],
    [
        'attribute' => 'helpful',
        'value' => $model->helpful == 1 ? Yii::t('app', 'Yes') : Yii::t('app', 'No'),
    ],
    [
        'attribute' => 'message',
        'value' => $model->message ? $model->message : '-',
        'format' => 'html',
    ],
    [
        'attribute' => 'helpful_date',
        'value' => Yii::$app->formatter->asDatetime($model->helpful_date, 'medium'),
    ],
    'helpful_ip',
    [
        'attribute' => 'modified_date',
        'value' => Yii::$app->formatter->asDatetime($model->modified_date, 'medium'),
        'visible' => !$small,
    ],
    [
        'attribute' => 'modifiedDisplayname',
        'value' => isset($model->modified) ? $model->modified->displayname : '-',
    ],
];

echo DetailView::widget([
	'model' => $model,
	'options' => [
		'class' => 'table table-striped detail-view',
	],
	'attributes' => $attributes,
]); ?>