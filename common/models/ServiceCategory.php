<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "service_category".
 *
 * @property int $id
 * @property string $category
 * @property string $description
 *
 * @property ServiceType[] $serviceTypes
 */
class ServiceCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category', 'description'], 'required'],
            [['category', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Category',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServiceTypes()
    {
        return $this->hasMany(ServiceType::className(), ['service_category_id' => 'id']);
    }
}
