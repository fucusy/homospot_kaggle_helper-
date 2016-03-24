<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_attribute".
 *
 * @property integer $attribute_id
 * @property integer $product_uid
 * @property string $name
 * @property string $value
 */
class ProductAttribute extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_attribute';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_uid'], 'integer'],
            [['value'], 'string'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'attribute_id' => 'Attribute ID',
            'product_uid' => 'Product Uid',
            'name' => 'Name',
            'value' => 'Value',
        ];
    }
}
