<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "service_type".
 *
 * @property int $id
 * @property int $service_category_id
 * @property string $service_type_name
 * @property string $description
 *
 * @property ServiceCategory $serviceCategory
 */
class ServiceType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['service_category_id', 'service_type_name'], 'required'],
            [['service_category_id'], 'integer'],
            [['service_type_name'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 255],
            [['service_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => ServiceCategory::className(), 'targetAttribute' => ['service_category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'                    => 'ID',
            'service_category_id'   => 'Category',
            'service_type_name'     => 'Service Type',
            'description'           => 'Description',
            'category'              => 'Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasOne(ServiceCategory::className(), ['id' => 'service_category_id']);
    }
    public function getCategory()
    {
        return $this->categories ? $this->categories->category: '-';

    }
}
