<?php
/**
 * FaqCategoryQuery
 *
 * This is the ActiveQuery class for [[\ommu\faq\models\FaqCategory]].
 * @see \ommu\faq\models\FaqCategory
 * 
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2018 OMMU (www.ommu.id)
 * @created date 27 April 2018, 00:36 WIB
 * @link https://github.com/ommu/mod-faqs
 *
 */

namespace ommu\faq\models\query;

class FaqCategoryQuery extends \yii\db\ActiveQuery
{
	/*
	public function active()
	{
		return $this->andWhere('[[status]]=1');
	}
	*/

	/**
	 * {@inheritdoc}
	 */
	public function published()
	{
		return $this->andWhere(['t.publish' => 1]);
	}

	/**
	 * {@inheritdoc}
	 */
	public function unpublish()
	{
		return $this->andWhere(['t.publish' => 0]);
	}

	/**
	 * {@inheritdoc}
	 */
	public function deleted()
	{
		return $this->andWhere(['t.publish' => 2]);
	}

	/**
	 * {@inheritdoc}
	 * @return \ommu\faq\models\FaqCategory[]|array
	 */
	public function all($db = null)
	{
		return parent::all($db);
	}

	/**
	 * {@inheritdoc}
	 * @return \ommu\faq\models\FaqCategory|array|null
	 */
	public function one($db = null)
	{
		return parent::one($db);
	}
}
