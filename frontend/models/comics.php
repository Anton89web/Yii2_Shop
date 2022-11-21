<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property int $price
 * @property string $publisher
 */
class comics extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price', 'publisher'], 'required'],
            [['price'], 'integer'],
            [['name', 'publisher'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'price' => 'Price',
            'publisher' => 'Publisher',
        ];
    }

    /**
     * {@inheritdoc}
     * @return comicsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new comicsQuery(get_called_class());
    }
}
