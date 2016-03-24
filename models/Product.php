<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property string $product_uid
 * @property string $product_title
 * @property string $product_description
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_uid'], 'required'],
            [['product_description'], 'string'],
            [['product_uid'], 'string', 'max' => 10],
            [['product_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_uid' => 'Product Uid',
            'product_title' => 'Product Title',
            'product_description' => 'Product Description',
        ];
    }

	public function getAttributes()
	{
		return ProductAttribute::find()
			->where(['product_uid' => $this->product_uid])
			->orderBy('name')
			->all();
	}
}
