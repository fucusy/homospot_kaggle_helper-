<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "search_case".
 *
 * @property integer $case_id
 * @property integer $product_uid
 * @property string $query
 * @property integer $relevance
 */
class SearchCase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'search_case';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['case_id', 'product_uid', 'query', 'relevance'], 'required'],
            [['case_id', 'product_uid', 'relevance'], 'integer'],
            [['query'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'case_id' => 'Case ID',
            'product_uid' => 'Product Uid',
            'query' => 'Query',
            'relevance' => 'Relevance',
        ];
    }

	public function getProduct()
	{
		return $this->hasOne(Product::className(), ['product_uid' => 'product_uid']);
	}
}
